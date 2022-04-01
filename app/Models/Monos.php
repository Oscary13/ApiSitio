<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monos extends Model
{
    use HasFactory;
    protected $table = 'monos';

    public function clasificacion(){
        return $this->belongsTo('App\Models\Clasificacion');
    }
}
