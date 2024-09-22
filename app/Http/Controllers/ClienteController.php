<?php

namespace App\Http\Controllers;

use App\Models\Cidade;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(Request $request)
    {
        $query = Cliente::query();

        if ($request->filled('cpf')) {
            $query->where('cpf', $request->cpf);
        }

        if ($request->filled('nome')) {
            $query->where('nome', 'like', '%' . $request->nome . '%');
        }

        if ($request->filled('data_nascimento')) {
            $query->whereDate('data_nascimento', $request->data_nascimento);
        }

        if ($request->filled('sexo')) {
            $query->where('sexo', $request->sexo);
        }

        if ($request->filled('estado')) {
            $query->whereHas('cidade', function ($q) use ($request) {
                $q->where('estado', $request->estado);
            });
        }

        if ($request->filled('cidade_id')) {
            $query->where('cidade_id', $request->cidade_id);
        }

        $clientes = $query->with('cidade')->paginate(4);
        $cidades = Cidade::all(); 
        $estados = Cidade::select('estado')->distinct()->get();

        return view('clientes.index', compact('clientes', 'cidades', 'estados'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|unique:clientes,cpf',
            'data_nascimento' => 'required|date',
            'sexo' => 'required|in:Masculino,Feminino',
            'cidade_id' => 'required|exists:cidades,id',
            'endereco' => 'required|string|max:255'
        ]);

        Cliente::create($validated);

        return redirect()->route('clientes.index')->with('success', 'Cliente cadastrado com sucesso!');
    }

    public function show($id)
    {
        return Cliente::with('cidade')->findOrFail($id);
    }

    public function edit($id)
{
    $cliente = Cliente::findOrFail($id);
    $cidades = Cidade::all(); 
    $estados = Cidade::select('estado')->distinct()->get();

    return view('clientes.index', compact('cliente', 'cidades', 'estados'));
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
        'endereco' => 'sometimes|string|max:255'
    ]);

    $cliente->update($validated);

    return redirect()->route('clientes.index')->with('success', 'Cliente atualizado com sucesso!');
}


    public function destroy($id)
    {
        Cliente::findOrFail($id)->delete();
        return redirect()->route('clientes.index')->with('success', 'Cliente excluído com sucesso!');
    }
}
