<?php

namespace App\Http\Controllers;

use App\Models\Raza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RazaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except'=> 'show']);
        $this->middleware(['can:mostrar mantenimiento']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */    
    public function index()
    {
        $races = Raza::paginate(6);
        return view ('razas.index', compact('races'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('razas.create');
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
            'nombre'=> 'Required',            
        ]);

        DB::table('razas')->insert([
            'nombre' => $data['nombre'],
        ]);

        return redirect('/razas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Raza  $raza
     * @return \Illuminate\Http\Response
     */
    public function show(Raza $raza)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Raza  $raza
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $races = Raza::findOrFail($id);

        return view('razas.edit', compact('races'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Raza  $raza
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $races = Raza::findOrFail($id);
       
        $races->nombre =$request->nombre;
        
        $races->save();

        return redirect('/razas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Raza  $raza
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $races = Raza::findOrFail($id);

        //Eliminar raza
        if ($races->delete()){
            return redirect('/razas');
        }
        else
        {
            return response() ->json([
                'mensaje' => 'Error al eliminar raza'
            ]);
        }
    }
}
