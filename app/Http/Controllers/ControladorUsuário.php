<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\cursos;
use App\Models\formas_ingresso;

class ControladorUsuário extends Controller
{
    public function index()
    {
        $usuarios = User::all();
        return view('user/usuarios', compact('usuarios'));
    }

    public function create()
    {
        return view('user/novousuario');
    }

    public function store(Request $request)
    {
        $usuario = new User();
        $usuario->name = $request->input('nameUsuario');
        $usuario->matricula = $request->input('matriculaUsuario');
        $usuario->nacionalidade = $request->input('nacionalidadeUsuario');
        $usuario->data_nascimento = $request->input('data_nascimentoUsuario');
        $usuario->email = $request->input('emailUsuario');
        $usuario->sexo = $request->input('sexoUsuario');
        $usuario->raca = $request->input('racaUsuario');
        $usuario->forma_ingresso_id = $request->input('forma_ingresso_id');
        $usuario->curso_id = $request->input('curso_idUsuario');
        $usuario->status = $request->input('statusUsuario');

        $usuario->save();

        return redirect('usuarios');
    }

    public function edit($id)
    {
        $usuario = User::find($id);
        $cursos = cursos::pluck('curso', 'id');
        $formas_ingresso = formas_ingresso::pluck('forma_ingresso', 'id');
        $selectedIDIngresso = $usuario->forma_ingresso_id;
        $selectedIDCurso = $usuario->curso_id;
        if (isset($usuario))
        {
            return view('user/editarusuario', compact(['usuario'], ['cursos'], ['formas_ingresso'], ['selectedIDIngresso'], ['selectedIDCurso']));
        }

        return redirect('/usuarios');
    }

    public function update(Request $request, $id)
    {
        $usuario = User::find($id);
        if (isset($usuario))
        {
            $usuario->name = $request->input('nameUsuario');
            $usuario->matricula = $request->input('matriculaUsuario');
            $usuario->nacionalidade = $request->input('nacionalidadeUsuario');
            $usuario->data_nascimento = $request->input('data_nascimentoUsuario');
            $usuario->email = $request->input('emailUsuario');
            $usuario->sexo = $request->input('sexoUsuario');
            $usuario->raca = $request->input('racaUsuario');
            $usuario->forma_ingresso_id = $request->input('forma_ingresso_id');
            $usuario->curso_id = $request->input('curso_idUsuario');
            $usuario->status = $request->input('statusUsuario');

            $usuario->save();
        }

        return redirect('usuarios');
    }

    public function destroy($id)
    {
        $usuario = User::find($id);
        if (isset($usuario))
        {
            $usuario->delete();
        }

        return redirect('usuarios');
    }

    public static function getCourseName($id)
    {
        $usuario = User::find($id);
        if (isset($usuario))
        {
            $curso = cursos::find($usuario['curso_id']);
            if (isset($curso))
                return $curso->curso;
        }
    }

    public static function getTicketForm($id)
    {
        $usuario = User::find($id);
        if (isset($usuario))
        {
            $formaIngresso = formas_ingresso::find($usuario['forma_ingresso_id']);
            if (isset($formaIngresso))
                return $formaIngresso->forma_ingresso;
        }
    }
}
