<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LineasInv extends Model
{   
    // Tabla de base de datos
    protected $table = 'lineas_investigacion';
    use HasFactory;

    public static function getAllAreas(){
        return LineasInv::select('id','titulo','icono')->get();
    }

    public static function getLineaInvestigacion($id){
        return LineasInv::find($id);
    }

    public static function getObjetivosLinea($id){
        
    }
}
