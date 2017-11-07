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

Route::get('/tasks','TasksController@index'); // call function index{}

Route::get('/tasks/{task}','TasksController@show'); // call function show{} but needs an $id
// geht auch mit blogtiteln, dann muss allerdings die Methode im Controller
 // angepasst werden.
