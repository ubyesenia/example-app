<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    //protected $fillable = ['name','description','category'];//No es recomendable cuando hay muchos campos
    protected $guarded = [];//Lo dejamos vacio para indicar que tome los campos protegidos, de lo contrario especificar los campos
}
