<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    use HasFactory;
    //esto es para que nuestro programa pueda hacer bien la referencia
    protected $table = 'especialidades'; //nombre de la tabla
    protected $primaryKey = 'id';
    protected $fillable = ['nombre','descripcion'];
    public $timestamps = false;
}
