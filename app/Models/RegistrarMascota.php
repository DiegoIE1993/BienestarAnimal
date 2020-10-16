<?php

namespace App\Models;

use App\Models\TipoEntrada;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RegistrarMascota extends Model
{
    use HasFactory;

    protected $fillable = [
        'feha','tipo_entrada_id','codigo_animal','nombre_ciudadano','direccion','cedula','telefono','correo','nombre_ejemplar','genero','especie_id','raza_id','color','talla','peso','edad','condicion_id','actitud_id','estado','señales_paticulares','motivo_ingreso_anamnesis',
        
    ];
    const UPDATED_AT = null;
    //Relacion tipo entrada con registrar mascota
    public function tipo_entrada(){
        return $this->belongsTo(TipoEntrada::class);
    }
    public function especie(){
        return $this->belongsTo(Especies::class);
    }
    public function raza(){
        return $this->belongsTo(Raza::class);
    }
    public function condicion(){
        return $this->belongsTo(CondicionGeneral::class);
    }
    public function actitud(){
        return $this->belongsTo(ActitudGeneral::class);
    }
}
