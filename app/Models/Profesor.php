<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\models\Grado;

class Profesor extends Model
{
    use HasFactory;

public function grados(){
    return $this->hasMany(Grado::class);
}

}
