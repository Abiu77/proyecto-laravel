<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;

Route::get('/', [HomeController::class, "show"]);

Route::controller(PostsController::class)-> group(function(){
    Route::get('/posts/{id}', "show");
    Route::get('/posts/create', "create");
    Route::post('/posts', "store");
    Route::get('/posts/{id}/edit', "edit");
    Route::patch('/posts/{id}/edit', "update");
    Route::delete('/posts/{id}/edit', "destroy");
});
