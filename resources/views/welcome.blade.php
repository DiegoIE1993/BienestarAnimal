<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bienestar Animal</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
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
                    <a class="nav-link active" href="/">Inicio <span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="{{url('animalesadopcion/show')}}">Adopción</a>
                    <a class="nav-link" href="{{url('educacion/show')}}">Educacion</a>
                    <a class="nav-link" href="{{url('nosotros/show')}}">Nosotros</a>
                    <a class="nav-link" href="{{url('eventos/show')}}">Eventos</a>
                    <a class="nav-link" href="#"></a>
                </div>
            </div>
        </nav>
    </header>

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
            </div>
        </section>

        <section>
            <div class="container">
                
                <div class="img-evento">
                    <h1>Próximos Eventos</h1>
                    <div class="row row-cols-3"> 
                        @foreach ($events as $eventos)     
                            <div class="evento">
                                <div class="card">
                                    <div>
                                        <img width="200" height="200" src="{{asset('Imagenes/calendario.png')}}" alt="">
                                    </div>
                                    <div>
                                        <h2> {{$eventos->titulo}} </h2>
                                    </div>
                                    <div>
                                        <p>{{$eventos->descripcion}}</p> 
                                    </div>       
                                    <div>
                                        <p>Fecha: {{$eventos->fecha_hora}}</p>
                                    </div> 
                                </div>   
                            </div>  
                        @endforeach  
                    </div>
                </div>
                
            </div>
        </section>
       
        
        <section class="imagen-requisitos">
            <div class="container container-requisitos ">
                <h2>Requisitos de adopción</h2>
                <li>Fotocopia de la Cedula</li>
                <li>Fotocopia de Factura de Luz o Agua</li>
                <li>Carta Laboral</li> 
                <a href="{{url('nosotros/show')}}" class="boton boton-nosotros">Mas Sobre Nosotros</a>
                <p>Todos los animales salen de la UPA esterilizados, desparacitados y con la vacuna de la rabia.</p>
            </div>
        </section>
        
        {{-- // Seccion de adopcion de animales que redirige al principal de adopcion// --}}
        <section> 
              
            <div class="container">
                <h1 align='center'>Adopta un Amigo</h1>
               <div class="row row-cols-3">
                  @foreach ($registro as $adopcion)           
                      <div class="mascota">
                        <p><img class="zoom" src="/storage/{{ $adopcion->imagen}}" height="400" /></p>
                      </div>                  
                  @endforeach   

                </div>  
                <div>
                    <a href="{{url('animalesadopcion/show')}}" class="boton boton-adopcion">Ver Todos</a>
                </div>
                
            </div>
        </section>
        
        <section class="container">   
            <div class="col">
                <div>
                    <h1>Contáctanos</h1>
                </div>
                <div>
                    <h5>Vía a la Linda, contiguo al hospital geriátrico San Isidro Manizales</h5>
                </div>
                <div>
                    <h3>Teléfono Unidad de Protección Animal:</h3> 
                    <h5> 318 358 6247 – 8703150</h5>                                   
                </div>
                <div>
                    <h3>Grupo de Atención y Rescate Animal:</h3> 
                    <h5>3104020002</h5>                                   
                </div>
                <div>
                    <h3>Nuestros Aliados</h3>
                    <img src="{{asset('Imagenes/gara.png')}}" alt="" >
                </div>

                <div>
                    <img width="450" height="350" src="{{asset('Imagenes/ubicacion.png')}}" alt="">
                </div>
            </div>   
        
        </section>   

        
          
        
        <footer align='center'>
            
            <p>Copyright &copy; Unidad de Proteccion Animal, todos los derechos reservados.</p>
        </footer>    
 
</body>

</html>