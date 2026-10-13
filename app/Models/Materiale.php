<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materiale extends Model
{
    protected $table = 'materiales';

    protected $primaryKey = 'Id_Materiales';

    public $timestamps = false;

    public function Proveedor()
    {
        return $this->belongsTo(
            Registro::class,
            'Id_Proveedor',
            'Id_Proveedor'
        );
    }
}
