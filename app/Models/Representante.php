<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Representante extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'cpf', 'data_nascimento', 'sexo','cidade_id'];

    public function cidade()
    {
        return $this->belongsTo(Cidade::class);
    }
}
