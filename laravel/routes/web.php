<?php

# importações de Classes do Laravel
use Illuminate\Support\Facades\Route;

# define uma rota - url - caminho
Route::get('/', function () {
    return view('home');
});

Route::get( '/painel', function(){
    return "<h1>Título</h1>";
});
