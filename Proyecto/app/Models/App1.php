<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App1 extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'correo',
        'imagen',
        'descripcion',
        'departamentos_id',
    ];

    //RELACION OBTENER LA INFORMACION DE LA CATEGORIA MEDIANTE LA CLAVE FORANEA
    //HACER LA RELACION 
    public function DepartamentosApp1(){
        return $this->belongsTo(App2::class,'departamentos_id');
    }

    //RELACION OBTENER LA INFO DEL USUARIO QUE CREO LA RECETA 
    public function autoApp1(){
        
        return $this->belongsTo(User::class,'user_id');
    }
}
