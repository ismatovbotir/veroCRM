<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MarkController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::group(['prefix'=>'admin','as'=>'admin.'],function(){
    Route::get('/',function(){
        return 'admin.index';
    })
    Route::resource('/user',UserController::class);
    Route::resource('/item',ItemController::class);
    Route::post('/mark/import',[MarkController::class,'import'])->name('mark.import');
    Route::resource('/mark',MarkController::class);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::fallback(function(){
    to_route('home');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
