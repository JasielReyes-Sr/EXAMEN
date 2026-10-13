<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedore extends Model
{
    protected $table = 'proveedores';

    protected $primaryKey = 'proveedores';

    public $timestamps = false;

    public function equipos()
    {
        return $this->hasMany(
            Equipo::class, 'Id_Proveedor', 'Id_Proveedor'
        );
    }
}
