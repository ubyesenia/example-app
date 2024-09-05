<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        //return 'Esta es la página de cursos';
        return view('cursos.index');
    }

    public function create()
    {
        //return 'Aqui podrás crear un curso';
        return view('cursos.create');
    }

    public function show($curso)
    {
        //return 'Bienvenido al curso '.$curso;
        return view('cursos.show', ['curso' => $curso]);
    } 
}
