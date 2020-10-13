@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Editar Especie
                    </div>
                    <div class="card-body">
                        
                        <form action="{{ route('especies.update', $especie->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nombre">Nombre Especie</label>
                                <input type="text" name="nombre" require class="form-control" value="{{$especie->nombre}}">
                            </div>
                            <div class="justify-content-end">
                                <a href="/especies" class="btn btn-primary">Atras</a>
                                <input type="submit" value="Guardar" class="btn btn-success">

                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection