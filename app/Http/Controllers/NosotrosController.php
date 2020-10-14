<?php

namespace App\Http\Controllers;

use App\Models\Nosotros;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Contracts\Service\Attribute\Required;

class NosotrosController extends Controller
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
        $info = Nosotros::all();
        return view('nosotros.index', compact('info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nosotros.create');
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
            'mision' => 'Required',
            'vision' => 'Required',
            'horario' => 'required'
        ]);

        DB::table('nosotros')->insert([
            'titulo' => $data['titulo'],
            'mision' => $data['mision'],
            'vision' => $data['vision'],
            'horario' => $data['horario'],
        ]);

        return redirect('/nosotros');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nosotros  $nosotros
     * @return \Illuminate\Http\Response
     */
    public function show(Nosotros $nosotros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nosotros  $nosotros
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nosotros = Nosotros::findOrFail($id);

        return view('nosotros.edit', compact('nosotros'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nosotros  $nosotros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nosotros = Nosotros::findOrFail($id);
        $nosotros->titulo =$request->titulo;
        $nosotros->mision =$request->mision;
        $nosotros->vision =$request->vision;
        $nosotros->horario =$request->horario;
        
        $nosotros->save();

        return redirect('/nosotros');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nosotros  $nosotros
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nosotros = Nosotros::findOrFail($id);

        //Eliminar el usuario
        if ($nosotros->delete()){
            return redirect('/nosotros');
        }
        else
        {
            return response() ->json([
                'mensaje' => 'Error al eliminar la informacion'
            ]);
        }
    }
}
