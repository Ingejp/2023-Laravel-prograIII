<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transporte extends Model
{
    public $table='transporte';
    use HasFactory;

    public function camiones(){
        return $this->hasMany('App\Models\camion');
    }
}
