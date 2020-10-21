@extends('adminlte::page')

@section('content')
<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 </head>
 <body>
    <div class="row justify-content-center">
      <h1> {{ $adopcion->nombre_ejemplar }} </h1>
    </div>
      

      <table>
         <td>
            <div class="imagen-animal">
               <img src="/storage/{{ $adopcion->imagen}}">
            </div>
         </td>
         
      <td>
         <ul>
            <li> Código del Animal: {{ $adopcion->codigo_animal }} </li>
            <li> Especie: {{ $adopcion->especie->nombre }} </li>
            <li> Raza: {{ $adopcion->raza->nombre }} </li>
            <li> Género: {{ $adopcion->genero }} </li>
            <li> Peso: {{ $adopcion->peso }} </li>
            <li> Edad: {{ $adopcion->edad }} </li>
         </ul>
      </td>
         
      </table>
      <div>
         <a href="/animalesadopcion" class="btn btn-primary">Atras</a>
      </div>
    
 </body>
 
</html>
@endsection 