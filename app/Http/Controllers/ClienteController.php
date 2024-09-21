<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;


class ClienteController extends Controller
{
    public function index()
    {
        return Cliente::with('cidade')->get();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|unique:clientes,cpf',
            'data_nascimento' => 'required|date',
            'sexo' => 'required|in:Masculino,Feminino',
            'cidade_id' => 'required|exists:cidades,id',
            'endereco' => 'required|string|max:255' // Novo campo
        ]);
    
        $cliente = Cliente::create($validated);
        
        return response()->json($cliente, 201);
    }

    public function show($id)
    {
        return Cliente::with('cidade')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);

        $validated = $request->validate([
            'nome' => 'sometimes|string|max:255',
            'cpf' => 'sometimes|string|unique:clientes,cpf,' . $cliente->id,
            'data_nascimento' => 'sometimes|date',
            'sexo' => 'sometimes|in:Masculino,Feminino',
            'cidade_id' => 'sometimes|exists:cidades,id',
            'endereco' => 'sometimes|string|max:255' // Novo campo
        ]);

        $cliente->update($validated);
        return response()->json($cliente);
    }

    public function destroy($id)
    {
        Cliente::findOrFail($id)->delete();
        return response()->noContent();
    }
}
