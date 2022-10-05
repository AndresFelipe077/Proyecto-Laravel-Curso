@extends('layouts.plantilla')

@section('title','Cursos Editar')
<link href="css/estilos.css" rel="stylesheet">

@section('content')
    <h1>En esta página pódras editar un curso</h1>
    <form action="{{route('cursos.update', $curso)}}" method="POST"><!--Como vas acceder al metodo put, html no entiende ese metodo
                                                                        Por ende, se deja en post y abajo se declara con @ method, asi laravel entiende a donde quires acceder-->

        @csrf
        @method('put')

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name', $curso->name)}}">
        </label>

        @error('name')
            <br>
                <small>* {{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Descripción:
            <br>
            <textarea name="descripcion" row="5" >{{old('descripcion' ,$curso->descripcion)}}</textarea>
        </label>
        @error('descripcion')
            <br>
                <small>* {{$message}}</small>
            <br>
        @enderror
        <br>
        <label>
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{old('categoria',$curso->categoria)}}">
        </label>
        @error('categoria')
            <br>
                <small>* {{$message}}</small>
            <br>
        @enderror
        <br>
        <button type="submit" name="">Actualizar</button>
    </form>
@endsection
