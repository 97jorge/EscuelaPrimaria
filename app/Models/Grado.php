<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\models\Profesor;


class Grado extends Model
{
    use HasFactory;

    public function profesores(){

        return $this->belongsTo(Profesor::class);
    }



    
}