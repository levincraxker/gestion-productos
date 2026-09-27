<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
    return redirect()->route('categorias.index');
});

Route::resource('categorias', CategoriaController::class);

Route::resource('productos', ProductoController::class);