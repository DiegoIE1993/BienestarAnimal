@extends('adminlte::page')

@section('content')
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
      <div>
         <table>
            @foreach ($educations as $edu)
            <td>               
               <h1> {{$edu->titulo}} </h1>
                  
            </td>
            <td>
               <div>
                  <iframe width="560" height="315" src="{{$edu->video}}"
                     frameborder="0" allow="autoply; encrypted-media" allowfullscreen>
                 </iframe>
               </div>
            </td>
            
                
            @endforeach
         </table>
         
      </div>
   </body>
</html>
@endsection 