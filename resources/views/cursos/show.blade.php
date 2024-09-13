@extends('layouts.plantilla')
@section('title','Curso '.$curso->name)
@section('content')
    <h1>Bienvenido al curso {{$curso->name}}</h1>
    <p>Descripción: <strong>{{$curso->description}}</strong></p>
    <p>Categoria: <strong>{{$curso->category}}</strong></p>   
    
    <a href="{{route('cursos.index')}}">Volver a Cursos</a> 
    <a href="{{route('cursos.edit',  $curso)}}">Editar Curso</a> 
@endsection