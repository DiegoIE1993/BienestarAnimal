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
                                <div class="form-group">
                                    <label for="descripcion">Misión</label>
                                    <textarea class="form-control" name="mision" require class="form-control" rows="4">{{$nosotros->mision}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="vision">Visión</label>
                                <textarea class="form-control" name="vision" require class="form-control" rows="4">{{$nosotros->vision}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="horario">Horarios de Atencion</label>
                                <input type="text" name="horario" require class="form-control" value="{{$nosotros->horario}}">
                            </div>
                            <div class="form-group">
                                <label for="contacto">Horarios de Atencion</label>
                                <input type="text" name="contacto" require class="form-control" value="{{$nosotros->contacto}}">
                            </div>
                            <div class="justify-content-end">
                                <a href="/nosotros" class="btn btn-primary">Atras</a>
                                <input type="submit" value="Guardar" class="btn btn-success">

                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection