@extends('adminlte::page')

@section('content')
<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
 </head>
 <body>
    <h1> {{ $events->titulo }} </h1>
    <ul>
       <li> Nombre del ciudadano: {{ $events->descripcion }} </li>
       <li> Direccion: {{ $events->fecha }} </li>
    
       
    </ul>
    <a href="/eventos" class="btn btn-primary">Atras</a>
    
 </body>
</html>
@endsection 