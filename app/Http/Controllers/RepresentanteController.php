<?php

namespace App\Http\Controllers;

use App\Models\Representante;
use Illuminate\Http\Request;

class RepresentanteController extends Controller
{
    public function index()
    {
        return Representante::with('cidade')->get();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|unique:representantes,cpf',
            'data_nascimento' => 'required|date',
            'sexo' => 'required|in:Masculino,Feminino',
            'cidade_id' => 'required|exists:cidades,id',
            'endereco' => 'required|string|max:255' 
        ]);
    
        $representante = Representante::create($validated);
        
        return response()->json($representante, 201);
    }

    public function show($id)
    {
        return Representante::with('cidade')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $representante = Representante::findOrFail($id);

        $validated = $request->validate([
            'nome' => 'sometimes|string|max:255',
            'cpf' => 'sometimes|string|unique:representantes,cpf,' . $representante->id,
            'data_nascimento' => 'sometimes|date',
            'sexo' => 'sometimes|in:Masculino,Feminino',
            'cidade_id' => 'sometimes|exists:cidades,id',
            'endereco' => 'sometimes|string|max:255' 
        ]);

        $representante->update($validated);
        return response()->json($representante);
    }

    public function destroy($id)
    {
        Representante::findOrFail($id)->delete();
        return response()->noContent();
    }
}