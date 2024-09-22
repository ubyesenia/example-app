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
        $curso = new Curso();
        $curso->name = $solicitud->name;
        $curso->description = $solicitud->description;
        $curso->category = $solicitud->category;
        $curso->save();

        return redirect()->route('cursos.show', $curso->id);//Se puede enviar el objeto $curso sin especificar el campo id 

    }

    public function show($id)//$id es la variable que recibe por parámetro en la ruta correspondiente en el archivo de rutas web
    {
        $curso = Curso::find($id);
        return view('cursos.show', compact('curso'));//curso es el nombre de la variable $curso sin el $
    } 

    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact('curso'));      
    } 

    public function update(Curso $curso, Request $solicitud)
    {
        $solicitud->validate([
            'name' => 'Required|min:3', 
            'description' => 'Required', 
            'category' => 'Required']);

         //return $solicitud->all();
        $curso->name = $solicitud->name;
        $curso->description = $solicitud->description;
        $curso->category = $solicitud->category;
        //return $curso;
        $curso->save();

        return redirect()->route('cursos.show', $curso->id);
    }
}
