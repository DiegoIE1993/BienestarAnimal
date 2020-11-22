@extends('adminlte::page')

@section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="row justify-content-end pb-2" >
                        <a href="{{url('/registrarmascota/create')}}" class="btn btn-success">Nuevo Registro</a>
                    </div>
                    <div class="card">
                        <div class="card-header">Historia Clinica</div>    
                        <table class="table">
                            <thead>
                                <th>Identificacion del Animal</th>
                                <th>Nombres del Ejemplar</th>
                                <th>Especie</th>
                                <th>Raza</th>
                                <th>Sexo</th>
                                <th>Edad</th>
                                <th>Detalles</th>
                                <th>Acciones</th>
                            </thead>
                            <tbody>
                                {{-- // Recorrer la tabla registro para mostrar los campos // --}}
                                @foreach ($registro as $item) 
                                    <tr>
                                        <td>{{$item->codigo_animal}}</td>
                                        <td>{{$item->nombre_ejemplar}}</td>
                                        <td>{{$item->especie->nombre}}</td>
                                        <td>{{$item->raza->nombre}}</td>
                                        <td>{{$item->genero}}</td>
                                        <td>{{$item->edad}}</td>
                                        <td>
                                            <a href="/registrarmascota/{{$item->codigo_animal}}" class="fa fa-search-plus">Ver</a>  
                                        </td>
                                        <td>
                                            <a href="{{ url('/registrarmascota/'.$item->codigo_animal.'/edit')}}" class="btn btn-primary">Editar</a> 
                                            @include('registrarmascota.delete', ['item' => $item])  
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody> 
                        </table> 
                        {{$registro->links()}}                
                    </div> 
                </div> 
            </div>
        </div>
@endsection