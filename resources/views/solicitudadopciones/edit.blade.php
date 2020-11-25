@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Editar Estado de Solicitud
                    </div>
                    <div class="card-body">
                        
                        <form action="{{ route('solicitudadopciones.update', $solicitud->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div>
                              <div class="form-group">
                                  <label for="nombre">Nombre y Apellidos</label>
                                  <input type="text" name="nombre" class="form-control" value="{{$solicitud->nombre}}" readonly=»disabled>
                              </div>
                              <div class="form-group">
                                  <label for="cedula">Cédula</label>
                                  <input type="number" name="cedula" class="form-control" value="{{$solicitud->cedula}}" readonly=»disabled>
                              </div>
                              <div class="form-group">
                                  <label for="telefono">Telefono</label>
                                  <input type="text" name="telefono" class="form-control" value="{{$solicitud->telefono}}" readonly=»disabled>
                              </div>
                              <div class="form-group">
                                  <label for="direccion">Dirección</label>
                                  <input type="text" name="direccion" class="form-control" value="{{$solicitud->direccion}}" readonly=»disabled>
                              </div>
                              <div class="form-group">
                                  <label for="email">Correo</label>
                                  <input type="email" name="correo" require class="form-control" value="{{$solicitud->correo}}" readonly=»disabled>
                              </div> 
                              <div class="form-group">
                                    <label for="estado_solicitud">Estado de Ingreso</label>
                                    <select  name="estado_solicitud" class="form-control">
                                        <option {{$solicitud->estado_solicitud == "Aceptado" ? 'selected' : '' }} >Aceptado</option>
                                        <option {{$solicitud->estado_solicitud == "Verificacion" ? 'selected' : '' }}>Verificacion</option> 
                                        <option {{$solicitud->estado_solicitud == "Rechazado" ? 'selected' : '' }}>Rechazado</option> 
                                    </select>    
                              </div>
                            
                            <div class="justify-content-end">
                                <a href="/solicitudadopciones" class="btn btn-primary">Atras</a>
                                <input type="submit" value="Guardar" class="btn btn-success">

                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection