@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Eventos</div>

                    <div class="card-body">
                        <div class="row justify-content-end pb-2">
                            <a href="{{url('/eventos/create')}}" class="btn btn-success">Agregar un Evento</a>
                        </div>
                            <table class="table">
                                <thead>
                                    <th>Titulo</th>
                                    <th>Descripcion</th>
                                    <th>Fecha</th>
                                    <th>Acciones</th>
                                </thead>
                        
                                <tbody>
                                    @foreach ($events as $evento)
                                        <tr>
                                            <td> {{$evento->titulo}}</td>
                                            <td> {{$evento->descripcion}}</td>
                                            <td> {{$evento->fecha}}</td>                                            
                                            <td>
                                                <a href="{{ url('/eventos/'.$evento->id.'/edit')}}" class="btn btn-primary">Editar</a>
                                                @include('eventos.delete', ['eventos' => $evento]) 
                                                <a href="/eventos/{{$evento->id}}" class="btn btn-primary">ver</a>
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