<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitudAdopciones extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre', 'cedula', 'telefono', 'direccion','correo','documentos',
    ];
    public function adopciones(){
        return $this->belongsToMany(RegistrarMascota::class);
    }
}
