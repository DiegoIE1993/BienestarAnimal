@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Solicitudes de Adopcion</div>

                    <div class="card-body">
                            <table class="table">
                                <thead>
                                    <th>#</th>
                                    <th>Codigo Animal</th>
                                    <th>Nombre</th>
                                    <th>Cedula</th>
                                    <th>Telefono</th>
                                    <th>Direccion</th>
                                    <th>Correo</th>
                                    <th>Documentos</th>
                                </thead>
                        
                                <tbody>
                                    @foreach ($adopcions as $solicitud)
                                    <tr>
                                        <td> {{$solicitud->id}}</td>
                                        <td> {{$solicitud->adopcion_id}}</td>
                                        <td> {{$solicitud->nombre}}</td>
                                        <td> {{$solicitud->cedula}}</td>
                                        <td> {{$solicitud->telefono}}</td>
                                        <td> {{$solicitud->direccion}}</td>
                                        <td> {{$solicitud->correo}}</td>
                                        {{-- <td> {{$solicitud->documentos}}</td> --}}
                                        <td>
                                        <a target="_blank" href="/storage/{{ $solicitud->documentos}}" alt="">Visualizar</a>
                                        </td>
                                         
                                    </tr>
                                    @endforeach
                                    
                                    
                                </tbody>
                                </table>
                        </div>
                    </div>
    
                </div>
                
            </div>
        </div>
        
    @endsection 

 