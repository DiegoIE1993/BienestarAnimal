@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Crear Condicion General
                    </div>
                    <div class="card-body">
                        
                        <form action="{{ route('condiciongeneral.store')}}" method="post" novalidate>
                            @csrf
                            <div class="form-group">
                                <label for="nombre">Nombre Condicion General</label>

                                <input type="text" name="nombre" class="form-control">

                                @error('nombre')
                                    <span class="invalid-feedback d-block" role="alert">    
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="justify-content-end">
                                <a href="/condiciongeneral" class="btn btn-primary">Atras</a>
                                <input type="submit" value="Guardar" class="btn btn-success">

                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection