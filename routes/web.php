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

use App\Task; // Allows one to remove the App\ prefix

Route::get('/tasks', function () {
    $tasks = App\Task::all(); //Eloquent

    return view('tasks.index', compact('tasks'));
});

Route::get('/tasks/{task}', function ($id) {
    //$task = DB::table('tasks')->find($id);

    //$task = App\Task::where('id', '=', $id);
    $task = App\Task::find($id);

    return view('tasks.show', compact('task'));
});

// Route::get('/', function () {
//     //$tasks = DB::table('tasks')->get();
//
//     $tasks = App\Task::all(); //Eloquent
//
//     // return $tasks;  // Displays JSON
//
//     return view('welcome', compact('tasks'));
// });

// Route::get('/intro', function () {
//     $tasks = [
//         'Go to the store',
//         'Finish my screencast',
//         'Clean the house'
//     ];
//     $name = 'Jennifer';
//     return view('intro', compact('tasks', 'name'));
// });

// Route::get('/', function () {
//     $name = 'Jennifer';
//     return view('welcome', compact('name'));
// });

// Route::get('/', function () {
//     $name = 'Jennifer';
//     return view('welcome', ['name' => $name]);
// });

// Route::get('/', function () {
//     return view('welcome')->with('name', 'Jennifer');
// });

// Route::get('/', function () {
//     return view('welcome', [
//         'name' => 'Jennifer'
//     ]);
// });
