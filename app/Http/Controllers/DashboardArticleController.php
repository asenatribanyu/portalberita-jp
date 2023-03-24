<?php

namespace App\Http\Controllers;
use Cviebrock\EloquentSluggable\Services\SlugService;
use App\Models\Article;
use App\Models\Category;
use App\Models\Category_Article;
use App\Models\Type;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class DashboardArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard/input',['types'=>Type::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'type_id'=> 'required',
            'category_name' => 'required',
            'content'=> 'required',
            'video_link'=> 'nullable|string',
            'thumbnail'=> 'nullable|image'
        ]);
        if($request->file('thumbnail')){
            $validatedData['thumbnail'] = $request->file('thumbnail')->store('thumbnails');
        }
        $categorySlug = SlugService::createSlug(Category::class, 'category_slug', $request->category_name, ['unique' => false]);
        
        $article = new Article([
            'title' => $validatedData['title'],
            'slug' => SlugService::createSlug(Article::class, 'slug', $validatedData['title'], ['unique' => false]),
            'content' => $validatedData['content'],
            'excerpt' => Str::limit(strip_tags($request->content), 100, '...'),
            'user_id' => auth()->user()->id,
            'type_id'=>$validatedData['type_id'],
            'category_slug' => $categorySlug,
        ]);
        
        $category = new Category([
            'category_name' => $validatedData['category_name'],
            'category_slug' => $categorySlug,
        ]);
        
        if ($request->has('thumbnail')) {
            $article->thumbnail = $validatedData['thumbnail'];
        }
        
        if ($request->has('video_link')) {
            $article->video_link = $validatedData['video_link'];
        }
        
        $article->save();
        $category->save();
        $category->articles()->attach($article->id);
                
        return redirect('/dashboard');
        // $validatedData = $request->validate([
        //     'title' => 'required',
        //     'type_id'=> 'required',
        //     'category_name' => 'required',
        //     'content'=> 'required',
        //     'video_link'=> 'nullable|url',
        //     'thumbnail'=> 'nullable|image'
        // ]);

        // $categorySlug=(SlugService::createSlug(Category::class, 'category_slug', $request->category_name, ['unique' => false]));
        // $article = ([
        //     'title' => $validatedData['title'],
        //     'slug' => SlugService::createSlug(Article::class, 'slug', $validatedData['title'], ['unique' => false]),
        //     'content' => $validatedData['content'],
        //     'excerpt' => Str::limit(strip_tags($request->content), 100, '...'),
        //     'user_id' => auth()->user()->id,
        //     'type_id'=>$validatedData['type_id'],
        //     'video_link'=>$validatedData['video_link'],
        //     'thumbnail'=>$validatedData['thumbnail'],
        // ]);
        // $category =([
        //     'category_name' => $validatedData['category_name'],
        //     'category_slug' => $categorySlug,
        // ]);

        //     Category::create($category);
        //     Article::create($article);
           

        // return redirect('/dashboard');
           // $validatedData['slug'] = SlugService::createSlug(Article::class, 'slug', $request->title, ['unique' => false]);
        // $validatedData['user_id'] = auth()->user()->id;
        // $validatedData['excerpt'] = Str::limit(strip_tags($request->content),100, '...'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
