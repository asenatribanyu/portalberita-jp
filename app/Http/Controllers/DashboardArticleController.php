<?php

namespace App\Http\Controllers;
use Cviebrock\EloquentSluggable\Services\SlugService;
use App\Models\Article;
use App\Models\ArticleTrans;
use App\Models\Category;
use App\Models\Type;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Facades\Image;


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
         return view('dashboard/article/input',['types'=>Type::all(),'categories'=>Category::all() ,"title" => "| Add Content"]);
         

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
                'title' => 'required|unique:articles',
                'title-jp' => 'required|unique:article_trans,title',
                'type_id'=> 'required',
                'category_id'=>'required|array',
                'content'=> 'nullable',
                'content-jp'=> 'nullable',
                'pin'   =>'string',
                'video_link'=> 'nullable|string',
                'thumbnail'=> 'nullable|image'
            ]);
            
            $withoutCaptions = preg_replace('/<figcaption\b[^>]*>.*<\/figcaption>/s', '', $request->content);
            $withoutCaptionsjp = preg_replace('/<figcaption\b[^>]*>.*<\/figcaption>/s', '', $request['content-jp']);
            $withoutlinkimage = preg_replace('/(<figure\b[^>]*>)\s*<a\b[^>]*>(.*?)<\/a>\s*(<\/figure>)/s', '$1$2$3', $request->content);
            $withoutlinkimagejp = preg_replace('/(<figure\b[^>]*>)\s*<a\b[^>]*>(.*?)<\/a>\s*(<\/figure>)/s', '$1$2$3', $request['content-jp']);
            
            $article = new Article([
                'title' => $validatedData['title'],
                'slug' => SlugService::createSlug(Article::class, 'slug', $validatedData['title'], ['unique' => false]),
                'content' => $withoutlinkimage,
                'excerpt' => Str::limit(strip_tags($withoutCaptions), 150, '...'),
                'user_id' => auth()->user()->id,
                'type_id'=>$validatedData['type_id'],
            ]);
            if ($request->has('thumbnail')) {
                $thumbnail = $request->file('thumbnail')->store('thumbnails');
                Image::make('storage/' . $thumbnail)->save(null,0,'webp');
                $article->thumbnail =$thumbnail;
            }
            // if ($request->has('thumbnail')) {
            //     $article->thumbnail = $request->file('thumbnail')->store('thumbnails');
            // }
            
            if ($request->has('video_link')) {
                $article->video_link = $validatedData['video_link'];
            }
            if($request->has('pin')){
                $article->pin = $validatedData['pin'];
            }
            $article->save();
            $articleTrans = new ArticleTrans([
                'locale' => 'id',
                'title' => $validatedData['title'],
                'excerpt' => Str::limit(strip_tags($withoutCaptions), 100, '...'),
                'content' => $withoutlinkimage,
            ]);

            $articleTrans->article()->associate($article);
            $articleTrans->save();

            $articleTransJP = new ArticleTrans([
                'locale' => 'jp',
                'title' => $validatedData['title-jp'],
                'excerpt' => Str::limit(strip_tags($withoutCaptionsjp), 60, '...'),
                'content' => $withoutlinkimagejp,
            ]);
            $articleTransJP->article()->associate($article);
            $articleTransJP->save();
    
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
            "title" => "| Edit Content",
            'articles'=>Article::all(),
    ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('dashboard.article.edit-content', [
            "title" => "| Edit Content",
            'categories'=>Category::all(),
            'articles' =>$article,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article, ArticleTrans $articletrans)
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
                'category_id'=>'required|array',
                'content'=> 'required',
                'pin'   =>'string',
                'video_link'=> 'nullable|string',
                'thumbnail'=> 'nullable|image'
            ]);
            if ($request->pin != true) {
                $validatedData['pin'] = false;
            }

            $trans = $request->validate([
                'title-jp' => 'required',
                'content-jp'=> 'required',
            ]);
            $withoutCaptions = preg_replace('/<figcaption\b[^>]*>.*<\/figcaption>/s', '', $request->content);
            $withoutCaptionsjp = preg_replace('/<figcaption\b[^>]*>.*<\/figcaption>/s', '', $request['content-jp']);
            $withoutlinkimage = preg_replace('/(<figure\b[^>]*>)\s*<a\b[^>]*>(.*?)<\/a>\s*(<\/figure>)/s', '$1$2$3', $request->content);
            $withoutlinkimagejp = preg_replace('/(<figure\b[^>]*>)\s*<a\b[^>]*>(.*?)<\/a>\s*(<\/figure>)/s', '$1$2$3', $request['content-jp']);
            $validatedData['slug'] = SlugService::createSlug(Article::class, 'slug', $validatedData['title'], ['unique' => false]);
            $validatedData['excerpt'] = Str::limit(strip_tags($withoutCaptions), 150, '...');
            
            if ($request->has('video_link')) {
                $validatedData['video_link'] = $validatedData['video_link'];;
            }
            
            if($request->hasFile('thumbnail')){
                if($article->thumbnail){
                    Storage::delete($article->thumbnail);
                };
                $thumbnail = $request->file('thumbnail')->store('thumbnails');
                Image::make('storage/' . $thumbnail)->save(null,0,'webp');
                $validatedData['thumbnail'] = $thumbnail;
            }
            $trans['excerpt-jp'] = Str::limit(strip_tags($withoutCaptionsjp), 60, '...');
            $article->update($validatedData);

            
            $articletrans->where('article_id', $article->id)->where('locale', 'id')->update([
                'title' => $validatedData['title'],
                'excerpt' => $validatedData['excerpt'],
                'content' => $withoutlinkimage
            ]);
    
            $articletrans->where('article_id', $article->id)->where('locale', 'jp')->update([
                'title' => $trans['title-jp'],
                'excerpt' => $trans['excerpt-jp'],
                'content' => $withoutlinkimagejp
            ]);
            $article->categories()->sync($validatedData['category_id']);
    
            return redirect('/dashboard/article/edit');
        }
        
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Article $article)
    {
        $article->categories()->detach();
    
    if ($article->thumbnail) {
        Storage::delete($article->thumbnail);
    }

    $article->articletrans()->delete();
    $article->delete();
        return redirect('/dashboard/article/edit');
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
    
    public function tag()
    {
        return view('dashboard/article/tag',[
            'categories'=>Category::all(),
            "title" => "| Add Tag"
        ]);
    }
    public function controltag(Request $request)
    {
        if ($request['tag']) {
            $validatedData = $request->validate([
                'tag' => 'required'
            ]);
            $tag = new Category([
                'category_name' => $validatedData['tag']
            ]);
            $tag->save();
            return redirect('/dashboard/article/tag');
        }else {
        $validatedData = $request->validate([
            'category_id'=>'required|array',
        ]);
        foreach ($validatedData['category_id'] as $categoryId) {
            $category = Category::find($categoryId);
                if ($category->articles->count() > 0) {
                    // category has articles associated with it, cannot delete
                    return redirect('/dashboard/article/tag')->with('error','Cannot delete category with associated articles.');
                    
                } else {
                    // no articles associated with category, delete category
                    $category->delete();
                }
            }
            return redirect('/dashboard/article/tag');
        }
    }
    public function pinned(Request $request, Article $article)
    {
        $validatedData = $request->validate([
            'pin'   =>'string',
        ]);
        if ($request->pin != true) {
            $validatedData['pin'] = false;
        }else{
            $validatedData['pin'] = true;
        }

        $article->update($validatedData);
        return redirect()->back();
    }
}