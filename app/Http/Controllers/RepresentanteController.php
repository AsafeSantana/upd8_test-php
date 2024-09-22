<?php

namespace App\Http\Controllers;

use App\Models\Cidade;
use App\Models\Representante;
use Illuminate\Http\Request;

class RepresentanteController extends Controller
{
    //lista
    public function index(Request $request)
    {
        $query = Representante::query();

        if ($request->filled('nome')) {
            $query->where('nome', 'like', '%' . $request->input('nome') . '%');
        }

        if ($request->filled('sexo')) {
            $query->whereIn('sexo', $request->input('sexo'));
        }

        $representantes = $query->paginate(4);
        $cidades = Cidade::all(); 

        return view('representantes.index', compact('representantes', 'cidades'));
    }

    
    public function create()
    {
        $cidades = Cidade::all(); 
        return view('representantes.create', compact('cidades'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'cpf' => 'required|unique:representantes,cpf',
            'nome' => 'required|string|max:255',
            'data_nascimento' => 'required|date',
            'sexo' => 'required|string',
            'endereco' => 'required|string|max:255',
            'cidade_id' => 'required|exists:cidades,id', 
        ]);

        Representante::create($request->all());

        return redirect()->route('representantes.index')->with('success', 'Representante cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $representante = Representante::findOrFail($id);
        $cidades = Cidade::all(); 
        return view('representantes.index', compact('representante', 'cidades'));
    }

    //atualiza
    public function update(Request $request, $id)
    {
        $representante = Representante::findOrFail($id);

        $request->validate([
            'cpf' => 'required|unique:representantes,cpf,' . $representante->id,
            'nome' => 'required|string|max:255',
            'data_nascimento' => 'required|date',
            'sexo' => 'required|string',
            'endereco' => 'required|string|max:255',
            'cidade_id' => 'required|exists:cidades,id',
        ]);

        $representante->update($request->all());

        return redirect()->route('representantes.index')->with('success', 'Representante atualizado com sucesso!');
    }


    //exclui
    public function destroy($id)
    {
        $representante = Representante::findOrFail($id);
        $representante->delete();

        return redirect()->route('representantes.index')->with('success', 'Representante excluído com sucesso!');
    }
}
