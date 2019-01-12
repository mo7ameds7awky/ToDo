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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', ['uses' => 'TasksController@index', 'as' => 'task.all']);
Route::get('/create/task', 'TasksController@store');
Route::get('/delete/task/{id}', ['uses' => 'TasksController@delete', 'as' => 'task.delete']);
Route::get('/update/task/{id}', ['uses' => 'TasksController@update', 'as' => 'task.update']);
Route::post('/task/save/{id}', ['uses' => 'TasksController@save', 'as' => 'task.save']);
Route::get('/complete/task/{id}', ['uses' => 'TasksController@complete', 'as' => 'task.complete']);