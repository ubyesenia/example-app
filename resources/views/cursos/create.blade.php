@extends('layouts.plantilla')
@section('title','Crear Curso')
@section('content')
    <h1>Aqui podrás crear un curso</h1>
    <form action="{{route('cursos.store')}}" method="POST">

        <!--Agrega un token al formulario para que no expire la página ---Agrega una medida de Seguridad al formulario-->
        @csrf

        <label>Ingresar Nombre:
            <br>
              <input type="text" name='name'>
        </label>
        <br><br>
        <label>Ingresar Descripción:
            <br>
              <textarea name="description" rows="5"></textarea>
        </label>
        <br><br>
        <label>Ingresar Categoría:
              <br>
              <input type="text" name='category'>
        </label>
        <br><br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection