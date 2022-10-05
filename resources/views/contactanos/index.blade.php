@extends('layouts.plantilla')

@section('title','Contactanos')
<link rel="stylesheet" href="">
@section('content')

   <h1>Dejanos un mensaje CABRÓN</h1>

   <form action="{{route('contactanos.store')}}" method="POST">

    @csrf

    <label>
        Nombre:
        <br>
        <input type="text" name="name">
    </label>
    <br>

    @error('name')
        <p><strong>{{$message}}</strong></p>
    @enderror

    <label>
        Correo:
        <br>
        <input type="text" name="correo">
    </label>
    <br>

    @error('correo')
        <p><strong>{{$message}}</strong></p>
    @enderror

    <label>
        Mensaje:
        <br>
        <textarea name="mensaje" rows="4"></textarea>
    </label>
    <br>

    @error('mensaje')
        <p><strong>{{$message}}</strong></p>
    @enderror

    <Button type="submit" name="">Enviar Mensaje</Button>

   </form>
    
    @if(session('info'))

   <script>
       alert('{{session('info')}}')
   </script>

   @endif
@endsection