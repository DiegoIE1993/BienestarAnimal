@extends('adminlte::page')

@section('content')
<div class="card-body">
    <div class="row justify-content-end pb-2">
        <a href="{{url('/registrarmascota/create')}}" class="btn btn-success">Nuevo Registro</a>
</div>
<div class="card-header">Historia Clinica</div>
    <div class="table-responsive">
        
        <div class="container">
            {{-- <div class="row justify-content-center">
                <div class="col-md">
                    <div class="card"> --}}
                           
                            <table class="table table-hover">
                                    <thead>
                                        <th>Fecha</th>
                                        <th>Tipo de Entrada</th>
                                        <th>Identificacion del Animal</th>
                                        <th>Nombres Ciudadano</th>
                                        <th>Dirección</th>
                                        <th>Cedula</th>
                                        <th>Teléfono</th>
                                        <th>Correo</th>
                                        <th>Nombre del Ejemplar</th>
                                        <th>Genero</th>
                                        <th>Especie</th>
                                        <th>Raza</th>
                                        <th>Color</th>
                                        <th>Talla</th>
                                        <th>Peso (Kg)</th>
                                        <th>Edad</th>
                                        <th>Condicion General</th>
                                        <th>Actitud General</th>
                                        <th>Estado Ingreso</th>
                                        <th>Señales Particulares</th>                                        
                                        <th>Motivo Ingreso Anamnesis</th>
                                        <th>Acciones</th>
    
                                    </thead>
                                <tbody>
                                        @foreach ($registro as $item)
                                            <tr>
                                                <td>{{$item->fecha}}</td>
                                                <td>{{$item->tipo_entrada->nombre}}</td>
                                                <td>{{$item->codigo_animal}}</td>
                                                <td>{{$item->nombre_ciudadano}}</td>
                                                <td>{{$item->direccion}}</td>
                                                <td>{{$item->cedula}}</td>
                                                <td>{{$item->telefono}}</td>
                                                <td>{{$item->correo}}</td>
                                                <td>{{$item->nombre_ejemplar}}</td>
                                                <td>{{$item->genero}}</td>
                                                <td>{{$item->especie->nombre}}</td>
                                                <td>{{$item->raza->nombre}}</td>
                                                <td>{{$item->color}}</td>
                                                <td>{{$item->talla}}</td>
                                                <td>{{$item->peso}}</td>
                                                <td>{{$item->edad}}</td>
                                                <td>{{$item->condicion->nombre}}</td>
                                                <td>{{$item->actitud->nombre}}</td>
                                                <td>{{$item->estado}}</td>
                                                <td>{{$item->señales_particulares}}</td>
                                                <td>{{$item->motivo_ingreso_anamnesis}}</td>

                                                <td>
                                                    <a href="{{ url('/registrarmascota/'.$item->codigo_animal.'/edit')}}" class="btn btn-primary">Editar</a>        
                                                </td>
                                            </tr>
                                        @endforeach
                                        
                                    </tbody> 
                                </table>
                            </div>
                        {{-- </div>
                </div>
            </div> --}}
        </div>
    </div>
    
@endsection