@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Nosotros</div>

                    <div class="card-body">
                        <div class="row justify-content-end pb-2">
                            <a href="{{url('/nosotros/create')}}" class="btn btn-success">Agregar Informacion</a>
                        </div>
                    <table class="table">
                            <thead>
                                <th>Titulo</th>
                                <th>Mision</th>
                                <th>Vision</th>
                                <th>Horarios de Atencion</th>
                                <th>Acciones</th>
                            </thead>
                            <tbody>
                                @foreach ($info ?? '' as $nosotros)
                                    <tr>
                                        <td>{{$nosotros->titulo }}</td>
                                        <td>{{$nosotros->mision }}</td>
                                        <td>{{$nosotros->vision }}</td>
                                        <td>{{$nosotros->horario }}</td>
                                        <td>
                                            <a href="{{ url('/nosotros/'.$nosotros->id.'/edit')}}" class="btn btn-primary">Editar</a>
                                            @include('nosotros.delete', ['nosotros' => $nosotros])
                                            
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