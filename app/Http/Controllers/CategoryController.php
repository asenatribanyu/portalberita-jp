<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Type;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $articles = Article::query();

    if ($request->has('category')) {
        $category = $request['category'];
        $articles->whereHas('categories', function ($query) use ($category) {
            $query->where('categories.id', $category);
        });
    }

    if ($request->has('type')) {
        $articles->where('type_id', $request->input('type'));
    }

    if ($request->has('date')) {
        if ($request->input('date') == 'oldest') {
            $articles->orderBy('created_at', 'asc');
        } else {
            $articles->orderBy('created_at', 'desc');
        }
    } else {
        $articles->latest();
    }
    if ($request->filled('search')) {
        $search = $request->search;
        $articles = $articles->where('title', 'LIKE', "%$search%");
    }

    $title = "| Categories";
    $categories = Category::all();
    $types = Type::all();
    $articles = $articles->paginate(9);
    $error =false;
    if ($articles->isEmpty()) {
        $error = true;
        return view('category/categories',  compact('categories', 'types', 'error','title'));
    }
    
        return view('category/categories', compact('categories', 'types', 'articles','error','title'));
    }
    
}

