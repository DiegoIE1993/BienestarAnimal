@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        REGISTRO HISTORIA CLINICA ANIMAL
                    </div>
                        <form action="{{ route('registrarmascota.store')}}" enctype="multipart/form-data" method="post" novalidate>
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
                                                        <select name="TipoMercanciaId" id="input" class="form-control @error('TipoMercanciaId') is-invalid @enderror" value={{ old('TipoMercanciaId') }}>
                                                            @foreach ($entradas as $entrada )
                                                        <option value="{{$entrada->id}}">{{$entrada->nombre}}</option>
                                                            @endforeach
                                                        </select>  
                                                        @error('tipo_entrada_id')
                                                            <span class="invalid-feedback d-block" role="alert">    
                                                                <strong>{{$message}}</strong>
                                                                </span>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group" style="display:inline-block; width: 226px;">
                                                        <label for="codigo">Nº Identificacion</label>
                                                        <input type="text" name="codigo_animal" require class="form-control @error('codigo_animal') is-invalid @enderror" value={{ old('codigo_animal')}}>
                                                        @error('codigo_animal')
                                                            <span class="invalid-feedback d-block" role="alert">    
                                                                <strong>{{$message}}</strong>
                                                            </span>
                                                        @enderror
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
                                                    <input type="text" name="nombre_ciudadano" require class="form-control  @error('nombre_ciudadano') is-invalid @enderror" value={{ old('nombre_ciudadano') }}>
                                                    @error('nombre_ciudadano')
                                                        <span class="invalid-feedback d-block" role="alert">    
                                                            <strong>{{$message}}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="direccion">Direccion</label>
                                                    <input type="text" name="direccion" require class="form-control @error('direccion') is-invalid @enderror" value={{ old('direccion') }}>
                                                    @error('direccion')
                                                        <span class="invalid-feedback d-block" role="alert">    
                                                            <strong>{{$message}}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="form-group" style="display:inline-block; width: 444px;">
                                                    <label for="cedula">Cedula</label>
                                                    <input type="text" name="cedula" require class="form-control @error('cedula') is-invalid @enderror" value={{ old('cedula') }}>
                                                    @error('cedula')
                                                        <span class="invalid-feedback d-block" role="alert">    
                                                            <strong>{{$message}}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="form-group" style="display:inline-block; width: 440px;">
                                                    <label for="telefono">Telefono</label>
                                                    <input type="text" name="telefono" require class="form-control  @error('telefono') is-invalid @enderror" value={{ old('telefono') }}>
                                                    @error('telefono')
                                                        <span class="invalid-feedback d-block" role="alert">    
                                                            <strong>{{$message}}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="email">Correo</label>
                                                    <input type="email" name="correo" require class="form-control  @error('correo') is-invalid @enderror" value={{ old('correo') }}>
                                                    @error('correo')
                                                        <span class="invalid-feedback d-block" role="alert">    
                                                            <strong>{{$message}}</strong>
                                                        </span>
                                                    @enderror
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
                                                    <div class="form-group" style="display:inline-block; width: 430px;">
                                                        <label for="nombre_ejemplar">Nombres</label>
                                                        <input type="text" name="nombre_ejemplar" require class="form-control @error('nombre_ejemplar') is-invalid @enderror" value={{ old('nombre_ejemplar') }}>
                                                        @error('nombre_ejemplar')
                                                            <span class="invalid-feedback d-block" role="alert">    
                                                                <strong>{{$message}}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group" style="display:inline-block; width: 430px;">
                                                        <label for="especie">Especie</label>
                                                        <select name="especie_id" id="input" class="form-control @error('especie_id') is-invalid @enderror" value={{ old('especia_id') }}>
                                                            @foreach ($specie as $especies )
                                                        <option value="{{$especies->id}}">{{$especies->nombre}}</option>   
                                                            @endforeach
                                                        </select>
                                                        @error('especie_id')
                                                            <span class="invalid-feedback d-block" role="alert">    
                                                                <strong>{{$message}}</strong>
                                                            </span>
                                                        @enderror   
                                                    </div>

                                                    <div class="form-group" style="display:inline-block; width: 300px;">
                                                        <label for="genero">Genero</label>
                                                        <select  name="genero" class="form-control @error('genero') is-invalid @enderror" value={{ old('genero') }}>
                                                        <option value="Macho">Macho</option>
                                                        <option value="Hembra">Hembra</option>
                                                        </select>
                                                        @error('genero')
                                                            <span class="invalid-feedback d-block" role="alert">    
                                                                <strong>{{$message}}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group" style="display:inline-block; width: 285px;">
                                                        <label for="razas">Raza</label>
                                                        <select name="raza_id" id="input" class="form-control @error('raza_id') is-invalid @enderror" value={{ old('raza_id') }}>
                                                            @foreach ($races as $raza)
                                                        <option value="{{$raza->id}}">{{$raza->nombre}}</option>    
                                                            @endforeach
                                                        </select>
                                                        @error('raza_id')
                                                            <span class="invalid-feedback d-block" role="alert">    
                                                                <strong>{{$message}}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group" style="display:inline-block; width: 280px;">
                                                        <label for="color">Color</label>
                                                        <input type="text" name="color" require class="form-control @error('color') is-invalid @enderror" value={{ old('color') }}>
                                                        @error('color')
                                                            <span class="invalid-feedback d-block" role="alert">    
                                                                <strong>{{$message}}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group" style="display:inline-block; width: 280px;">
                                                        <label for="talla">Talla</label>
                                                        <input type="text" name="talla" require class="form-control @error('talla') is-invalid @enderror" value={{ old('talla') }}>
                                                        @error('talla')
                                                            <span class="invalid-feedback d-block" role="alert">    
                                                                <strong>{{$message}}</strong>
                                                            </span>
                                                        @enderror
                                                        
                                                    </div>

                                                    <div class="form-group" style="display:inline-block; width: 200px;">
                                                        <label for="peso">Peso (Kg)</label>
                                                        <input type="text" name="peso" require class="form-control @error('peso') is-invalid @enderror" value={{ old('peso') }}>
                                                        @error('peso')
                                                            <span class="invalid-feedback d-block" role="alert">    
                                                                <strong>{{$message}}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    
                                                    <div class="form-group" style="display:inline-block; width: 200px;">
                                                        <label for="edad">Edad</label>
                                                        <input type="text" name="edad" require class="form-control @error('edad') is-invalid @enderror" value={{ old('edad') }}>
                                                        @error('edad')
                                                            <span class="invalid-feedback d-block" role="alert">    
                                                                <strong>{{$message}}</strong>
                                                            </span>
                                                        @enderror
                                                    </div> 

                                                    <div class="form-group" style="display:inline-block; width: 460px;">
                                                        <label for="condicion">Condicion General</label>
                                                        <select name="condicion_id" id="input" class="form-control @error('condicion_id') is-invalid @enderror" value={{ old('condicion_id') }}>
                                                            @foreach ($condicions as $condicion)
                                                        <option value="{{$condicion->id}}">{{$condicion->nombre}}</option>     
                                                            @endforeach
                                                        </select>
                                                        @error('condicion_id')
                                                            <span class="invalid-feedback d-block" role="alert">    
                                                                <strong>{{$message}}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group" style="display:inline-block; width: 435px;">
                                                        <label for="actitud_general">Actitud General</label>
                                                        <select name="actitud_id" id="input" class="form-control @error('actitud_id') is-invalid @enderror" value={{ old('actitud_id') }} >
                                                            @foreach ($actitudes as $actitud)
                                                        <option value="{{$actitud->id}}">{{$actitud->nombre}}</option>     
                                                            @endforeach
                                                        </select>
                                                        @error('actitud_id')
                                                            <span class="invalid-feedback d-block" role="alert">    
                                                                <strong>{{$message}}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    
                                                    <div class="form-group" style="display:inline-block; width: 430px;">
                                                        <label for="estado">Estado de Ingreso</label>
                                                        <select  name="estado" class="form-control @error('estado') is-invalid @enderror" value={{ old('estado') }}>
                                                            <option value="Bueno">Bueno</option>
                                                            <option value="Regular">Regular</option>
                                                            <option value="Malo">Malo</option>
                                                        </select>
                                                        @error('estado')
                                                            <span class="invalid-feedback d-block" role="alert">    
                                                                <strong>{{$message}}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="señales_particulares">Señales Particulares</label>
                                                        <textarea class="form-control @error('señales_particulares') is-invalid @enderror" name="señales_particulares" rows="3">{{ old('señales_particulares') }}</textarea>
                                                        @error('señales_particulares')
                                                            <span class="invalid-feedback d-block" role="alert">    
                                                                <strong>{{$message}}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="motivo_ingreso_anamnesis">Motivo de Ingreso Anamnesis</label>
                                                        <textarea class="form-control @error('motivo_ingreso_anamnesis') is-invalid @enderror" name="motivo_ingreso_anamnesis" rows="3">{{ old('motivo_ingreso_anamnesis') }}</textarea>
                                                        @error('motivo_ingreso_anamnesis')
                                                            <span class="invalid-feedback d-block" role="alert">    
                                                                <strong>{{$message}}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group" style="display:inline-block; width: 300px;">
                                                        <label for="disponibilidad">En Adopcion</label>
                                                        <select  name="disponibilidad" class="form-control @error('disponibilidad') is-invalid @enderror" value={{ old('disponibilidad') }}>
                                                        <option value="Disponible">Disponible</option>
                                                        <option value="No_Disponible">No Disponible</option>
                                                        </select>
                                                        @error('disponibilidad')
                                                            <span class="invalid-feedback d-block" role="alert">    
                                                                <strong>{{$message}}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="imagen">Elige la imagen</label>
                                                        <input type="file" name="imagen" require class="form-control">
                                                    </div>                                                 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                                     
                            <div class="justify-content-end">
                                <input type="submit" value="Enviar" class="btn btn-success">
                            </div> 
                        </form>              
                </div>
            </div>
        </div>
    </div>
@endsection


