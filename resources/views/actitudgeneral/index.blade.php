@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
<<<<<<< HEAD
                    <div class="card-header">Lista de Actitud General</div>

                        <div class="card-body">
                            <div class="row justify-content-end pb-2">
                            <a href="{{url('/actitudgeneral/create')}}" class="btn btn-success">Nuevo Registro</a>
                        </div>
                            <table class="table">
                                <thead>
                                    <th >Nombre Actitud General</th>
=======
                    <div class="card-header">Lista de Condicion General</div>

                        <div class="card-body">
                            <div class="row justify-content-end pb-2">
                            <a href="{{url('/condiciongeneral/create')}}" class="btn btn-success">Nuevo Registro</a>
                        </div>
                            <table class="table">
                                <thead>
                                    <th >Nombre Condicion General</th>
>>>>>>> 6e448d118c64fef02186af20882c328975d1edbf
                                    <th >Acciones</th>
                                </thead>

                                <tbody>
<<<<<<< HEAD
                                    @foreach ($actitud as $act)
                                            <tr>
                                                <td> {{$act->nombre}}</td>
                                               
                                                <td>
                                                    <a href="{{ url('/actitudgeneral/'.$act->id.'/edit')}}" class="btn btn-primary">Editar</a>
                                                    @include('actitudgeneral.delete', ['act' => $act])  
=======
                                    @foreach ($condicion as $con)
                                            <tr>
                                                <td> {{$con->nombre}}</td>
                                               
                                                <td>
                                                    <a href="{{ url('/condiciongeneral/'.$con->id.'/edit')}}" class="btn btn-primary">Editar</a>
                                                    @include('condiciongeneral.delete', ['con' => $con])  
>>>>>>> 6e448d118c64fef02186af20882c328975d1edbf
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