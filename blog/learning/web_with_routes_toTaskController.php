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

// unbedingt hinzufügen, oder gleich von anfang an generieren.
// sonst müsste man immer App\Task referenzieren.

  // use App\Task;
// braucht man nicht wenn man einen Controller hat


// if you get some requests for /tasks pass it to the TasksController
// App\Http\Controllers
// php artisan make:controller
Route::get('/tasks','TasksController@index'); // call function index{}

Route::get('/tasks/{task}','TasksController@show'); // call function show{} but needs an $id
  // show($id) needs to do
      // $task = Task::find($id);
      // return view('tasks.show', compact('task'));
