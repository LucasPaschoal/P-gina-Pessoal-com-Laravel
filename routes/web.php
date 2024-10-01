<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/sobre', [PageController::class, 'sobre'])->name('sobre');
Route::get('/portifolio', [PageController::class, 'portifolio'])->name('portifolio');
Route::get('/contato', [PageController::class, 'contato'])->name('contato');
