<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonoClasificacion extends Model
{
    use HasFactory;
    protected $table = 'mono_clasificacion';
    protected $fillable = ['mono_id', 'clasificacion_id'];

    public function monos(){
        return $this->belongsTo('App\Models\Monos');
    }

    /**
     * Relación con perro.
     */
    public function clasificacion(){
        return $this->belongsTo('App\Models\Clasificacion');
    }
}
