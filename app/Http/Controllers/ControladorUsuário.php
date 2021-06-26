<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use App\Models\TicketForm;

class ControladorUsuário extends Controller
{
    public function index()
    {
        $usuarios = User::all();

        return view('usuarios', compact('usuarios'));
    }

    public function create()
    {
        return view('novousuario');
    }

    public function store(Request $request)
    {
        $usuario = new User();
        $usuario->matricula = $request->input('matriculaUsuario');
        $usuario->nacionalidade = $request->input('nacionalidadeUsuario');
        $usuario->data_nascimento = $request->input('data_nascimentoUsuario');
        $usuario->email = $request->input('emailUsuario');
        $usuario->sexo = $request->input('sexoUsuario');
        $usuario->raca = $request->input('racaUsuario');
        $usuario->forma_ingresso_id = $request->input('forma_ingresso_idUsuario');
        $usuario->curso_id = $request->input('curso_idUsuario');
        $usuario->status = $request->input('statusUsuario');
        $usuario->senha = $request->input('senhaUsuario');

        $usuario->save();

        return redirect('/usuarios');
    }

    public function edit($id)
    {
        $usuario = User::find($id);
        if (isset($usuario))
        {
            return view('editarusuario', compact('usuario'));
        }

        return redirect('/usuarios');
    }

    public function update(Request $request, $id)
    {
        $usuario = User::find($id);
        if (isset($usuario))
        {
            $usuario->matricula = $request->input('matriculaUsuario');
            $usuario->nacionalidade = $request->input('nacionalidadeUsuario');
            $usuario->data_nascimento = $request->input('data_nascimentoUsuario');
            $usuario->email = $request->input('emailUsuario');
            $usuario->sexo = $request->input('sexoUsuario');
            $usuario->raca = $request->input('racaUsuario');
            $usuario->forma_ingresso_id = $request->input('forma_ingresso_idUsuario');
            $usuario->curso_id = $request->input('curso_idUsuario');
            $usuario->status = $request->input('statusUsuario');
            $usuario->senha = $request->input('senhaUsuario');

            $usuario->save();
        }

        return redirect('/usuarios');
    }

    public function destroy($id)
    {
        $usuario = User::find($id);
        if (isset($usuario))
        {
            $usuario->delete();
        }

        return redirect('/usuarios');
    }

    public static function getCourseName($id)
    {
        $usuario = User::find($id);
        if (isset($usuario))
        {
            $curso = Course::find($curso['curso_id']);
            if (isset($curso))
                return $curso->curso;
        }
    }

    public static function getTicketForm($id)
    {
        $usuario = User::find($id);
        if (isset($usuario))
        {
            $formaIngresso = TicketForm::find($formaIngresso['forma_ingresso_id']);
            if (isset($formaIngresso))
                return $formaIngresso->forma_ingresso;
        }
    }
}
