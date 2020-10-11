@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        REGISTRO HISTORIA CLINICA ANIMAL
                    </div>
                    <div class="card-body">
                        <form action="{{ url('registrarmascota')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Tipo de Entrada</label>
                                <input type="text" name="name" require class="form-control">
                            </div>
                        </form>  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('datos_ciudadano')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    DATOS PRINCIPALES DEL CIUDADANO
                </div>
                <div class="card-body">
                    <form action="{{ url('registrarmascota')}}" method="post">
                        @csrf
                        <form action="{{ url('registrarmascota')}}" method="post">
                            <div class="form-group">
                                <label for="nombre">Nombres Completos</label>
                                <input type="text" name="nombre" require class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="direccion">Direccion</label>
                                <input type="text" name="direccion" require class="form-control">
                            </div>
                            <div class="form-group" style="display:inline-block; width: 340px;">
                                <label for="cedula">Cedula</label>
                                <input type="text" name="cedula" require class="form-control">
                            </div>
                            <div class="form-group" style="display:inline-block; width: 340px;">
                                <label for="telefono">Telefono</label>
                                <input type="text" name="telefono" require class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Correo</label>
                                <input type="text" name="email" require class="form-control">
                            </div>
                        </form>
                    </form>  
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection

@section('datos_ejemplar')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    DATOS PRINCIPALES DEL EJEMPLAR
                </div>
                <div class="card-body">
                    <form action="{{ url('registrarmascota')}}" method="post">
                        @csrf
                        <form action="{{ url('registrarmascota')}}" method="post">
                            <div class="form-group" style="display:inline-block; width: 226px;">
                                <label for="nombre">Nombres</label>
                                <input type="text" name="nombre" require class="form-control">
                            </div>
                            <div class="form-group" style="display:inline-block; width: 226px;">
                                <label for="especie">Especie</label>
                                <input type="text" name="especie" require class="form-control">
                            </div>
                            <div class="form-group" style="display:inline-block; width: 226px;">
                                <label for="raza">Raza</label>
                                <input type="text" name="Raza" require class="form-control">
                            </div>
                            <div class="form-group" style="display:inline-block; width: 226px;">
                                <label for="genero">Genero</label>
                                <input type="text" name="genero" require class="form-control">
                            </div>
                            <div class="form-group" style="display:inline-block; width: 226px;">
                                <label for="color">Color</label>
                                <input type="text" name="color" require class="form-control">
                            </div>
                            <div class="form-group" style="display:inline-block; width: 226px;">
                                <label for="talla">Talla</label>
                                <input type="text" name="talla" require class="form-control">
                            </div>
                            <div class="form-group" style="display:inline-block; width: 136px;">
                                <label for="peso">Peso</label>
                                <input type="text" name="peso" require class="form-control">
                            </div>
                            <div class="form-group" style="display:inline-block; width: 136px;">
                                <label for="edad">Edad</label>
                                <input type="text" name="edad" require class="form-control">
                            </div>
                            <div class="form-group" style="display:inline-block; width: 406px;">
                                <label for="condicion_general">Condicion General</label>
                                <input type="text" name="condicion_general" require class="form-control">
                            </div>
                            <div class="form-group" style="display:inline-block; width: 340px;">
                                <label for="actitud_general">Actitud General</label>
                                <input type="text" name="actitud_general" require class="form-control">
                            </div>
                            <div class="form-group" style="display:inline-block; width: 340px;">
                                <label for="estado_ingreso">Estado de Ingreso</label>
                                <input type="text" name="estado_ingreso" require class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="señales_particulares">Señales Particulares</label>
                                <input type="text" name="señales_particulares" require class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="motivo_ingreso_anamnesis">Motivo de Ingreso Anamnesis</label>
                                <input type="text" name="motivo_ingreso_anamnesis" require class="form-control">
                            </div>
                            <div class="justify-content-end">
                                <input type="submit" value="Enviar" class="btn btn-success">
                            </div>
                        </form>
                    </form>  
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
