<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Uninstallation extends Model
{
    protected $fillable = [
        'activated',
        'tecnico',
        'nombre',
        'placa',
        'lugar',
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
        return url('/admin/uninstallations/'.$this->getKey());
    }
}
