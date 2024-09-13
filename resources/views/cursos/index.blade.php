@extends('layouts.plantilla')
@section('title','Cursos Principal')
@section('content')
    <h1>Esta es la página de cursos</h1>
    <ul>
        @foreach ($cursos as $registro)
            <li>{{$registro->name}}</li>          
        @endforeach
    </ul>
@endsection
