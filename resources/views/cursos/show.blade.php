@extends('layouts.plantilla')

@section('title','Cursos '. $curso->name)
<link href="css/estilos.css" rel="stylesheet">

@section('content')
    {{--<h1>Bienvenido al curso: <?php echo $curso;?></h1>se puede hacer asi con echo o como abajo--}}
    <h1>Bienvenido al curso: {{$curso->name}} </h1>
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    <br>
    <a href="{{route('cursos.edit', $curso)}}">Editar curso</a>
    <p><strong>Categoria: </strong>{{$curso->categoria}}</p>
    <p><strong>Descripción: </strong>{{$curso->descripcion}}</p>

    <form action="{{route('cursos.destroy', $curso)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit" name="">Eliminar</button>
    </form>

@endsection
