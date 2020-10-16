@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Editar Requisitos
                    </div>
                    <div class="card-body">
                        
                        <form action="{{ route('requisitos.update', $req->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="descripcion">Descripcion</label>
                                    <textarea class="form-control" name="descripcion" require class="form-control">{{$req->descripcion}}</textarea>
                                </div>
                            </div>
                            <div class="justify-content-end">
                                <a href="/requisitos" class="btn btn-primary">Atras</a>
                                <input type="submit" value="Guardar" class="btn btn-success">

                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection