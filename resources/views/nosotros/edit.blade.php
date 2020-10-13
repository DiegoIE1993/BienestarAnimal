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
                        
                        <form action="{{ route('nosotros.update', $nosotros->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="titulo">Titulo</label>
                                <input type="text" name="titulo" require class="form-control" value="{{$nosotros->titulo}}">
                            </div>
                            <div class="form-group">
                                <label for="mision">Mision</label>
                                <input type="text" name="mision" require class="form-control" value="{{$nosotros->mision}}">
                            </div>
                            <div class="form-group">
                                <label for="vision">Vision</label>
                                <input type="text" name="vision" require class="form-control" value="{{$nosotros->vision}}">
                            </div>
                            <div class="form-group">
                                <label for="horario">Horarios de Atencion</label>
                                <input type="text" name="horario" require class="form-control" value="{{$nosotros->horario}}">
                            </div>
                            <div class="justify-content-end">
                                <a href="/nosotros" class="btn btn-primary">Atras</a>
                                <input type="submit" value="Enviar" class="btn btn-success">

                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection