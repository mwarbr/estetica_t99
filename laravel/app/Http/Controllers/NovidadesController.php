<?php

namespace App\Http\Controllers;

use App\Models\Novidades;
use Illuminate\Http\Request;
use Faker\Factory as Faker;

class NovidadesController extends Controller
{

    # método construtor - __construct()
    public function __construct(){
        
        if( app()->environment('local') )
        {
            # criar o nosso cadastro inicial
            # acesso direto à classe estática Novidades
            Novidades::create([
                'email' => 'maycon.aguerra@senacsp.edu.br',
                'validado' => '1',
                'opt_out' => 'sim',
                'motivo_saida' => 'Não quero mais.',
                'data_criacao' => date('Y-m-d h:i:s'),
            ]);

            # chamada do método desta classe
            $this->dadosTeste();
        }

    }

    # cadastra dados de teste (fake)
    public function dadosTeste(){

        # instancia a classe Faker()
        $faker = Faker::create();
        
        # realizar 10 cadastros por vez
        for ( $i=0; $i < 10; $i++ ){

            Novidades::create([
                'email' => $faker->unique()->safeEmail(),
                'data_criacao' => date('Y-m-d h:i:s'),
            ]);

        }

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Novidades $novidades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Novidades $novidades)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Novidades $novidades)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Novidades $novidades)
    {
        //
    }
}
