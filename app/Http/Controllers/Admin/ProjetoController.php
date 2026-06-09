<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Projeto;
use Illuminate\Http\Request;

class ProjetoController extends Controller
{
    public function index()
    {
        $projetos = Projeto::latest()->get();
        return view('admin.projetos.index', compact('projetos'));
    }

    public function create()
    {
        return view('admin.projetos.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'titulo' => 'required',
            'categoria' => 'required',
            'descricao' => 'required',
            'badge' => 'nullable',
            'link_demo' => 'nullable',
            'link_github' => 'nullable',
            'tecnologias' => 'nullable',
            'imagem' => 'nullable|image'
        ]);

        if ($request->hasFile('imagem')) {
            $data['imagem'] = $request->file('imagem')->store('projetos', 'public');
        }

        $data['tecnologias'] = $request->tecnologias
            ? array_map('trim', explode(',', $request->tecnologias))
            : [];

        Projeto::create($data);

        return redirect()->route('projetos.index');
    }

    public function edit($id)
    {
        $projeto = Projeto::findOrFail($id);
        return view('admin.projetos.edit', compact('projeto'));
    }

    public function update(Request $request, $id)
    {
        $projeto = Projeto::findOrFail($id);

        $data = $request->validate([
            'titulo' => 'required',
            'categoria' => 'required',
            'descricao' => 'required',
            'badge' => 'nullable',
            'link_demo' => 'nullable',
            'link_github' => 'nullable',
            'tecnologias' => 'nullable',
            'imagem' => 'nullable|image'
        ]);

        if ($request->hasFile('imagem')) {
            $data['imagem'] = $request->file('imagem')->store('projetos', 'public');
        }

        $data['tecnologias'] = $request->tecnologias
            ? array_map('trim', explode(',', $request->tecnologias))
            : [];

        $projeto->update($data);

        return redirect()->route('projetos.index');
    }

    public function destroy($id)
    {
        $projeto = Projeto::findOrFail($id);
        $projeto->delete();

        return back();
    }
}