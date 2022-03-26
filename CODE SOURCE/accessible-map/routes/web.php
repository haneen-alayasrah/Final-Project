<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\HomeController;


//::get('/base' ,[BaseController::class,'Base'])->name = 'base';
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'showdata']);


Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index']);
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store']);


Route::get('/article', [App\Http\Controllers\ArticleController::class, 'index']);
Route::get('show-article/{article_id}', [App\Http\Controllers\ArticleController::class, 'show']);
Route::post('/add-comment/{article_id}', [App\Http\Controllers\ArticleController::class, 'store']);
Route::get('delete-articlecomment/{article_id}' , [App\Http\Controllers\ArticleController::class,'destroy']);


Route::get('/place', [App\Http\Controllers\PlaceController::class, 'index']);
Route::get('/show-place/{place_id}', [App\Http\Controllers\PlaceController::class, 'show']);

Route::get('/service', [App\Http\Controllers\ServiceController::class, 'index']);

Route::get('/about', [App\Http\Controllers\AboutController::class, 'index']);



Route::prefix('admin')->middleware(['auth' , 'isAdmin'])->group(function(){

    Route::get('/dashboard' , [App\Http\Controllers\Admin\DashboardController::class, 'index']);

    Route::get('type' , [App\Http\Controllers\Admin\TypeController::class,'index']);
    Route::get('add-type' , [App\Http\Controllers\Admin\TypeController::class,'create']);
    Route::post('add-type' , [App\Http\Controllers\Admin\TypeController::class,'store']);
    Route::get('edit-type/{type_id}' , [App\Http\Controllers\Admin\TypeController::class,'edit']);
    Route::put('update-type/{type_id}' , [App\Http\Controllers\Admin\TypeController::class,'update']);
    Route::get('delete-type/{type_id}' , [App\Http\Controllers\Admin\TypeController::class,'destroy']);

    Route::get('city' , [App\Http\Controllers\Admin\CityController::class,'index']);
    Route::get('add-city' , [App\Http\Controllers\Admin\CityController::class,'create']);
    Route::post('add-city' , [App\Http\Controllers\Admin\CityController::class,'store']);
    Route::get('edit-city/{city_id}' , [App\Http\Controllers\Admin\CityController::class,'edit']);
    Route::put('update-city/{city_id}' , [App\Http\Controllers\Admin\CityController::class,'update']);
    Route::get('delete-city/{city_id}' , [App\Http\Controllers\Admin\CityController::class,'destroy']);

    Route::get('places' , [App\Http\Controllers\Admin\PlaceController::class,'index']);
    Route::get('add-place' , [App\Http\Controllers\Admin\PlaceController::class,'create']);
    Route::post('add-place' , [App\Http\Controllers\Admin\PlaceController::class,'store']);
    Route::get('edit-place/{place_id}' , [App\Http\Controllers\Admin\PlaceController::class,'edit']);
    Route::put('update-place/{place_id}' , [App\Http\Controllers\Admin\PlaceController::class,'update']);
    Route::get('delete-place/{place_id}' , [App\Http\Controllers\Admin\PlaceController::class,'destroy']);

    Route::get('article' , [App\Http\Controllers\Admin\ArticleController::class,'index']);
    Route::get('add-article' , [App\Http\Controllers\Admin\ArticleController::class,'create']);
    Route::post('add-article' , [App\Http\Controllers\Admin\ArticleController::class,'store']);
    Route::get('edit-article/{article_id}' , [App\Http\Controllers\Admin\ArticleController::class,'edit']);
    Route::put('update-article/{article_id}' , [App\Http\Controllers\Admin\ArticleController::class,'update']);
    Route::get('delete-article/{article_id}' , [App\Http\Controllers\Admin\ArticleController::class,'destroy']);
    
    Route::get('contact' , [App\Http\Controllers\Admin\ContactController::class,'index']);

    Route::get('users' , [App\Http\Controllers\Admin\UserController::class,'index']);
    Route::get('user/{user_id}' , [App\Http\Controllers\Admin\UserController::class,'edit']);
    Route::put('update_user/{user_id}' , [App\Http\Controllers\Admin\UserController::class,'update']);



});
