<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cursos;

class ControladorCursos extends Controller
{
    public function index()
    {
        $cursos = cursos::all();

        return view('curso/cursos', compact('cursos'));
    }

    public function create()
    {
        return view('curso/novocurso');
    }

    public function store(Request $request)
    {
        $curso = new cursos();
        $curso->curso = $request->input('cursoName');
        $curso->coordenador = $request->input('coordenadorCurso');
        $curso->ano_criacao = $request->input('ano_criacaoCurso');

        $curso->save();

        return redirect('cursos');
    }

    public function edit($id)
    {
        $curso = cursos::find($id);
        if (isset($curso))
        {
            return view('curso/editarcurso', compact('curso'));
        }

        return redirect('/cursos');
    }

    public function update(Request $request, $id)
    {
        $curso = cursos::find($id);
        if (isset($curso))
        {
            $curso->curso = $request->input('cursoName');
            $curso->coordenador = $request->input('coordenadorCurso');
            $curso->ano_criacao = $request->input('ano_criacaoCurso');

            $curso->save();
        }

        return redirect('cursos');
    }

    public function destroy($id)
    {
        $curso = cursos::find($id);
        if (isset($curso))
        {
            $curso->delete();
        }

        return redirect('cursos');
    }
}
