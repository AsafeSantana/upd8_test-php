<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'cpf', 'data_nascimento', 'sexo', 'cidade_id', 'endereco'];

    public function cidade()
    {
        return $this->belongsTo(Cidade::class);
    }
}
