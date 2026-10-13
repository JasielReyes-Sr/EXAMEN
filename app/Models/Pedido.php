<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedidos';

    protected $primaryKey = 'Id_Pedido';

    public $timestamps = false;

    public function Detalles()
    {
        return $this->hasMany(
            Equipo::class, 'Id_Pedido', 'Id_Pedido'
        );
    }
    public function empleado()
    {
        return $this->belongsTo(
            Registro::class,
            'Id_Empleado',
            'Id_Empleado'
        );
    }

    public function cliente()
    {
        return $this->belongsTo(
            Equipo::class,
            'Id_Cliente',
            'Id_Cliente'
        );
    }

}
