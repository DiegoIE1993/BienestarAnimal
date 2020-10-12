@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
<<<<<<< HEAD
=======

>>>>>>> 9af00a7dc944408ba359bd15af1456f0a3f6d90f
                    <div class="card-header">Lista de Actitud General</div>

                        <div class="card-body">
                            <div class="row justify-content-end pb-2">
                            <a href="{{url('/actitudgeneral/create')}}" class="btn btn-success">Nuevo Registro</a>
                        </div>
                            <table class="table">
                                <thead>
                                    <th >Nombre Actitud General</th>
<<<<<<< HEAD
=======

>>>>>>> 9af00a7dc944408ba359bd15af1456f0a3f6d90f
                                    <th >Acciones</th>
                                </thead>

                                <tbody>
                                    @foreach ($actitud as $act)
                                            <tr>
                                                <td> {{$act->nombre}}</td>
                                               
                                                <td>
                                                    <a href="{{ url('/actitudgeneral/'.$act->id.'/edit')}}" class="btn btn-primary">Editar</a>
                                                    @include('actitudgeneral.delete', ['act' => $act])  
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