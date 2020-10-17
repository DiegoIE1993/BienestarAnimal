@extends('adminlte::page')

@section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Historia Clinica</div>                 
                        <table class="table">
                            <thead>
                                <th>Identificacion del Animal</th>

                                <th>Nombres Ciudadano</th>
                                <th>Dirección</th>
                                <th>Cédula</th>
                                <th>Teléfono</th>
                                <th>Correo</th>
                                <th>Detalles</th>
                                <th>Acciones</th>
                            </thead>
                            <tbody>
                                @foreach ($registro as $item)
                                    <tr>
                                        <td>{{$item->codigo_animal}}</td>
                                        <td>{{$item->nombre_ciudadano}}</td>
                                        <td>{{$item->direccion}}</td>
                                        <td>{{$item->cedula}}</td>
                                        <td>{{$item->telefono}}</td>
                                        <td>{{$item->correo}}</td>
                                        <td>
                                            <a href="/registrarmascota/{{$item->codigo_animal}}" class="fa fa-search-plus">Ver</a>  
                                        </td>
                                        <td>
                                            <a href="/registrarmascota/{{$item->codigo_animal}}" class="fa fa-eyedropper"></a> 
                                            <a href="{{ url('/registrarmascota/'.$item->codigo_animal.'/edit')}}" class="fa fa-trash"></a> 
                                            
                                            
                                            
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody> 
                        </table>                
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-end pb-2">
                            <a href="{{url('/registrarmascota/create')}}" class="btn btn-success">Nuevo Registro</a>
                        </div>  
                    </div> 
                </div> 
            </div>
        </div>
@endsection