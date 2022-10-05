@extends('layouts.plantilla')

@section('title','Cursos create')

<link href="css/estilos.css" rel="stylesheet">

@section('content')
    <h1>En esta página pódras crear un curso</h1>
    <form action="{{route('cursos.store')}}" method="POST">

        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name')}}">{{--old es para no se pierda la informacion, cuando el 
                                                                     usuario se olvide de llenar un  campo, de este modo si ha llenado este campo, no se pierda la info--}}
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
            <textarea name="descripcion" row="5" >{{old('descripcion')}}</textarea>
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
            <input type="text" name="categoria" value="{{old('categoria')}}">
        </label>

        @error('categoria')
            <br>
                <small>* {{$message}}</small>
            <br>
        @enderror

        <br>
        <button type="submit" name="">Enviar</button>
    </form>
@endsection
