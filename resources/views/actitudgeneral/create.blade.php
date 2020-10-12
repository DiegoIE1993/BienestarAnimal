@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Crear Actitud General
                    </div>
                    <div class="card-body">
                        
                        <form action="{{ route('actitudgeneral.store')}}" method="post" novalidate>
                            @csrf
                            <div class="form-group">
                                <label for="nombre">Nombre Actitud General</label>

                                <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value={{ old('nombre') }}>

                                @error('nombre')
                                    <span class="invalid-feedback d-block" role="alert">    
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
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