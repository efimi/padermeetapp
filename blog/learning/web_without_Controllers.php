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
use App\Task;

Route::get('/tasks', function () {
    // return view('welcome', [
    //
    //     'name' => 'World'
    //
    // ]);

    // // oder
    // return view('welcome')->with('name','World');

    // // oder
      // $name = 'Jeffrey';
      // return view('welcome', ['name' => $name]);
          // oder
            // return view('welcome', compact('name'));

    // Do it hardcoded

          // $tasks = [
          //   'Go tho school',
          //   'BWL',
          //   'Trinke Wasser'
          // ];

    // Do it via DB


    // $tasks = DB::table('tasks')->latest()->get();

// Warum führt Tasks zu der Datenbank
    $tasks = Task::all();

    return view('tasks.index', compact('tasks'));
});


Route::get('/tasks/{task}', function ($id) {

    // kann man $task auch anderes benennen? Muss es das selbe sein wie in den {}?

    // $task = DB::table('tasks')->find($id);

    $task = Task::find($id);
    // dd($task);

    // return view('tasks/show', compact('tasks'));

    // !!!! task, nicht tasks
    return view('tasks.show', compact('task'));
});
