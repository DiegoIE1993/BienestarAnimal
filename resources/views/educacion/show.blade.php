{{-- @extends('adminlte::page')

@section('content') --}}
<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      
   </head>
   {{-- <body>
      <div class="row justify-content-center">
         <h1> {{$educations->titulo}} </h1>
      </div>
      <div class="row justify-content-center">
         <iframe width="560" height="315" src="{{$educations->video}}"
             frameborder="0" allow="autoply; encrypted-media" allowfullscreen>
         </iframe>
      </div>
      <a href="/educacion" class="btn btn-primary">Atras</a>
   </body> --}}
   <body>
      <div class="container videos-educativos">
         <div class="row">
         
            @foreach ($educations as $edu)
                         
               <div class="col-md-4">
                  <div class="card">
                     <div class="card-body">
                        <h1> {{$edu->titulo}} </h1>
                     
                     
                        <iframe width="280" height="315" src="{{$edu->video}}"
                           frameborder="0" allow="autoply; encrypted-media" allowfullscreen>
                       </iframe>
                     </div>
                  </div>
                  
          
               
                  

               </div>
               
            
                
            @endforeach
       
         
      </div>
      </div>
   </body>
</html>
{{-- @endsection  --}}