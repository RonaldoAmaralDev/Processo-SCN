<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cpf',
        'dt_nascimento',
        'sexo',
        'endereco',
        'cidade',
        'uf',
    ];

    protected $hidden = ['id'];
    protected $table = 'clientes';
}
