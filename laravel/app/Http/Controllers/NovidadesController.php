<?php

namespace App\Http\Controllers;

use App\Models\Novidades;
use Illuminate\Http\Request;

class NovidadesController extends Controller
{

    # método construtor - __construct()
    private function __construct(){
        # criar o nosso cadastro inicial
        # acesso direto à classe estática Novidades
        Novidades::create([
            'email' => 'maycon.aguerra@senacsp.edu.br',
            'validado' => '1',
            'opt_out' => 'sim',
            'motivo_saida' => 'Não quero mais.',
        ]);

    }

    # cadastra dados de teste (fake)
    private function dadosTeste(){

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
