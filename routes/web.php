<?php

use Illuminate\Support\Facades\Route;


Route::resource('blog', BlogController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('search', 'SearchController@post')->name('search.posts');


Route::get('posts', 'PostController@index');
Route::get('posts/table', 'PostController@table');
Route::get('posts/create', 'PostController@create');
Route::post('posts/store', 'PostController@store');

Route::get('posts/{post:slug}/edit', 'PostController@edit');
Route::patch('posts/{post:slug}/edit', 'PostController@update');

Route::delete('posts/{post:slug}/delete', 'PostController@destroy');

Route::get('posts/{post:slug}', 'PostController@show');

// Route::view('posts/table', 'posts/table');
// Route::view('posts', 'about');

Route::view('about', 'about');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/posts/create', function () {
    return view('posts/create');
})->middleware(['auth'])->name('posts/create');

// Route::get('/posts/table', function () {
//     return view('posts/table');
// })->middleware(['auth'])->name('posts/table');

require __DIR__.'/auth.php';
