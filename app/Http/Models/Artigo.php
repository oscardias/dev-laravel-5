<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artigo extends Model
{
    // Relacionamento com usuários
    public function usuario()
    {
        return $this->belongsTo('App\Models\Usuario');
    }
}