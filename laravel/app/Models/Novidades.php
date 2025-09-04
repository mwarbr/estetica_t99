<?php

# Para acesso ao banco o Laravel usa o Eloquent (ORM) como framework
# classe que acessa a Entidade tabela novidades
# é obrigatório declarar na $fillable os campos que em algum momento serão preenchidos ( caso contrário o create() não funcionará ) 

# no PHP temos 03 tipos de arrays (vetores)
# Indexado - Lista os dados com índices numéricos - $var = ['primeiro', 'segundo'] - $var[1]
# Associativo - usa chaves nomeadas - $var = [ 'chave'=>'valor', 'chave02' => 'valor02' ] - $var['chave02']
# Multidimensional - $var = [ ['chave03' => 'valor03'], ['valor01'] ] - $var[0]['chave03']
# $var = ['array']; $var = array('array');

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Novidades extends Model
{
    # atributo ou propriedade protegida que lista os campos que podem ser preenchidos
    protected $fillable = [
        'email',
        'validado',
        'opt_out',
        'motivo_saida',
    ];
    
}
