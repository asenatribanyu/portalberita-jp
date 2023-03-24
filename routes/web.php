<?php

use App\Http\Controllers\DashboardArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Models\Article;
use App\Models\Category_Article;

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
    return view('home');
  });
  
Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authen']);
Route::post('/logout',[LoginController::class,'logout']);

Route::get('/preview', function () {
    return view('preview');
});

Route::get('/dashboard', function () {
    return view('dashboard/view',['articles'=>Article::with(['categories'])->get()]);
 })->middleware('auth');

//  Route::get('/dashboard/input', function () {
    
// });

Route::get('/dashboard/edit', function () {
    return view('dashboard/edit');
});

Route::get('/dashboard/edit/content', function () {
    return view('dashboard/edit-content');
});

Route::resource('/dashboard/input',DashboardArticleController::class);

Route::get('/categories', function () {
    return view('categories');
});
  
Route::get('/about', function () {
    return view('about');

});

