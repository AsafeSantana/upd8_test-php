<?php

namespace Database\Seeders;

use App\Models\Cidade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Cidade::create([
            'nome' => 'São Paulo',
            'estado' => 'SP',
        ]);

        Cidade::create([
            'nome' => 'Rio de Janeiro',
            'estado' => 'RJ',
        ]);

        Cidade::create([
            'nome' => 'Belo Horizonte',
            'estado' => 'MG',
        ]);

        // Adicione mais cidades conforme necessário
    }
}
