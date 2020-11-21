<?php

namespace App\Http\Controllers;

use App\Models\TipoEntrada;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TipoEntradaController extends Controller
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
        $entradas = TipoEntrada::paginate(6); // entradas variable que va a ser igual al controller TipoEntrada
        return view ('tipoentrada.index', compact('entradas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('tipoentrada.create');
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

        DB::table('tipo_entradas')->insert([
            'nombre' => $data['nombre'],
        ]);

        return redirect('/tipoentrada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoEntrada  $tipoEntrada
     * @return \Illuminate\Http\Response
     */
    public function show(TipoEntrada $tipoEntrada)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoEntrada  $tipoEntrada
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $entradas = TipoEntrada::findOrFail($id);

        return view('tipoentrada.edit', compact('entradas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoEntrada  $tipoEntrada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $entradas = TipoEntrada::findOrFail($id);
       
        $entradas->nombre =$request->nombre;
        
        $entradas->save();

        return redirect('/tipoentrada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoEntrada  $tipoEntrada
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entradas = TipoEntrada::findOrFail($id);

        //Eliminar Tipo Entrada
        if ($entradas->delete()){
            return redirect('/tipoentrada');
        }
        else
        {
            return response() ->json([
                'mensaje' => 'Error al eliminar tipo de entrada'
            ]);
        }
    }
}
