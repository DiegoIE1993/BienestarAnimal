@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Listado de Requisitos</div>

                        <div class="card-body">
                            <div class="row justify-content-end pb-2">
                                @if(count($req) == 0 )
                                    <a href="{{url('/requisitos/create')}}" class="btn btn-success">Agregar Requisitos</a>
                                @endif
                        </div>
                            <table class="table">
                                <thead>
                                    <th >Requisitos</th>
                                    <th >Acciones</th>
                                </thead>

                                <tbody>
                                    @foreach ($req as $requisito)
                                            <tr>
                                                <td> {{$requisito->descripcion}}</td>  
                                                <td>
                                                    <a href="{{ url('/requisitos/'.$requisito->id.'/edit')}}" class="btn btn-primary">Editar</a>
                                                    @include('requisitos.delete', ['requisito' => $requisito])  
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
    </div>
    
@endsection