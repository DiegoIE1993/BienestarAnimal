@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Adopcion</div>

                    <div class="card-body">
                            <table class="table">
                                <thead>
                                    <th>Codigo Animal</th>
                                    <th>Nombre del Ejemplar</th>
                                    <th>Especie</th>
                                    <th>Raza</th>
                                    <th>Sexo</th>
                                    <th>Edad</th>
                                    <th>Accion</th>
                                </thead>
                        
                                <tbody>
                                    
                                    @foreach ($registro as $adopcion)
                                    <tr>
                                        <td> {{$adopcion->codigo_animal}}</td>
                                        <td> {{$adopcion->nombre_ejemplar}}</td>
                                        <td> {{$adopcion->especie->nombre}}</td>
                                        <td> {{$adopcion->raza->nombre}}</td>
                                        <td> {{$adopcion->genero}}</td>
                                        <td> {{$adopcion->edad}}</td>
                                        <td>
                                            <a href="/animalesadopcion/{{$adopcion->codigo_animal}}" class="fa fa-search-plus">Ver</a>  
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

 