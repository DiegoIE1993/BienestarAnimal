@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Disponibilidad de Adopcion</div>

                    <div class="card-body">
                            <table class="table">
                                <thead>
                                    <th>Codigo Animal</th>
                                    <th>Foto</th>
                                    <th>Nombre del Ejemplar</th>
                                    <th>Especie</th>
                                    <th>Raza</th>
                                    <th>Sexo</th>
                                    <th>Edad</th>
                                </thead>
                        
                                <tbody>
                                    
                                    @foreach ($registro ?? '' as $adopcion)
                                    <tr>
                                        <td> {{$adopcion->codigo_animal}}</td>
                                        <td> <img whidth="50" height="50" src="/storage/{{ $adopcion->imagen}}"></td>
                                        <td> {{$adopcion->nombre_ejemplar}}</td>
                                        <td> {{$adopcion->especie->nombre}}</td>
                                        <td> {{$adopcion->raza->nombre}}</td>
                                        <td> {{$adopcion->genero}}</td>
                                        <td> {{$adopcion->edad}}</td>
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

 