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
                        </div>
                            <table class="table">
                                <thead>
                                    
                                </thead>
                        
                                <tbody>
                                   
                                </tbody>
                            </table>
                    </div>
                </div>

            </div>
            
        </div>
    </div>
    
@endsection