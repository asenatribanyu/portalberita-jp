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
        $select_categories = 'Categories';
        $select_type = 'Type';
        $select_date = 'Date';
        $articles = Article::query();

    if ($request->has('category')) {
        $category = $request['category'];
        $select_categories = $category;
        $articles->whereHas('categories', function ($query) use ($category) {
            $query->where('categories.category_name', $category);
            
        });
    }

    if ($request->has('type')) {
        $articles->where('type_id', $request->input('type'));
        $type = Type::where('id',$request->input('type'))->get();
        $select_type = $type->first()->type_name;
    }

    if ($request->has('date')) {
        if ($request->input('date') == 'Oldest') {
            $articles->orderBy('created_at', 'asc');
            $select_date = $request['date'];
        } else {
            $articles->orderBy('created_at', 'desc');
            $select_date = $request['date'];
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
        return view('category/categories',  compact('categories', 'types', 'error','title','select_categories','select_type','select_date'));
    }
    
        return view('category/categories', compact('categories', 'types', 'articles','error','title','select_categories','select_type','select_date'));
    }
    
}

