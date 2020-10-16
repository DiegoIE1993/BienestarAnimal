@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Editar Eventos
                    </div>
                    <div class="card-body">
                        
                        <form action="{{ route('eventos.update', $events->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="titulo">Titulo</label>
                                <input type="text" name="titulo" require class="form-control" value="{{$events->titulo}}">
                            </div>
                            <div class="form-group">
                                <label for="descripcion">Descripcion</label>
                                <textarea class="form-control" name="descripcion" require class="form-control">{{$events->descripcion}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="fecha">Fecha</label>
                                <input type="date" class="form-control" name="fecha"value="{{$events->fecha}}">
                            </div>
                            <div class="justify-content-end">
                                <a href="/eventos" class="btn btn-primary">Atras</a>
                                <input type="submit" value="Guardar" class="btn btn-success">

                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection