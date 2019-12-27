<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gpstransfer extends Model
{
    protected $fillable = [
        'activated',
        'tecnico',
        'nombre',
        'placaanterior',
        'placanueva',
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
        return url('/admin/gpstransfers/'.$this->getKey());
    }
}
