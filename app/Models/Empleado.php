<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleado';

    protected $primaryKey = 'Id_Empleado';

    public $timestamps = false;

    public function pedidos()
    {
        return $this->hasMany(
            Equipo::class, 'Id_Empleado', 'Id_Empleado'
        );
    }
}
