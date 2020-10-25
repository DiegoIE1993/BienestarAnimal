@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Crear Eventos
                    </div>
                    <div class="card-body">
                        
                        <form action="{{ route('eventos.store')}}" method="post" novalidate>
                            @csrf
                            <div class="form-group">
                                <label for="titulo">Titulo</label>
                                <input type="text" name="titulo" require class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="descripcion">Descripcion</label>
                                <textarea class="form-control" name="descripcion"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="fecha">Fecha y Hora</label>
                                <input type="text" class="form-control" name="fecha_hora">
                            </div>
                            <div class="justify-content-end">
                                <a href="/eventos" class="btn btn-primary">Atras</a>
                                <input type="submit" value="Enviar" class="btn btn-success">

                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection