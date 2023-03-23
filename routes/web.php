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
    return view('home');
  });
  
Route::get('/login', function () {
    return view('login');
});

Route::get('/preview', function () {
    return view('preview');
});

Route::get('/dashboard', function () {
    return view('dashboard/view');
 });

 Route::get('/dashboard/input', function () {
    return view('dashboard/input');
});

Route::get('/dashboard/edit', function () {
    return view('dashboard/edit');
});

Route::get('/dashboard/edit/content', function () {
    return view('dashboard/edit-content');
});

Route::get('/categories', function () {
    return view('categories');
});
  
Route::get('/about', function () {
    return view('about');

});

