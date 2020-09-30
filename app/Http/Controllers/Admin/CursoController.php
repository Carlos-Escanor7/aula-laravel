<?php

namespace App\Http\Controllers\Admin;

use App\Curso;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        return view('admin.cursos.index');
    }

    public function adicionar()
    {
        return view('admin.cursos.adicionar');
    }

    public function salvar(Request $req)
    {
          Curso::create($req->all());

          return redirect()->route('admin.cursos');
    }
}