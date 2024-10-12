@extends('layouts.plantilla')
@section('title','Cursos Principal')
@section('content')
    <h1>Esta es la página de cursos</h1>
    <a href="{{route('cursos.create')}}">Crear curso</a>
    <ul>
        @foreach ($cursos as $registro)
            <li>
                <a href="{{route('cursos.show', $registro)}}">
                    {{$registro->name}}
                </a>
            </li>          
        @endforeach
    </ul>

    {{$cursos->links()}}
@endsection
