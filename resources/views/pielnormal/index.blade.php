@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Lista de Piel Normal</div>

                        <div class="card-body">
                            <div class="row justify-content-end pb-2">
                            <a href="{{url('/pielnormal/create')}}" class="btn btn-success">Nuevo Registro</a>
                        </div>
                            <table class="table">
                                <thead>
                                    <th >Nombre Piel</th>
                                    <th >Acciones</th>
                                </thead>

                                <tbody>
                                    @foreach ($piel as $pie)
                                            <tr>
                                                <td> {{$pie->nombre}}</td>
                                               
                                                <td>
                                                    <a href="{{ url('/pielnormal/'.$pie->id.'/edit')}}" class="btn btn-primary">Editar</a>
                                                    @include('pielnormal.delete', ['pie' => $pie])  
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