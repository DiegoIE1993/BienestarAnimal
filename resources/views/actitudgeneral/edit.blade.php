@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
<<<<<<< HEAD
=======

>>>>>>> 9af00a7dc944408ba359bd15af1456f0a3f6d90f
                        Editar Actitud General
                    </div>
                    <div class="card-body">
                        
                        <form action="{{ route('actitudgeneral.update', $actitud->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nombre">Nombre Actitud General</label>
                                <input type="text" name="nombre" require class="form-control" value="{{$actitud->nombre}}">
<<<<<<< HEAD
=======

>>>>>>> 9af00a7dc944408ba359bd15af1456f0a3f6d90f
                            </div>
                            <div class="justify-content-end">
                                <input type="submit" value="Guardar" class="btn btn-success">

                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection