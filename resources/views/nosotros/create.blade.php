@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Crear Informacion
                    </div>
                    <div class="card-body">
                        
                        <form action="{{ url('nosotros')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="titulo">Titulo</label>
                                <input type="text" name="titulo" require class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="mision">Mision</label>
                                <input type="text " name="mision" require class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="vision">Vision</label>
                                <input type="text " name="vision" require class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="horario">Horarios de Atencion</label>
                                <input type="text" name="horario" require class="form-control">
                            </div>
                            <div class="justify-content-end">
                                <input type="submit" value="Enviar" class="btn btn-success">

                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection