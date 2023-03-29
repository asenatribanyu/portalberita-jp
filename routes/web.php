<?php

use Illuminate\Support\Facades\Route;

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
    return view('home/home', [
        "title" => ""
    ]);
  });

Route::get('/login', function () {
    return view('login/login', [
        "title" => "| Sign In"
    ]);
});

Route::get('/preview', function () {
    return view('article/preview', [
        "title" => "| Preview"
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard/view', [
        "title" => "| Dashboard"
    ]);
 });

 Route::get('/dashboard/input', function () {
    return view('dashboard/input', [
        "title" => "| Add Content"
    ]);
});

Route::get('/dashboard/edit', function () {
    return view('dashboard/edit', [
        "title" => "| Edit Content"
    ]);
});

Route::get('/dashboard/edit/content', function () {
    return view('dashboard/edit-content', [
        "title" => "| Edit Content"
    ]);
});

Route::get('/categories', function () {
    return view('category/categories', [
        "title" => "| Categories"
    ]);
});

Route::get('/about', function () {
    return view('about/about', [
        "title" => "| About"
    ]);
});

