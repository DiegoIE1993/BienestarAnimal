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
                                    <th>Fecha Adopcion</th>
                                    <th>Nombre del Adoptante</th>
                                    <th>Cedula</th>
                                    <th>Telefono</th>
                                    <th>Codigo del Animal</th>
                                    <th>Nombre del Ejemplar</th>
                                    <th>Especie</th>
                                    
                                </thead>
                        
                                <tbody>        
                                    <tr>
                                        @foreach ($solicitud as $animals)
                                        <td>{{$animals->fecha}}</td>
                                        <td> {{$animals->nombre}}</td>
                                        <td> {{$animals->cedula}}</td>
                                        <td> {{$animals->telefono}}</td>
                                        <td> {{$animals->adopcion_id}}</td>   
                                        

                                        
                                        {{-- <td> {{$item->nombre_ejemplar}}</td>    --}}

                                        
                                        @endforeach
                                    </tr>
                                    
                                    
                                    
                                    
                                </tbody>
                                </table>
                        </div>
                    </div>
    
                </div>
                
            </div>
        </div>
        
    @endsection 
