@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Editar Raza
                    </div>
                    <div class="card-body">
                        
                        <form action="{{ route('razas.update', $races->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nombre">Nombre Raza</label>
                                <input type="text" name="nombre" require class="form-control" value="{{$races->nombre}}">
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