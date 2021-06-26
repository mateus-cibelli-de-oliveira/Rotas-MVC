<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;
use Resources\Css\Produtos;

Route::get('/resources/css');

Route::get('/', [HomeController::class, 'index']);

Route::get('/produtos', [ProdutosController::class, 'index']);
Route::post('/produtos', [ProdutosController::class, 'index']);


