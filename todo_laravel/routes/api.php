<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:api')->group(function() {
    Route::get('/user', function(Request $request) {
        return $request->user();
    });

    Route::get('/todos', 'App\Http\Controllers\TodosController@index');
    Route::post('/todos', 'App\Http\Controllers\TodosController@store');
    Route::patch('/todos/{todo}', 'App\Http\Controllers\TodosController@update');
    Route::delete('/todos/{todo}', 'App\Http\Controllers\TodosController@destroy');
    Route::patch('/todosCheckAll', 'App\Http\Controllers\TodosController@updateAll');
    Route::delete('/todosDeleteCompleted', 'App\Http\Controllers\TodosController@destroyCompleted');

    Route::post('/logout', 'App\Http\Controllers\AuthController@logout');
});

Route::post('/login', 'App\Http\Controllers\AuthController@login');
Route::post('/register', 'App\Http\Controllers\AuthController@register');



