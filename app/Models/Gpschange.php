<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gpschange extends Model
{
    protected $fillable = [
        'activated',
        'tecnico',
        'nombre',
        'placa',
        'lugar',
        'idgpsanterior',
        'seriegpsanterior',
        'tipogpsanterior',
        'idgpsnuevo',
        'seriegpsnuevo',
        'imeigpsnuevo',
        'ipgpsnuevo',
        'simgpsnuevo',
        'telefonogpsnuevo',
        'tipogpsnuevo',
        'posicion',
        'panico',
        'cortemotor',
        'otros',
        'fecha',
        'observacion',
    
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
        return url('/admin/gpschanges/'.$this->getKey());
    }
}
