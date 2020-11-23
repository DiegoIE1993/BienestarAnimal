<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Raza;
use App\Models\Especies;
use App\Models\TipoEntrada;
use Carbon\Traits\Timestamp;
use Illuminate\Http\Request;
use App\Models\ActitudGeneral;
use App\Models\CondicionGeneral;
use App\Models\RegistrarMascota;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;


class RegistrarMascotaController extends Controller
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
        $registro = RegistrarMascota::paginate(6);
        return view('registrarmascota.index', compact('registro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $registro = RegistrarMascota::all();
        $entradas = TipoEntrada::all();
        $specie = Especies::all();
        $races = Raza::all();
        $condicions = CondicionGeneral::all();
        $actitudes = ActitudGeneral::all();
        return view('registrarmascota.create', compact('registro','entradas','specie','races','condicions','actitudes'));
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
          
        'tipo_entrada_id' => 'Required',
        'codigo_animal' => 'Required',
        'nombre_ciudadano'=> 'Required',
        'direccion' => 'Required',
        'cedula' => 'Required',
        'telefono' => 'Required',
        'correo' => 'Required',
        'nombre_ejemplar' => 'Required',
        'genero' => 'Required',
        'especie_id' => 'Required',
        'raza_id' => 'Required',
        'color' => 'Required',
        'talla' => 'Required',
        'peso' => 'Required',
        'edad' => 'Required',
        'condicion_id' => 'Required',
        'actitud_id' => 'Required',
        'estado' => 'Required',
        'señales_particulares' => 'Required',
        'motivo_ingreso_anamnesis' => 'Required',
        'imagen' => 'Required|image',
        'disponibilidad' => 'Required',
         ]);

         $fecha_actual = Carbon::now();
        //obtener la ruta de imagen
         $ruta_imagen = $request['imagen']->store('upload-animales', 'public');
         $img  = Image::make( public_path("storage/{$ruta_imagen}"))->fit(500, 600);
         $img->save();
         

        DB::table('registrar_mascotas')->insert([
        'tipo_entrada_id' => $data['tipo_entrada_id'],
        'fecha' => $fecha_actual,
        'codigo_animal' => $data['codigo_animal'], 
        'nombre_ciudadano' => $data['nombre_ciudadano'],
        'direccion' => $data['direccion'],
        'cedula' => $data['cedula'],
        'telefono' => $data['telefono'],
        'correo' => $data['correo'],
        'nombre_ejemplar' => $data['nombre_ejemplar'],
        'genero' => $data['genero'],
        'especie_id' => $data['especie_id'],
        'raza_id' => $data['raza_id'],
        'color' => $data['color'],
        'talla' => $data['talla'],
        'peso' => $data['peso'],
        'edad' => $data['edad'],
        'condicion_id' => $data['condicion_id'],
        'actitud_id' => $data['actitud_id'],
        'estado' => $data['estado'],
        'señales_particulares' => $data['señales_particulares'],
        'motivo_ingreso_anamnesis' => $data['motivo_ingreso_anamnesis'],
        'imagen' => $ruta_imagen,
        'disponibilidad' => $data['disponibilidad'],    
        ]);

        return redirect('/registrarmascota');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RegistrarMascota  $registrarMascota
     * @return \Illuminate\Http\Response
     */
    public function show($codigo_animal)
    {
        $item = RegistrarMascota::findOrFail($codigo_animal);

        return view('registrarmascota.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RegistrarMascota  $registrarMascota
     * @return \Illuminate\Http\Response
     */
    public function edit($codigo_animal)
    {
        $item = RegistrarMascota::findOrFail($codigo_animal);
        $entradas = TipoEntrada::all();
        $specie = Especies::all();
        $races = Raza::all();
        $condicions = CondicionGeneral::all();
        $actitudes = ActitudGeneral::all();
        return view('registrarmascota.edit', compact('item','entradas','specie','races','condicions','actitudes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RegistrarMascota  $registrarMascota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $codigo_animal)
    {
        $data = request()->validate([
          
            'tipo_entrada_id' => 'Required',
            'codigo_animal' => 'Required',
            'nombre_ciudadano'=> 'Required',
            'direccion' => 'Required',
            'cedula' => 'Required',
            'telefono' => 'Required',
            'correo' => 'Required',
            'nombre_ejemplar' => 'Required',
            'genero' => 'Required',
            'especie_id' => 'Required',
            'raza_id' => 'Required',
            'color' => 'Required',
            'talla' => 'Required',
            'peso' => 'Required',
            'edad' => 'Required',
            'condicion_id' => 'Required',
            'actitud_id' => 'Required',
            'estado' => 'Required',
            'señales_particulares' => 'Required',
            'motivo_ingreso_anamnesis' => 'Required',
            'imagen' => 'Required|image',
            'disponibilidad' => 'Required',
             ]);

        $item = RegistrarMascota::findOrFail($codigo_animal);
        $item->tipo_entrada_id =$request->tipo_entrada_id;
        $item->nombre_ciudadano =$request->nombre_ciudadano;
        $item->direccion =$request->direccion;
        $item->cedula =$request->cedula;
        $item->telefono =$request->telefono;
        $item->correo =$request->correo;
        $item->nombre_ejemplar =$request->nombre_ejemplar;
        $item->genero =$request->genero;
        $item->especie_id =$request->especie_id;
        $item->raza_id =$request->raza_id;
        $item->color =$request->color;
        $item->talla =$request->talla;
        $item->peso =$request->peso;
        $item->edad =$request->edad;
        $item->condicion_id =$request->condicion_id;
        $item->actitud_id =$request->actitud_id;
        $item->estado =$request->estado;
        $item->señales_particulares =$request->señales_particulares;
        $item->motivo_ingreso_anamnesis =$request->motivo_ingreso_anamnesis;
        $item->disponibilidad =$request->disponibilidad;

        // Si el usuario quiere cambiar la imagen 
        if(request('imagen')){
            // Obtener la ruta de la imagen
        $ruta_imagen = $request['imagen']->store('upload-animales', 'public');
        $img  = Image::make( public_path("storage/{$ruta_imagen}"))->fit(1000, 550);
        $img->save();

         // Asignar al objeto 
         $item->imagen = $request->$ruta_imagen;
        }
        
        $item->save();

        return redirect('/registrarmascota');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RegistrarMascota  $registrarMascota
     * @return \Illuminate\Http\Response
     */
    public function destroy($codigo_animal)
    {
        $item = RegistrarMascota::findOrFail($codigo_animal);

        //Eliminar el usuario
        if ($item->delete()){
            return redirect('/registrarmascota');
        }
        else
        {
            return response() ->json([
                'mensaje' => 'Error al eliminar la informacion'
            ]);
        }
    }
}
