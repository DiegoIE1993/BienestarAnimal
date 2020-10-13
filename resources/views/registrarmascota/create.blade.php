@extends('adminlte::page')

@section('content')
    <fieldset>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            REGISTRO HISTORIA CLINICA ANIMAL
                        </div>
                        <div class="card-body">
                            <form action="{{ url('registrarmascota')}}" method="post">
                                @csrf
                                <div class="form-group" style="display:inline-block; width: 226px;">
                                    <label for="entrada">Tipo de Entrada</label>
                                    <select name="entrada_id" id="input" class="form-control">
                                        @foreach ($entradas as $entrada)
                                    <option value="{{$entrada->id}}">{{$entrada->nombre}}</option>
                                            
                                        @endforeach
                                    </select>   
                                </div>
                            </form>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </fieldset>
    
    <fieldset>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
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
                                    <div class="form-group" style="display:inline-block; width: 460px;">
                                        <label for="cedula">Cedula</label>
                                        <input type="text" name="cedula" require class="form-control">
                                    </div>
                                    <div class="form-group" style="display:inline-block; width: 460px;">
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
    </fieldset>
    <fieldset>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            DATOS PRINCIPALES DEL EJEMPLAR
                        </div>
                        <div class="card-body">
                            <form action="{{ url('registrarmascota')}}" method="post">
                                @csrf
                                <form action="{{ url('registrarmascota')}}" method="post">
                                    <div class="form-group" style="display:inline-block; width: 230px;">
                                        <label for="nombre">Nombres</label>
                                        <input type="text" name="nombre" require class="form-control">
                                    </div>
                                    <div class="form-group" style="display:inline-block; width: 230px;">
                                        <label for="especies">Especie</label>
                                        <select name="especie_id" id="input" class="form-control">
                                            @foreach ($specie as $especie)
                                        <option value="{{$especie->id}}">{{$especie->nombre}}</option>
                                                
                                            @endforeach
                                        </select>   
                                    </div>
                                    <div class="form-group" style="display:inline-block; width: 229px;">
                                        <label for="razas">Raza</label>
                                        <select name="raza_id" id="input" class="form-control">
                                            @foreach ($races as $raza)
                                        <option value="{{$raza->id}}">{{$raza->nombre}}</option>
                                                
                                            @endforeach
                                        </select>   
                                    </div>
                                    
                                    <div class="form-group" style="display:inline-block; width: 229px;">
                                        <label for="genero">Genero</label>
                                        <input type="text" name="genero" require class="form-control">
                                    </div>
                                    <div class="form-group" style="display:inline-block; width: 229px;">
                                        <label for="color">Color</label>
                                        <input type="text" name="color" require class="form-control">
                                    </div>
                                    <div class="form-group" style="display:inline-block; width: 229px;">
                                        <label for="talla">Talla</label>
                                        <input type="text" name="talla" require class="form-control">
                                    </div>
                                    <div class="form-group" style="display:inline-block; width: 229px;">
                                        <label for="peso">Peso</label>
                                        <input type="text" name="peso" require class="form-control">
                                    </div>
                                    <div class="form-group" style="display:inline-block; width: 229px;">
                                        <label for="edad">Edad</label>
                                        <input type="text" name="edad" require class="form-control">
                                    </div>
                                    <div class="form-group" style="display:inline-block; width: 307px;">
                                        <label for="razas">Condicion General</label>
                                        <select name="raza_id" id="input" class="form-control">
                                            @foreach ($condicions as $condicion)
                                        <option value="{{$condicion->id}}">{{$condicion->nombre}}</option>
                                                
                                            @endforeach
                                        </select>   
                                    </div>
                                    <div class="form-group" style="display:inline-block; width: 307px;">
                                        <label for="actitud_general">Actitud General</label>
                                        <select name="actitud_general" id="input" class="form-control">
                                            @foreach ($actitudes as $actitud)
                                        <option value="{{$actitud->id}}">{{$actitud->nombre}}</option>
                                                
                                            @endforeach
                                        </select>   
                                    </div>
                                    <div class="form-group" style="display:inline-block; width: 307px;">
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
    </fieldset>
    
@endsection


