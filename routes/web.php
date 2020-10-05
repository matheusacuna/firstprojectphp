<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\CategoryController;
use App\Http\Controllers\Site\BlogController;
use App\Http\Controllers\Site\ContatoController;


Route::namespace('App\Http\Controllers\Site ')->group(function (){
    Route::get('/', [HomeController::class, '__invoke']);

    Route::get('produtos', [CategoryController::class, 'index']);
    Route::get('produtos/{slug}', [CategoryController::class, 'show']);

    Route::get('blog', [BlogController::class, '__invoke']);

    Route::view('sobre', 'site.about.index');

    Route::get('contato', [ContatoController::class, 'index']);
    Route::post('contato', [ ContatoController::class. 'form']);

});
