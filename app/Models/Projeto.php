<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    protected $table = 'projetos';

    protected $fillable = [
        'titulo',
        'categoria',
        'descricao',
        'imagem',
        'badge',
        'link_demo',
        'link_github',
        'tecnologias'
    ];

    protected $casts = [
        'tecnologias' => 'array'
    ];
}
