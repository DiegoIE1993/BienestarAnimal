@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        EDITAR REGISTRO DEL ANIMAL
                    </div>
                    <form action="{{ route('registrarmascota.update', $item->codigo_animal)}}" enctype="multipart/form-data"  novalidate method="post">
                        @csrf
                        @method('PUT')
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
                                                        <option {{$item->tipo_entrada_id == $entrada->id ? 'selected' : '' }} value="{{$entrada->id}}">{{$entrada->nombre}}</option>
                                                            @endforeach
                                                        </select>  
                                                    </div>
                                                    <div class="form-group" style="display:inline-block; width: 226px;">
                                                        <label for="codigo">Nº Identificacion</label>
                                                    <input type="text" name="codigo_animal" require class="form-control" value="{{ $item->codigo_animal}}" >
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
                                                <input type="text" name="nombre_ciudadano" require class="form-control" value="{{$item->nombre_ciudadano}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="direccion">Direccion</label>
                                                    <input type="text" name="direccion" require class="form-control" value="{{$item->direccion}}">
                                                </div>
                                                <div class="form-group" style="display:inline-block; width: 444px;">
                                                    <label for="cedula">Cedula</label>
                                                    <input type="text" name="cedula" require class="form-control" value="{{$item->cedula}}">
                                                </div>
                                                <div class="form-group" style="display:inline-block; width: 440px;">
                                                    <label for="telefono">Telefono</label>
                                                    <input type="text" name="telefono" require class="form-control" value="{{$item->telefono}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Correo</label>
                                                    <input type="email" name="correo" require class="form-control" value="{{$item->correo}}">
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
                                                        <input type="text" name="nombre_ejemplar" require class="form-control" value="{{$item->nombre_ejemplar}}">
                                                    </div>
                                                    <div class="form-group" style="display:inline-block; width: 430px;">
                                                        <label for="especie">Especie</label>
                                                        <select name="especie_id" id="input" class="form-control">
                                                            @foreach ($specie as $especies )
                                                        <option {{$item->especie_id == $especies->id ? 'selected' : '' }} value="{{$especies->id}}">{{$especies->nombre}}</option>   
                                                            @endforeach
                                                        </select>   
                                                    </div>
                                                    <div class="form-group" style="display:inline-block; width: 300px;">
                                                        <label for="genero">Genero</label>
                                                    <select  name="genero" class="form-control">
                                                            <option {{$item->genero == "Macho" ? 'selected' : '' }} >Macho</option>
                                                            <option {{$item->genero == "Hembra" ? 'selected' : '' }}>Hembra</option> 
                                                        </select>
                                                    </div>
                                                    <div class="form-group" style="display:inline-block; width: 285px;">
                                                        <label for="razas">Raza</label>
                                                        <select name="raza_id" id="input" class="form-control">
                                                            @foreach ($races as $raza)
                                                        <option {{$item->raza_id == $raza->id ? 'selected' : '' }} value="{{$raza->id}}">{{$raza->nombre}}</option>    
                                                            @endforeach
                                                        </select>   
                                                    </div>
                                                    <div class="form-group" style="display:inline-block; width: 280px;">
                                                        <label for="color">Color</label>
                                                        <input type="text" name="color" require class="form-control" value="{{$item->color}}">
                                                    </div>
                                                    <div class="form-group" style="display:inline-block; width: 280px;">
                                                        <label for="talla">Talla</label>
                                                        <input type="text" name="talla" require class="form-control" value="{{$item->talla}}">
                                                    </div>
                                                    <div class="form-group" style="display:inline-block; width: 200px;">
                                                        <label for="peso">Peso (Kg)</label>
                                                        <input type="text" name="peso" require class="form-control" value="{{$item->peso}}">
                                                    </div>
                                                    <div class="form-group" style="display:inline-block; width: 200px;">
                                                        <label for="edad">Edad (Meses)</label>
                                                        <input type="text" name="edad" require class="form-control" value="{{$item->edad}}">
                                                    </div>                                                    
                                                    <div class="form-group" style="display:inline-block; width: 460px;">
                                                        <label for="condicion">Condicion General</label>
                                                        <select name="condicion_id" id="input" class="form-control">
                                                            @foreach ($condicions as $condicion)
                                                        <option {{$item->condicion_id == $condicion->id ? 'selected' : '' }} value="{{$condicion->id}}">{{$condicion->nombre}}</option>     
                                                            @endforeach
                                                        </select>   
                                                    </div>
                                                    <div class="form-group" style="display:inline-block; width: 435px;">
                                                        <label for="actitud_general">Actitud General</label>
                                                        <select name="actitud_id" id="input" class="form-control">
                                                            @foreach ($actitudes as $actitud)
                                                        <option {{$item->actitud_id == $actitud->id ? 'selected' : '' }} value="{{$actitud->id}}">{{$actitud->nombre}}</option>     
                                                            @endforeach
                                                        </select>   
                                                    </div>
                                                    <div class="form-group" style="display:inline-block; width: 300px;">
                                                        <label for="estado">Estado</label>
                                                    <select  name="estado" class="form-control">
                                                            <option {{$item->estado == "Bueno" ? 'selected' : '' }} >Bueno</option>
                                                            <option {{$item->estado == "Regular" ? 'selected' : '' }}>Regular</option> 
                                                            <option {{$item->estado == "Malo" ? 'selected' : '' }}>Malo</option> 
                                                        </select>
                                                    </div>                                                   
                                                    <div class="form-group">
                                                        <label for="señales_particulares">Señales Particulares</label>
                                                        <textarea class="form-control" name="señales_particulares" rows="3" >{{$item->señales_particulares}}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="motivo_ingreso_anamnesis">Motivo de Ingreso Anamnesis</label>
                                                        <textarea class="form-control" name="motivo_ingreso_anamnesis" rows="3" >{{$item->motivo_ingreso_anamnesis}}</textarea>
                                                    </div> 
                                                    <div class="form-group" style="display:inline-block; width: 300px;">
                                                        <label for="disponibilidad">En Adopcion</label>
                                                        <select  name="disponibilidad" class="form-control">
                                                            <option {{$item->disponibilidad == "Disponible" ? 'selected' : '' }} >Disponible</option>
                                                            <option {{$item->disponibilidad == "No Disponible" ? 'selected' : '' }}>No Disponible</option> 
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="imagen">Imagen</label>
                                                        <input type="file" name="imagen" id="imagen" require class="form-control">
                                                        
                                                        <div class="mt-4">
                                                            <p>Imagen Actual<p>
                                                            <img src="/storage/{{$item->imagen}}" style="width: 300px">
                                                        </div>
                                                    </div>                                                 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                                     
                            <div class="justify-content-end">
                                <input type="submit" value="Guardar Cambios" class="btn btn-success">
                            </div> 
                        </form>              
                </div>
            </div>
        </div>
    </div>
@endsection


