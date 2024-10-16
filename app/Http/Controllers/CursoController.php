<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use Illuminate\Http\Request;

use App\Models\Curso;
class CursoController extends Controller
{
    public function index()
    {
        //return 'Esta es la página de cursos';
        //return view('cursos.index');
        //$cursos = Curso::all();
        $cursos = Curso::orderBy('id','desc')->paginate();
        //return $cursos;
        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        //return 'Aqui podrás crear un curso';
        return view('cursos.create');
    }

    public function store(StoreCurso $solicitud)
    {
        $curso = Curso::create($solicitud->all());

        return redirect()->route('cursos.show', $curso);//Se puede enviar el objeto $curso sin especificar el campo id 

    }

    public function show(Curso $curso)//$id es la variable que recibe por parámetro en la ruta correspondiente en el archivo de rutas web
    {
        //$curso = Curso::find($curso);
        return view('cursos.show', compact('curso'));//curso es el nombre de la variable $curso sin el $
    } 

    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact('curso'));      
    } 

    public function update(Curso $curso, StoreCurso $solicitud)
    {
        $curso->update($solicitud->all());

        return redirect()->route('cursos.show', $curso);
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();
        return redirect()->route('cursos.index');
    }
}
