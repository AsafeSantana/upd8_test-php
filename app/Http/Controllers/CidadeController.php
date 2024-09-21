<?php

namespace App\Http\Controllers;

use App\Models\Cidade;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'estado' => 'required|string|max:255',
        ]);

        $cidade = Cidade::create($validated);

        return response()->json($cidade, 201); 
    }
}
