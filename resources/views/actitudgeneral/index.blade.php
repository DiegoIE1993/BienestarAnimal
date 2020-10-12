@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Lista de Condicion General</div>

                        <div class="card-body">
                            <div class="row justify-content-end pb-2">
                            <a href="{{url('/condiciongeneral/create')}}" class="btn btn-success">Nuevo Registro</a>
                        </div>
                            <table class="table">
                                <thead>
                                    <th >Nombre Condicion General</th>
                                    <th >Acciones</th>
                                </thead>

                                <tbody>
                                    @foreach ($condicion as $con)
                                            <tr>
                                                <td> {{$con->nombre}}</td>
                                               
                                                <td>
                                                    <a href="{{ url('/condiciongeneral/'.$con->id.'/edit')}}" class="btn btn-primary">Editar</a>
                                                    @include('condiciongeneral.delete', ['con' => $con])  
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