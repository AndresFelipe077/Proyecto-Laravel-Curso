@extends('layouts.plantilla')

@section('title','Cursos')

<link href="css/estilos.css" rel="stylesheet">


@section('content')
<h1>Bienvenido a la página principal de cursos</h1>
    <a href="{{route('cursos.create')}}">Crear curso</a>
    <ul class="cursosLista">
        @foreach($cursos as $curso)
            <li>
                {{--<a href="{{route('cursos.show')}}">{{$curso->name}}</a>--}}
                <a class="nameCourse" href="{{route('cursos.show',$curso)}}">{{$curso->name}}</a>
                <br>
                {{--{{route('cursos.show',$curso)}}--}}{{--No hay necesidad de colocar $curso->id, laravel entiende que tiene que sacar el id sin especificarlo--}}
            </li>
        @endforeach
    </ul>

    {{$cursos->links()}}

@endsection


