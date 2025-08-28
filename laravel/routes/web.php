<?php

# importações de Classes do Laravel
use Illuminate\Support\Facades\Route;

# define uma rota - url - caminho
Route::get('/', function () {
    return "Home do Site";
});

Route::get( '/painel', function(){
    return view('painel');
});
