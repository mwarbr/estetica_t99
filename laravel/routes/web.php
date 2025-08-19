<?php

# importações de Classes do Laravel
use Illuminate\Support\Facades\Route;

# define uma rota - url - caminho
Route::get('/', function () {
    #return view('home2');
    # return "<h1> Home 2 </h1>";
    return redirect("https://www.sp.senac.br");
});
