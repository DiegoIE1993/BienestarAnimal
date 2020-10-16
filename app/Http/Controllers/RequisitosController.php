<?php

namespace App\Http\Controllers;

use App\Models\Requisitos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RequisitosController extends Controller
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
        $req = Requisitos::all(); 
        return view ('requisitos.index', compact('req'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('requisitos.create');
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
            'descripcion'=> 'Required',            
        ]);

        DB::table('requisitos')->insert([
            'descripcion' => $data['descripcion'],
        ]);

        return redirect('/requisitos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoEntrada  $tipoEntrada
     * @return \Illuminate\Http\Response
     */
    public function show(requisitos $requisitos)
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
        $req = Requisitos::findOrFail($id);

        return view('requisitos.edit', compact('req'));
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
        $req = Requisitos::findOrFail($id);
       
        $req->descripcion =$request->descripcion;
        
        $req->save();

        return redirect('/requisitos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoEntrada  $tipoEntrada
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $req = Requisitos::findOrFail($id);

        //Eliminar Tipo Entrada
        if ($req->delete()){
            return redirect('/requisitos');
        }
        else
        {
            return response() ->json([
                'mensaje' => 'Error al eliminar tipo de entrada'
            ]);
        }
    }
}
