<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    use HasFactory;
    //esto es para que nuestro programa pueda hacer bien la referencia
    protected $table = 'pacientes';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre','apellido','edad','sexo'];
    public $timestamps = false;
}
