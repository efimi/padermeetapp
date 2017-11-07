<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','PostsController@index'); // for pa make:model Post -mc auskommentieren.
// , sonst UnexpectedValueException]
  // Invalid route action: [App\Http\Controllers\PostsController].
            // LÖSUNG: @index einfach sofort mitliefern



// Controller => PostsController
// Eloquent model => Post
// Mitgration => create_posts_table

// wehn you make a modell then you can also create a controller -c and migration -m
// php atrisan make:model Post -mc
