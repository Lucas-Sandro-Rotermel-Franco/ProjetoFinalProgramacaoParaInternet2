<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\formas_ingresso;

class ControladorFormaIngresso extends Controller
{
    public function index()
    {
        $formas_ingresso = formas_ingresso::all();

        return view('formas_ingresso/formas_ingresso', compact('formas_ingresso'));
    }

    public function create()
    {
        return view('formas_ingresso/novoformas_ingresso');
    }

    public function store(Request $request)
    {
        $formas_ingresso = new formas_ingresso();
        $formas_ingresso->forma_ingresso = $request->input('formas_Ingresso');
        $formas_ingresso->data_implementacao = $request->input('data_implementacao');

        $formas_ingresso->save();

        return redirect('formas-ingresso');
    }

    public function edit($id)
    {
        $forma_ingresso = formas_ingresso::find($id);
        if (isset($forma_ingresso))
        {
            return view('formas_ingresso/editarformas_ingresso', compact('forma_ingresso'));
        }

        return redirect('/formas-ingresso');
    }

    public function update(Request $request, $id)
    {
        $forma_ingresso = formas_ingresso::find($id);
        if (isset($forma_ingresso))
        {
            $forma_ingresso->forma_ingresso = $request->input('formas_Ingresso');
            $forma_ingresso->data_implementacao = $request->input('data_implementacao');

            $forma_ingresso->save();
        }

        return redirect('formas-ingresso');
    }

    public function destroy($id)
    {
        $forma_ingresso = formas_ingresso::find($id);
        if (isset($forma_ingresso))
        {
            $forma_ingresso->delete();
        }

        return redirect('formas-ingresso');
    }
}
