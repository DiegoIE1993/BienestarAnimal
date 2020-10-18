@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Crear Informacion
                    </div>
                    <div class="card-body">
                        
                        <form action="{{ route('educacion.store')}}" method="post" novalidate>
                            @csrf
                            <div class="form-group">
                                <label for="titulo">Titulo</label>
                                <input type="text" name="titulo" require class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="video">Url Video</label>
                                <input type="text" name="video" require class="form-control">
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