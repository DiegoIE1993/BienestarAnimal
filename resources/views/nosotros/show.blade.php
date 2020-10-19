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
    {{-- <script src="{{ asset('js/custom.js')}}"></script> --}}
    
</head>

<body>
    <div class="container">

        <header class="site-header inicio">
            <!-- Just an image -->
            <nav class="navbar navbar-light bg-light navbar-expand-md sticky-top">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('Imagenes/logo.png')}}" alt="">
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <div class="navbar-nav ml-auto text-center">
                        <a class="nav-link active" href="#">Inicio <span class="sr-only">(current)</span></a>
                        <a class="nav-link" href="{{url('educacion/show')}}">Educacion</a>
                        <a class="nav-link" href="{{url('nosotros/show')}}">Nosotros</a>
                        <a class="nav-link" href="#"></a>
                    </div>
                </div>
            </nav>
        </header>
        
        <section class="fw-300 centrar-texto">
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
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('slides/2.jpg')}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('slides/3.jpg')}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
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
              
        <section class="nosotros">   
          <div id='nosotros' class="container-nosotros">
            <div class="container nosotros">
                    @foreach ($info ?? '' as $nosotros)           
                        <div class="col-md-16">
                           <div class="card">
                              <div class="card-body">
                                 <div>
                                    <h1> {{$nosotros->titulo}} </h1>
                                 </div>
                                 <div>
                                    <h2>Misión</h2>
                                    <p>{{$nosotros->mision}}</p> 
                                 </div>       
                                 <div>
                                    <h1>Visión</h1>
                                    <p>{{$nosotros->vision}}</p>
                                 </div>
                                 <div>
                                    <h2>Horarios</h2>
                                    <p>{{$nosotros->horario}}</p>
                                 </div>       
                                 <div>
                                    <h2>Contactos</h2>
                                    <p>{{$nosotros->contacto}}</p>
                                 </div>      
                              </div>
                           </div>
                        </div>  
                    @endforeach   
             </div>
          </div>
        </section> 
        <footer>

        </footer>
    </div>   
        
 
</body>

</html>

