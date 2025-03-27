<?php

// backend/app/Models/Curso.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = ['nome', 'carga_horaria', 'descricao', 'status', 'imagem'];
}

