@extends('layouts.plantilla')
@section('title','Crear Curso')
@section('content')
    <h1>Aqui podrás editar un curso</h1>
    <form action="{{route('cursos.update', $curso)}}" method="post">

        <!--Agrega un token al formulario para que no expire la página ---Agrega una medida de Seguridad al formulario-->
        @csrf

        <!--Esta directiva indica a Laravel que el método con el que se va a manejar el form es con el PUT y buscará la ruta correspondiente en el archivo de rutas-->
        @method('put')

        <label>Editar Nombre:
            <br>
            <input type="text" name='name' value='{{old('name', $curso->name)}}'>
        </label>

        @error('name')
        <br>
            <span>*{{$message}}</span>
        @enderror
        
        <br><br>

        <label>Editar Slug:
            <br>
            <input type="text" name='name' value='{{old('slug', $curso->slug)}}'>
        </label>

        @error('slug')
        <br>
            <span>*{{$message}}</span>
        @enderror
        
        <br><br>
        <label>Editar Descripción:
            <br>
              <textarea name="description" rows="5">{{old('description', $curso->description)}}</textarea>
        </label>

        @error('description')
        <br>
            <span>*{{$message}}</span>
        @enderror

        <br><br>
        <label>Editar Categoría:
              <br>
              <input type="text" name='category' value='{{old('category', $curso->category)}}'>
        </label>

        @error('category')
        <br>
            <span>*{{$message}}</span>
        @enderror

        <br><br>
        <button type="submit">Actualizar formulario</button>
    </form>
@endsection