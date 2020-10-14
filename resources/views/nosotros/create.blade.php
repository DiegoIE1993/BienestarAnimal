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
                        
                        <form action="{{ route('nosotros.store')}}" method="post" novalidate>
                            @csrf
                            <div class="form-group">
                                <label for="titulo">Titulo</label>
                                <input type="text" name="titulo" require class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="mision">Mision</label>
                                <textarea class="form-control" id="mision" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="vision">Vision</label>
                                <textarea class="form-control" id="vision" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="horario">Horarios de Atencion</label>
                                <input type="text" name="horario" require class="form-control">
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