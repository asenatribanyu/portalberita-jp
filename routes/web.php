<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardArticleController;
use App\Models\Article;
use App\Models\Category;
use App\Models\Type;
use Illuminate\Support\Facades\App;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/link', function () {
    $targetFolder = base_path().'/storage/app/public';
    $linkFolder = $_SERVER['DOCUMENT_ROOT'].'/storage';
    symlink($targetFolder, $linkFolder);
    echo 'Success';
 });

Route::get('/', function () {
    if($locale = session('locale')){
        App::setlocale($locale);
    };
    return view('home/home', [
        "title" => "",
        'pinned'=>Article::where('pin',"1")->latest()->take(3)->get(),
        'views'=>Article::with(['categories'])->withCount('views')->where('po',false)->orderByDesc('counts')->take(3)->get(),
        'latest' => Article::with(['categories'])->where('po',false)->latest()->take(3)->get(),
        'articles'=>Article::where('type_id',1)->where('po',false)->take(6)->get(),
        'videos'=>Article::where('type_id',2)->take(3)->get(),
        'random_articles'=>Article::inRandomOrder()->where('type_id',1)->take(9)->get(),
    ]);
  });

Route::get('/categories',[CategoryController::class,'index'])->name('categories.index');

Route::get('/about', function () {
    if($locale = session('locale')){
        App::setlocale($locale);
    };
    return view('about/about', [
        "title" => "| About"
    ]);
});

Route::get('/gallery', function () {
    return view('gallery/gallery', [
        "title" => "| Gallery"
    ]);
});

Route::get('/switch/{locale}', [ArticleController::class, 'switch']);

Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');

Route::post('/login',[LoginController::class,'authen']);

Route::post('/logout',[LoginController::class,'logout']);

Route::put('/dashboard/article/{article}/pinned',[DashboardArticleController::class,'pinned'])->middleware('auth');

Route::get('/dashboard/article/tag',[DashboardArticleController::class,'tag'])->middleware('auth');

Route::delete('/dashboard/article/controltag',[DashboardArticleController::class,'controltag'])->middleware('auth');

Route::post('/dashboard/article/uploadtrix',[DashboardArticleController::class,'uploadtrix'])->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard/view',['articles'=>Article::all()->where('po',false),"title" => "| Dashboard"]);
 })->middleware('auth');

Route::resource('/dashboard/article',DashboardArticleController::class)->middleware('auth');

Route::get('/{article}',[ArticleController::class,'show']);