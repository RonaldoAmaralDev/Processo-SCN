<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;

    protected $fillable = [
        'descricao',
        'codigo',
        'custo',
        'margem'
    ];

    protected $hidden = ['id'];
    protected $table = 'produtos';
}
