@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Animales en Adopcion</div>

                    <div class="card-body">
                            <table class="table">
                                <thead>
                                    <th>Codigo Animal</th>
                                    <th>Foto</th>
                                    <th>Nombre del Ejemplar</th>
                                    <th>Especie</th>
                                    <th>Nombre Adoptante</th>
                                    <th>Telefono</th>
                                    <th>Correo</th>
                                </thead>
                        
                                <tbody>
                                    
                                    @foreach ($registro ?? '' as $adopcion)
                                    <tr>
                                        <td> {{$adopcion->codigo_animal}}</td>
                                        <td> <img whidth="50" height="50" src="/storage/{{ $adopcion->imagen}}"></td>
                                        <td> {{$adopcion->nombre_ejemplar}}</td>
                                        <td> {{$adopcion->especie->nombre}}</td>
                                         
                                    </tr>
                                    @endforeach
                                    @foreach ($solicitud as $prueba)
                                    <tr>
                                        <td> {{$prueba->nombre}}</td>
                                        
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
