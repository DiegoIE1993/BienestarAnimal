@extends('adminlte::page')

@section('content')
<div class="card-body">
    <div class="row justify-content-end pb-2">
        <a href="{{url('/registrarmascota/create')}}" class="btn btn-success">Nuevo Registro</a>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-30">
                <div class="card">
                    <div class="card-header">Historia Clinica</div>

                    
                    <table class="table">
                            <thead>
                                <th>Tipo de Entrada</th>
                                <th>Nombres Ciudadano</th>
                                <th>Direccion</th>
                                <th>Telefono</th>
                                <th>Correo</th>
                                <th>Nombre Especie</th>
                                <th>Raza</th>
                                <th>Genero</th>
                                <th>Color</th>
                                <th>Talla</th>
                                <th>Peso</th>
                                <th>Edad</th>
                                <th>Señales Particulares</th>
                                <th>Estado de Ingreso</th>
                                <th>Condicion General</th>
                                <th>Actitud General</th>
                                <th>Motivo Ingreso Anamnesis</th>

                            </thead>
                           <tbody>
                                @foreach ($registro as $item)
                                    <tr>
                                        <td>{{$item->nombres }}</td>
                                        
                                      <td>
                                            <a href="{{ url('/usuarios/'.$usuario->id.'/edit')}}" class="btn btn-primary">Editar</a>
                                            @include('usuarios.delete', ['usuario' => $usuario])
                                            
                                        </td>
                                    </tr>
                                @endforeach
                                
                            </tbody> 
                        </table>

                    </div>
                        

                </div>

            </div>
            
        </div>
    </div>
    
@endsection