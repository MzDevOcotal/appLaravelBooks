<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{
    use HasFactory;

    protected $table = 'lib_sexo'; //Se define la tabla con la que trabajara el modelo
    protected $primaryKey = 'cod_sexo'; //Se define la llave primaria
    protected $fillable = ['descripcion']; //Sirve para definir que campos llenaremos de forma masiva a manera de array.
}
