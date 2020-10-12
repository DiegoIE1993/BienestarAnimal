<?php

namespace App\Http\Controllers;

use App\Models\PielNormal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PielNormalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $piel = PielNormal::all(); // piel variable que va a ser igual al controller TipoEntrada
        return view ('pielnormal.index', compact('piel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pielnormal.create');
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

        DB::table('piel_normals')->insert([
            'nombre' => $data['nombre'],
        ]);

        return redirect('/pielnormal');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PielNormal  $pielNormal
     * @return \Illuminate\Http\Response
     */
    public function show(PielNormal $pielNormal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PielNormal  $pielNormal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $piel = PielNormal::findOrFail($id);

        return view('pielnormal.edit', compact('piel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PielNormal  $pielNormal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $piel = PielNormal::findOrFail($id);
       
        $piel->nombre =$request->nombre;
        
        $piel->save();

        return redirect('/pielnormal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PielNormal  $pielNormal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $piel = PielNormal::findOrFail($id);

        //Eliminar Tipo Entrada
        if ($piel->delete()){
            return redirect('/pielnormal');
        }
        else
        {
            return response() ->json([
                'mensaje' => 'Error al eliminar tipo de piel'
            ]);
        }
    }
}
