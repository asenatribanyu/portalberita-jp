<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Article_View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class ArticleController extends Controller
{
     public function show(Article $article)
    {
        if($locale = session('locale')){
            App::setlocale($locale);
        };
        $ip = request()->ip();
    if (!$article->hasViewed($ip)) {
        $article->recordView($ip);
    }
    $categories = $article->categories->pluck('category_name');

    $related_articles = Article::whereHas('categories', function ($query) use ($categories) {
    $query->whereIn('category_name', $categories);
    })
    ->where('id', '<>', $article->id)
    ->take(5)
    ->get();

    if ($related_articles->isEmpty()) {
    $related_articles = Article::inRandomOrder()
        ->where('id', '<>', $article->id)
        ->take(5)
        ->get();
    }
    $random_articles = Article::inRandomOrder()
    ->where('id', '<>', $article->id)
    ->take(5)
    ->get();
        return view('article/preview', [
            "title" => "| Preview",
            'articles'=> $article,
            'related_articles'=>$related_articles,
            'random_articles'=>$random_articles,
        ]);
    }
    
    public function switch($locale)
    {   
    session(['locale' => $locale]); // Store the selected locale in the session
    App::setLocale($locale); // Set the application locale to the selected locale
    // dd(App::getLocale());
    return redirect()->back();
    }
    
}
