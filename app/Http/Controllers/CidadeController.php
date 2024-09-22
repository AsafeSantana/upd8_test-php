<?php

namespace App\Http\Controllers;

use App\Models\Cidade;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    public function index(Request $request)
    {
        $cidades = Cidade::query();
    
        if ($request->filled('nome')) {
            $cidades->where('nome', 'like', '%' . $request->nome . '%');
        }
    
        if ($request->filled('estado')) {
            $cidades->where('estado', $request->estado);
        }
    
        $cidades = $cidades->paginate(4); 
    
        $estados = Cidade::select('estado')->distinct()->pluck('estado');
    
        return view('cidades.index', compact('cidades', 'estados'));
    }
    

    public function store(Request $request)
{
    $validated = $request->validate([
        'nome' => 'required|string|max:255',
        'estado' => 'required|string|max:255',
    ]);

    Cidade::create($validated);

    
    return redirect()->route('cidades.index')->with('success', 'Cidade cadastrada com sucesso!');
}

    public function show($id)
    {
        $cidade = Cidade::findOrFail($id);
        return response()->json($cidade);
    }

    public function edit($id)
    {
        $cidade = Cidade::findOrFail($id);
        $estados = Cidade::select('estado')->distinct()->pluck('estado');

        return view('cidades.index', compact('cidade', 'estados'));
    }

    public function update(Request $request, $id)
{
    $validated = $request->validate([
        'nome' => 'required|string|max:255',
        'estado' => 'required|string|max:255',
    ]);

    $cidade = Cidade::findOrFail($id);
    $cidade->update($validated);

    return redirect()->route('cidades.index')->with('success', 'Cidade atualizada com sucesso!');
}

    public function destroy($id)
    {
        $cidade = Cidade::findOrFail($id);
        $cidade->delete();
        
        return redirect()->route('cidades.index')->with('success', 'Cidade excluída com sucesso!');
    }
}
