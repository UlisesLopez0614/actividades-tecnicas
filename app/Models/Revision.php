<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Revision extends Model
{
    protected $fillable = [
        'activated',
        'tecnico',
        'equipo',
        'placa',
        'lugar',
        'posicion',
        'panico',
        'cortemotor',
        'otros',
        'fecha',
        'observacion',
        'usuario',
    
    ];
    
    
    protected $dates = [
        'fecha',
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/revisions/'.$this->getKey());
    }
}
