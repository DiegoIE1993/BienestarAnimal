@extends('adminlte::page')

@section('content')
<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 </head>
 <body>
    <div class="row justify-content-center">
      <h1> {{ $item->nombre_ejemplar }} </h1>
    </div>
      

      <table>
         <td>
            <div class="imagen-animal">
               <img src="/storage/{{ $item->imagen}}">
            </div>
         </td>
         
      <td>
         <ul>
            <li> Código del Animal: {{ $item->codigo_animal }} </li>
            <li> Fecha de Registro: {{ $item->fecha }} </li>
            <li> Tipo de Entrada: {{ $item->tipo_entrada->nombre}} </li>
            <li> Nombre del Ciudadano: {{ $item->nombre_ciudadano }} </li>
            <li> Cédula: {{ $item->cedula }} </li>
            <li> Direccion: {{ $item->direccion }} </li>
            <li> Telefono: {{ $item->telefono }} </li>
            <li> Correo: {{ $item->correo }} </li>
            <li> Género: {{ $item->genero }} </li>
            <li> Especie: {{ $item->especie->nombre }} </li>
            <li> Raza: {{ $item->raza->nombre }} </li>
            <li> Color: {{ $item->color }} </li>
            <li> Talla: {{ $item->talla }} </li>
            <li> Peso: {{ $item->peso }} </li>
            <li> Edad: {{ $item->edad }} </li>
            <li> Estado: {{ $item->estado }} </li>
            <li> Condicion: {{ $item->condicion->nombre }} </li>
            <li> actitud: {{ $item->actitud->nombre }} </li>
            <li> Señales Particulares: {{ $item->señales_particulares }} </li>
            <li> Motivo Ingreso Anamnesis: {{ $item->motivo_ingreso_anamnesis }} </li>
         </ul>
      </td>
         
      </table>
    <a href="/registrarmascota" class="btn btn-primary">Atras</a>
    
 </body>
</html>
@endsection 