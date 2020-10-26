@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Educacion</div>

                    <div class="card-body">
                        <div class="row justify-content-end pb-2">
                             <a href="{{url('/educacion/create')}}" class="btn btn-success">Agregar </a>
                             <table class="table">
                                <thead>
                                    <th>Titulo</th>
                                    <th>Url Video</th>
                                    <th>Acciones</th>
                                </thead>
                        
                                <tbody>
                                    @foreach ($educations as $educacion)
                                        <tr>
                                            <td> {{$educacion->titulo}}</td>
                                            <td> {{$educacion->video}}</td>                                         
                                            <td>
                                                <a href="{{ url('/educacion/'.$educacion->id.'/edit')}}" class="btn btn-primary">Editar</a>
                                                @include('educacion.delete', ['educacion' => $educacion]) 
                                                
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