<?php

# Para acesso ao banco o Laravel usa o Eloquent como framework
# classe que acessa a Entidade tabela novidades
# é obrigatório declarar na $fillable os campos que em algum momento serão preenchidos 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Novidades extends Model
{
    protected $fillable = [
        'email',
    ];
    
}
