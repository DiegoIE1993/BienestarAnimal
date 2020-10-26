@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Editar Informacion
                    </div>
                    <div class="card-body">
                        
                        <form action="{{ route('educacion.update', $educacion->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="titulo">Titulo</label>
                                <input type="text" name="titulo" require class="form-control" value="{{$educacion->titulo}}">
                            </div>
                            <div class="form-group">
                                <label for="video">Url Video</label>
                                <input type="text" name="video" require class="form-control" value="{{$educacion->video}}">
                            </div>
                            <div class="justify-content-end">
                                <a href="/educacion" class="btn btn-primary">Atras</a>
                                <input type="submit" value="Enviar" class="btn btn-success">

                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection