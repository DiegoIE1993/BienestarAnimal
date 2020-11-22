@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Crear Informacion
                    </div>
                    <div class="card-body">
                        
                        <form action="{{ route('nosotros.store')}}" method="post" novalidate>
                            @csrf
                            <div class="form-group">
                                <label for="titulo">Titulo</label>
                                <input type="text" name="titulo" require class="form-control @error('titulo') is-invalid @enderror" value="{{old('titulo')}}">
                                @error('titulo')
                                    <span class="invalid-feedback d-block" role="alert">    
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="mision">Mision</label>
                                <textarea class="form-control @error('mision') is-invalid @enderror" name="mision" rows="4">{{old('mision')}}</textarea>
                                @error('mision')
                                    <span class="invalid-feedback d-block" role="alert">    
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="vision">Vision</label>
                                <textarea class="form-control @error('vision') is-invalid @enderror" name="vision" rows="4">{{old('vision')}}</textarea>
                                @error('vision')
                                    <span class="invalid-feedback d-block" role="alert">    
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="horario">Horarios de Atencion</label>
                                <input type="text" name="horario" require class="form-control @error('horario') is-invalid @enderror" value="{{old('horario')}}">
                                @error('horario')
                                    <span class="invalid-feedback d-block" role="alert">    
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="contacto">Contacto</label>
                                <input type="text" name="contacto" require class="form-control @error('contacto') is-invalid @enderror" value="{{old('contacto')}}">
                                @error('contacto')
                                    <span class="invalid-feedback d-block" role="alert">    
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="justify-content-end">
                                <a href="/nosotros" class="btn btn-primary">Atras</a>
                                <input type="submit" value="Enviar" class="btn btn-success"
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection