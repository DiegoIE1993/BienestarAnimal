@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Lista Tipos de Entrada</div>
                        <div class="card-body">
                            <div class="row justify-content-end pb-2">
                            <a href="{{url('/tipoentrada/create')}}" class="btn btn-success">Nuevo Registro</a>
                            </div>
                            <table class="table">
                                <thead>
                                    <th >Nombre Tipo Entrada</th>
                                    <th >Acciones</th>
                                </thead>

                                <tbody>
                                    @foreach ($entradas as $entrada)
                                            <tr>
                                                <td> {{$entrada->nombre}}</td>         
                                                <td>
                                                    <a href="{{ url('/tipoentrada/'.$entrada->id.'/edit')}}" class="btn btn-primary">Editar</a>
                                                    @include('tipoentrada.delete', ['entrada' => $entrada])  
                                                </td>
                                            </tr>
                                        @endforeach
                                </tbody>
                            </table>
                            {{$entradas->links()}} 
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
    
@endsection