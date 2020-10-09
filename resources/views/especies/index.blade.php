@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Lista de Especies</div>

                        <div class="card-body">
                            <div class="row justify-content-end pb-2">
                                <a href="{{url('/especies/create')}}" class="btn btn-success">Agregar Especie</a>
                            </div>
                            <table class="table">
                                <thead>
                                    <th >Nombre</th>
                                    <th >Acciones</th>
                                </thead>

                                <tbody>
                                    @foreach ($species as $especie)
                                            <tr>
                                                <td> {{$especie->nombre}}</td>
                                               
                                                <td>
                                                    <a href="{{ url('/$especies/'.$especie->id.'/edit')}}" class="btn btn-primary">Editar</a>
                                                    @include('especies.delete', ['especie' => $especie])  
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
    </div>
    
@endsection