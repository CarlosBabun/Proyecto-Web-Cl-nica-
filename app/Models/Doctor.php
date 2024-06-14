<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Doctor extends Model
{
    use HasFactory;
    //esto es para que nuestro programa pueda hacer bien la referencia
    protected $table = 'doctores';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre','apellido','especialidad'];
    public $timestamps = false;
}
