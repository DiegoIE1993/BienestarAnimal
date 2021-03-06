<?php

namespace App\Http\Controllers;

use App\Models\Eventos;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except'=> 'show']);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $events = Eventos::all();
        return view('eventos.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('eventos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
        'titulo'=> 'Required',
        'descripcion' => 'Required',
        'fecha_hora' => 'Required',
    ]);

    DB::table('eventos')->insert([
        'titulo' => $data['titulo'],
        'descripcion' => $data['descripcion'],
        'fecha_hora' => $data['fecha_hora'],
        
    ]);

    return redirect('/eventos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function show()
    { 
        $events = Eventos::all();

        return view('eventos.show', compact('events'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $events = Eventos::findOrFail($id);

        return view('eventos.edit', compact('events'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $eventos = Eventos::findOrFail($id);
      $eventos->titulo =$request->titulo;
      $eventos->descripcion =$request->descripcion;
      $eventos->fecha_hora =$request->fecha_hora;
      
      $eventos->save();

      return redirect('/eventos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $eventos = Eventos::findOrFail($id);

      //Eliminar el usuario
      if ($eventos->delete($id)){
          return redirect('/eventos');
      }
      else
      {
          return response() ->json([
              'mensaje' => 'Error al eliminar la informacion'
          ]);
      }
    }
}
