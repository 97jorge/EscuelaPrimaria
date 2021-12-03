<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\models\Grado;

class Alumno extends Model
{
    use HasFactory;

    public function grado(){

        return $this->hasOne(Grado::class);
    }
    
}
