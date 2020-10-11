@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Lista de Razas</div>

                        <div class="card-body">
                            <div class="row justify-content-end pb-2">
                            <a href="{{url('/razas/create')}}" class="btn btn-success">Nuevo Registro</a>
                        </div>
                            <table class="table">
                                <thead>
                                    <th >Nombre Raza</th>
                                    <th >Acciones</th>
                                </thead>

                                <tbody>
                                    @foreach ($races as $raza)
                                            <tr>
                                                <td> {{$raza->nombre}}</td>
                                               
                                                <td>
                                                    <a href="{{ url('/razas/'.$raza->id.'/edit')}}" class="btn btn-primary">Editar</a>
                                                    @include('razas.delete', ['raza' => $raza])  
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