@extends('adminlte::page')

@section('content')
<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 </head>
 <body>     

      <table>
         <td>
            <div class="imagen-animal">
              <div class="/storage/{{ $solicitud ?? ''->documentos}}"></div>
               
            </div>
         </td>
         
      </table>
    <a href="/registrarmascota" class="btn btn-primary">Atras</a>
    
 </body>
</html>
@endsection 