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

Route::get('/', function () {
    $random_articles = Article::inRandomOrder()->where('type_id',1)->take(9)->get();
    if($locale = session('locale')){
        App::setlocale($locale);
    };
    return view('home/home', [
        "title" => "",
        'pinned'=>Article::where('pin',"1")->latest()->take(3)->get(),
        'views'=>Article::with(['categories'])->withCount('views')->orderByDesc('counts')->take(3)->get(),
        'latest' => Article::with(['categories'])->latest()->take(3)->get(),
        'articles'=>Article::where('type_id',1)->paginate(9),
        'videos'=>Article::where('type_id',2)->paginate(3),
        'random_articles'=>$random_articles,
    ]);
  });

Route::get('/categories',[CategoryController::class,'index'])->name('categories.index');
Route::get('/about', function () {
    return view('about/about', [
        "title" => "| About"
    ]);
});
Route::get('/switch/{locale}', [ArticleController::class, 'switch']);
Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authen']);
Route::post('/logout',[LoginController::class,'logout']);
Route::post('/dashboard/article/uploadtrix',[DashboardArticleController::class,'uploadtrix']);
Route::get('/dashboard', function () {
    return view('dashboard/view',['articles'=>Article::all(),"title" => "| Dashboard"]);
 })->middleware('auth');

Route::resource('/dashboard/article',DashboardArticleController::class);


Route::get('/{article}',[ArticleController::class,'show']);

