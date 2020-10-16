@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        REGISTRO HISTORIA CLINICA ANIMAL
                    </div>
                        <form action="{{ route('registrarmascota.store')}}" method="post">
                            @csrf
                            <div class="card-body">
                            <fieldset>
                                <div class="row justify-content-end">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="car-body">
                                                    <div class="form-group" style="display:inline-block; width: 226px;">
                                                        <label for="entrada">Tipo de Entrada</label>
                                                        <select name="tipo_entrada_id" id="input" class="form-control">
                                                            @foreach ($entradas as $entrada )
                                                        <option value="{{$entrada->id}}">{{$entrada->nombre}}</option>
                                                            @endforeach
                                                        </select>  
                                                    </div>
                                                    <div class="form-group" style="display:inline-block; width: 226px;">
                                                        <label for="codigo">Nº Identificacion</label>
                                                        <input type="text" name="codigo_animal" require class="form-control">
                                                    </div>
                                                </div>
                                            <div>    
                                        </div>
                                    </div>
                                </div>            
                            </fieldset>
                             <fieldset>
                                <div class="row justify-content-center">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                DATOS PRINCIPALES DEL CIUDADANO
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="nombre_ciudadano">Nombres Completos</label>
                                                    <input type="text" name="nombre_ciudadano" require class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="direccion">Direccion</label>
                                                    <input type="text" name="direccion" require class="form-control">
                                                </div>
                                                <div class="form-group" style="display:inline-block; width: 444px;">
                                                    <label for="cedula">Cedula</label>
                                                    <input type="text" name="cedula" require class="form-control">
                                                </div>
                                                <div class="form-group" style="display:inline-block; width: 440px;">
                                                    <label for="telefono">Telefono</label>
                                                    <input type="text" name="telefono" require class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Correo</label>
                                                    <input type="email" name="correo" require class="form-control">
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
                                                    <div class="form-group" style="display:inline-block; width: 300px;">
                                                        <label for="nombre_ejemplar">Nombres</label>
                                                        <input type="text" name="nombre_ejemplar" require class="form-control">
                                                    </div>
                                                    <div class="form-group" style="display:inline-block; width: 280px;">
                                                        <label for="especie">Especie</label>
                                                        <select name="especie_id" id="input" class="form-control">
                                                            @foreach ($specie as $especies )
                                                        <option value="{{$especies->id}}">{{$especies->nombre}}</option>   
                                                            @endforeach
                                                        </select>   
                                                    </div>
                                                    <div class="form-group" style="display:inline-block; width: 300px;">
                                                        <label for="genero">Genero</label>
                                                        <select  name="genero" class="form-control">
                                                        <option value="Macho">Macho</option>
                                                        <option value="Hembra">Hembra</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group" style="display:inline-block; width: 285px;">
                                                        <label for="razas">Raza</label>
                                                        <select name="raza_id" id="input" class="form-control">
                                                            @foreach ($races as $raza)
                                                        <option value="{{$raza->id}}">{{$raza->nombre}}</option>    
                                                            @endforeach
                                                        </select>   
                                                    </div>
                                                    <div class="form-group" style="display:inline-block; width: 280px;">
                                                        <label for="color">Color</label>
                                                        <input type="text" name="color" require class="form-control">
                                                    </div>
                                                    <div class="form-group" style="display:inline-block; width: 280px;">
                                                        <label for="talla">Talla</label>
                                                        <input type="text" name="talla" require class="form-control">
                                                    </div>
                                                    <div class="form-group" style="display:inline-block; width: 200px;">
                                                        <label for="peso">Peso (Kg)</label>
                                                        <input type="text" name="peso" require class="form-control">
                                                    </div>
                                                    <div class="form-group" style="display:inline-block; width: 200px;">
                                                        <label for="edad">Edad</label>
                                                        <input type="text" name="edad" require class="form-control">
                                                    </div>                                                    
                                                    <div class="form-group" style="display:inline-block; width: 460px;">
                                                        <label for="condicion">Condicion General</label>
                                                        <select name="condicion_id" id="input" class="form-control">
                                                            @foreach ($condicions as $condicion)
                                                        <option value="{{$condicion->id}}">{{$condicion->nombre}}</option>     
                                                            @endforeach
                                                        </select>   
                                                    </div>
                                                    <div class="form-group" style="display:inline-block; width: 435px;">
                                                        <label for="actitud_general">Actitud General</label>
                                                        <select name="actitud_id" id="input" class="form-control">
                                                            @foreach ($actitudes as $actitud)
                                                        <option value="{{$actitud->id}}">{{$actitud->nombre}}</option>     
                                                            @endforeach
                                                        </select>   
                                                    </div>
                                                    <div class="form-group" style="display:inline-block; width: 430px;">
                                                        <label for="estado">Estado de Ingreso</label>
                                                        <select  name="estado" class="form-control">
                                                        <option value="Bueno">Bueno</option>
                                                        <option value="Regular">Regular</option>
                                                        <option value="Malo">Malo</option>
                                                        </select>
                                                    </div>                                                    
                                                    <div class="form-group">
                                                        <label for="señales_particulares">Señales Particulares</label>
                                                        <textarea class="form-control" name="señales_particulares"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="motivo_ingreso_anamnesis">Motivo de Ingreso Anamnesis</label>
                                                        <textarea class="form-control" name="motivo_ingreso_anamnesis"></textarea>
                                                    </div>                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset> 
                            {{-- <fieldset>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="form-group">
                                                        <label for="piel">Piel Normal</label><br>
                                                        <input type="checkbox" name="skills" value="alopecia">Alopecia     
                                                        <input type="checkbox" name="skills" value="descamacion">Descamacion
                                                        <input type="checkbox" name="skills" value="ulcera">Ulcera
                                                        <input type="checkbox" name="skills" value="costra">Costra
                                                        <input type="checkbox" name="skills" value="cicatriz">Cicatriz
                                                        <input type="checkbox" name="skills" value="herida_abierta">Herida Abierta
                                                        <input type="checkbox" name="skills" value="DAP">DAP
                                                        <input type="checkbox" name="skills" value="tumor_minimo">Tumor Minimo
                                                        <input type="checkbox" name="skills" value="seborrea">Seborrea
                                                        <input type="checkbox" name="skills" value="sarna">Sarna
                                                        <input type="checkbox" name="skills" value="tungosis">Tungosis
                                                        <input type="checkbox" name="skills" value="DAP">DAP
                                                        <input type="checkbox" name="skills" value="tumor_minimo">Tumor
                                                    </div>    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>                       --}}
                            <div class="justify-content-end">
                                <input type="submit" value="Enviar" class="btn btn-success">
                            </div> 
                        </form>              
                </div>
            </div>
        </div>
    </div>
@endsection


