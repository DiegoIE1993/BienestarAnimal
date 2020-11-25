<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    {{-- <script src="{{ asset('js/custom.js')}}"></script> --}}
    <link rel="stylesheet" href="{!! asset('css/estilos.css') !!}">
    
</head>

<body>

        <header class="site-header inicio">
            <!-- Just an image -->
            <nav class="navbar navbar-light bg-light navbar-expand-md sticky-top">
                <a class="navbar-brand" href="/">
                    <img src="{{asset('Imagenes/logo.png')}}" alt="">
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <div class="navbar-nav ml-auto text-center">
                     <div class="navbar-nav ml-auto text-center">
                        <a class="nav-link accent-blue " href="/">Inicio <span class="sr-only">(current)</span></a>
                        <a class="nav-link" href="{{url('animalesadopcion/show')}}">Adopción</a>
                        <a class="nav-link" href="{{url('educacion/show')}}">Educacion</a>
                        <a class="nav-link" href="{{url('nosotros/show')}}">Nosotros</a>
                        <a class="nav-link" href="{{url('eventos/show')}}">Eventos</a>
                        <a class="nav-link" href="#"></a>
                    </div>
                    </div>
                </div>
            </nav>
        </header>
     <div>
        <section>
            <div class="row-fluid">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('slides/uno.jpg')}}" class="d-block w-100" alt="...">
                            
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('slides/2.jpg')}}" class="d-block w-100" alt="...">
                            
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('slides/3.jpg')}}" class="d-block w-100" alt="...">
                           
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
        </section>
            
        <main class="seccion container">   
            <div>
                <h1 align='center'>Catalogo Disponible</h1>
                <div class="row row-cols-3">
                    
                    @foreach ($registro as $adopcion)           
                        <div class="mascota">
                            <p><img class="zoom" src="/storage/{{ $adopcion->imagen}}" height="400" href="#adopcion{{$adopcion->codigo_animal}}" data-toggle="modal"/></p>
                                <div class="modal fade" id="adopcion{{$adopcion->codigo_animal}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Solicitud de Adopcion</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <form action="{{ route('solicitudadopciones.store')}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="modal-content"> 
                                                        <ul>
                                                            <img src="/storage/{{ $adopcion->imagen}}" height="200"/>
                                                            <h5>Nombre: {{$adopcion->nombre_ejemplar}} </h5>
                                                            <h5>Especie: {{$adopcion->especie->nombre}}</h5>
                                                            <h5>Raza: {{$adopcion->raza->nombre}}</h5>
                                                            <h5>Sexo: {{$adopcion->genero}}</h5>
                                                            <h5>Edad (Meses): {{$adopcion->edad}}</h5>
                                                        </ul> 
                                                        
                                                        <div>
                                                            <div class="form-group">
                                                                <label for="nombre">Nombre y Apellidos</label>
                                                                <input type="text" name="nombre" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="cedula">Cédula</label>
                                                                <input type="number" name="cedula" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="telefono">Telefono</label>
                                                                <input type="text" name="telefono" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="direccion">Dirección</label>
                                                                <input type="text" name="direccion" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="email">Correo</label>
                                                                <input type="email" name="correo" require class="form-control">
                                                            </div> 
                                                            <div class="form-group">
                                                                <label for="documentos">Elige el Archivo</label>
                                                                <input type="file" name="documentos" require class="form-control">
                                                            </div>   
                                                            <input type="hidden" name="adopcion_id" value="{{$adopcion->codigo_animal}}">
                                                            <input type="hidden" name="nombre_ejemplar_registro" value="{{$adopcion->nombre_ejemplar}}">
                                                            
                                                        </div>  
                                                    </div>             
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Enviar Solicitud</button>
                                                </div>
                                                
                                            </form>  
                                        </div>
                                    </div>
                                </div> 
                            </div>                  
                    @endforeach    
                </div>
            </div> 
            
            
            {{-- @if(count($errors) >0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>      
                    @endforeach
                </ul>        
            </div>
            @endif
            @if(\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{\Session()->get('success')}}</p>
                </div> 
            @endif        --}}
        </main>

     <section>   
      <div class="img">
          <div class="container">
              <div class="container fondo">
                  <div class="col">
                      <div>
                          <h1>Contáctanos</h2>
                      </div>
                      <div>
                          <h5>Vía a la Linda, contiguo al hospital geriátrico San Isidro Manizales</h1>
                      </div>
                      <div>
                          <h4>Teléfono Unidad de Protección Animal:</h4> 
                          <h5> 318 358 6247 – 8703150</h5>                                   
                      </div>
                      <div>
                          <h4>Grupo de Atención y Rescate Animal:</h4> 
                          <h5>3104020002</h5>                                   
                      </div>
                      <div>
                          <h4>Nuestros Aliados</h4>
                          <img src="{{asset('Imagenes/gara.png')}}" alt="" >
                      </div>
                      <div>
                          <img width="450" height="350" src="{{asset('Imagenes/ubicacion.png')}}" alt="">
                      </div> 
                  </div>
              </div>   
          </div>
      </div>
  </section>    
     

        <footer align='center'>
            <p>Copyright &copy; Unidad de Proteccion Animal, todos los derechos reservados.</p>
        </footer> 
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>