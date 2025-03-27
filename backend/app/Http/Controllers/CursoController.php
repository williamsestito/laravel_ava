<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CursoController extends Controller
{
    // Listar todos os cursos
    public function index()
    {
        $cursos = Curso::all();
        return response()->json($cursos);
    }

    // Criar novo curso
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'carga_horaria' => 'required|integer|min:1',
            'descricao' => 'nullable|string',
            'status' => 'in:Ativo,Inativo',
            'imagem' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('imagem')) {
            $imagem = $request->file('imagem');
            $nomeImagem = time() . '_' . $imagem->getClientOriginalName();
            $caminho = $imagem->storeAs('cursos', $nomeImagem, 'public');
            $data['imagem'] = $caminho;
        }

        $curso = Curso::create($data);

        return response()->json([
            'message' => 'Curso criado com sucesso!',
            'curso' => $curso
        ], 201);
    }

    // Mostrar curso específico
    public function show(string $id)
    {
        $curso = Curso::find($id);

        if (!$curso) {
            return response()->json(['message' => 'Curso não encontrado'], 404);
        }

        return response()->json($curso);
    }

    // Atualizar curso
    public function update(Request $request, string $id)
    {
        $curso = Curso::find($id);

        if (!$curso) {
            return response()->json(['message' => 'Curso não encontrado'], 404);
        }

        $request->validate([
            'nome' => 'sometimes|required|string|max:255',
            'carga_horaria' => 'sometimes|required|integer|min:1',
            'descricao' => 'nullable|string',
            'status' => 'in:Ativo,Inativo',
            'imagem' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('imagem')) {
            // Deletar imagem antiga se existir
            if ($curso->imagem && Storage::disk('public')->exists($curso->imagem)) {
                Storage::disk('public')->delete($curso->imagem);
            }

            $imagem = $request->file('imagem');
            $nomeImagem = time() . '_' . $imagem->getClientOriginalName();
            $caminho = $imagem->storeAs('cursos', $nomeImagem, 'public');
            $data['imagem'] = $caminho;
        }

        $curso->update($data);

        return response()->json([
            'message' => 'Curso atualizado com sucesso!',
            'curso' => $curso
        ]);
    }

    // Deletar curso
    public function destroy(string $id)
    {
        $curso = Curso::find($id);

        if (!$curso) {
            return response()->json(['message' => 'Curso não encontrado'], 404);
        }

        // Deletar imagem associada
        if ($curso->imagem && Storage::disk('public')->exists($curso->imagem)) {
            Storage::disk('public')->delete($curso->imagem);
        }

        $curso->delete();

        return response()->json(['message' => 'Curso deletado com sucesso!']);
    }
}
