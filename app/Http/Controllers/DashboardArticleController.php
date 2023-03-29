<?php

namespace App\Http\Controllers;
use Cviebrock\EloquentSluggable\Services\SlugService;
use App\Models\Article;
use App\Models\Category;
use App\Models\Type;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class DashboardArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('dashboard/article/input',['types'=>Type::all(),'categories'=>Category::all() ,"title" => "Add Content"]);
         

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        if ($request['tag']) {
            $validatedData = $request->validate([
                'tag' => 'required'
            ]);
            $tag = new Category([
                'category_name' => $validatedData['tag']
            ]);
            $tag->save();
            return redirect('/dashboard/article/create');
        }else {
            $validatedData = $request->validate([
                'title' => 'required',
                'type_id'=> 'required',
                'category_id'=>'required|array',
                'content'=> 'required',
                'video_link'=> 'nullable|string',
                'thumbnail'=> 'nullable|image'
            ]);
    
            if($request->file('thumbnail')){
                $validatedData['thumbnail'] = $request->file('thumbnail')->store('thumbnails');
            }
            
            $article = new Article([
                'title' => $validatedData['title'],
                'slug' => SlugService::createSlug(Article::class, 'slug', $validatedData['title'], ['unique' => false]),
                'content' => $validatedData['content'],
                'excerpt' => Str::limit(strip_tags($request->content), 150, '...'),
                'user_id' => auth()->user()->id,
                'type_id'=>$validatedData['type_id'],
            ]);
            if ($request->has('thumbnail')) {
                $article->thumbnail = $validatedData['thumbnail'];
            }
            
            if ($request->has('video_link')) {
                $article->video_link = $validatedData['video_link'];
            }
            
            $article->save();
    
            foreach ($validatedData['category_id'] as $categoryId) {
                $category = Category::find($categoryId);
                 $category->articles()->attach($article->id);
            }
            
            
            
                    
            return redirect('/dashboard');
        }
        
        
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('dashboard/article/edit', [
            'types'=>Type::all(),'categories'=>Category::all(),
            "title" => "Edit Content",
            'articles'=>Article::all(),
    ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('dashboard.article.edit-content', [
            "title" => "Edit Content",
            'categories'=>Category::all(),
            'articles' =>$article,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        if ($request['tag']) {
            $validatedData = $request->validate([
                'tag' => 'required'
            ]);
            $tag = new Category([
                'category_name' => $validatedData['tag']
            ]);
            $tag->save();
            return redirect('/dashboard');
        }else {
            $validatedData = $request->validate([
                'title' => 'required',
                'category_id' => 'required|array',
                'content' => 'required',
                'video_link' => 'nullable|string',
                'thumbnail' => 'nullable|image'
            ]);
            $validatedData['slug'] = SlugService::createSlug(Article::class, 'slug', $validatedData['title'], ['unique' => false]);
            $validatedData['excerpt'] = Str::limit(strip_tags($request->content), 150, '...');
            
            if($request->hasFile('thumbnail')){
                if($article->thumbnail){
                    Storage::delete($article->thumbnail);
                };
                $validatedData['thumbnail'] = $request->file('thumbnail')->store('thumbnails');
            }
            $article->update($validatedData);
            $article->categories()->sync($validatedData['category_id']);
    
            return redirect('/dashboard/article/show');
        }
        
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {

        $article->categories()->detach();

        if ($article->thumbnail) {
            Storage::delete($article->thumbnail);
        }
        Article::destroy($article->id);
        return redirect('/dashboard');
    }
    public function uploadtrix(Request $request)
    {
        if($request->hasFile('file')) {
            //get filename with extension
            $filenamewithextension = $request->file('file')->getClientOriginalName();
     
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
     
            //get file extension
            $extension = $request->file('file')->getClientOriginalExtension();
     
            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;
     
            //Upload File
            $request->file('file')->storeAs('/trix', $filenametostore);
     
            // you can save image path below in database
            $path = asset('storage/trix/'.$filenametostore);
     
            echo $path;
            exit;
        }
    }
    
}