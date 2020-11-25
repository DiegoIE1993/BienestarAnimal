<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalles extends Model
{
    use HasFactory;
    protected $primaryKey = 'codigo_animal';
    protected $fillable = [
        // 'id','fecha','nombre','cedula','telefono','direccion','correo','fecha','fecha','fecha','fecha'
    ];

    public function registro(){
        return $this->belongsTo(RegistrarMascota::class);
    }
}
