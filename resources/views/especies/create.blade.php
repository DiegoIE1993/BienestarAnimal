@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Nueva Especie
                    </div>
                    <div class="card-body">
                        <form action="{{ route('especies.store')}}" method="post">
                            @csrf 
                            
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre
                                " require class="form-control">
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