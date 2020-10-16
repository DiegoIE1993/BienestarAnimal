<?php

namespace App\Http\Controllers;

use App\Models\CondicionGeneral;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CondicionGeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $condicion = CondicionGeneral::all(); // condicion variable que va a ser igual al controller Razas
        return view ('condiciongeneral.index', compact('condicion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('condiciongeneral.create');
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

        DB::table('condicion_generals')->insert([
            'nombre' => $data['nombre'],
        ]);

        return redirect('/condiciongeneral');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CondicionGeneral  $condicionGeneral
     * @return \Illuminate\Http\Response
     */
    public function show(CondicionGeneral $condicionGeneral)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CondicionGeneral  $condicionGeneral
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $condicion = CondicionGeneral::findOrFail($id);

        return view('condiciongeneral.edit', compact('condicion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CondicionGeneral  $condicionGeneral
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $condicion = CondicionGeneral::findOrFail($id);
       
        $condicion->nombre =$request->nombre;
        
        $condicion->save();

        return redirect('/condiciongeneral');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CondicionGeneral  $condicionGeneral
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $condicion = CondicionGeneral::findOrFail($id);

        //Eliminar Condicion General
        if ($condicion->delete()){
            return redirect('/condiciongeneral');
        }
        else
        {
            return response() ->json([
                'mensaje' => 'Error al eliminar condicion general'
            ]);
        }
    }
}
