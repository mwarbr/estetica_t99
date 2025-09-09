<?php

# importações de Classes do Laravel
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NovidadesController;

# define uma rota - url - caminho
Route::get('/', function () {
    return view('home'); # redirect('/caminho')
});

Route::get( '/painel', function(){
    return view('painel');
});

Route::get( '/novidades', function(){
    return view('novidades');
});

Route::get( '/sobre', function(){
    return view('sobre');
});

Route::get('/dev/faker', [NovidadesController::class, 'dadosTeste' ] );
