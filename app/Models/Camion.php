<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camion extends Model
{

    public $table='camion';
    use HasFactory;


    public function transporte(){
        return $this->belongsTo('App\Models\transporte');
    }
}
