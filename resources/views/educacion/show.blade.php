@extends('layouts.app')

@section('content')
<!DOCTYPE html>
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
@endsection 