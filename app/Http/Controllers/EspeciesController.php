<?php

namespace App\Http\Controllers;

use App\Models\Especies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EspeciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $species = Especies::all(); // species variable que va a ser igual al controller Especies
        return view ('especies.index', compact('species'));
        //return view('especies.')
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('especies.create');
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

        DB::table('especies')->insert([
            'nombre' => $data['nombre'],
           
        ]);

        return redirect('/especies');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Especies  $especies
     * @return \Illuminate\Http\Response
     */
    public function show(Especies $especies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Especies  $especies
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $especies = Especies::findOrFail($id);

        return view('especies.edit', compact('especies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Especies  $especies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $especies = Especies::findOrFail($id);
       
        $especies->nombre =$request->nombre;
        
        $especies->save();

        return redirect('/especies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Especies  $especies
     * @return \Illuminate\Http\Response
     */
    public function destroy(Especies $especies)
    {
        //
    }
}
