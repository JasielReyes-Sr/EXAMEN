<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetallePedido extends Model
{
    protected $table = 'detalle_pedidos';

    protected $primaryKey = 'Id_Detalle';

    public $timestamps = false;

    public function Pedidos()
    {
        return $this->belongsTo(
            Registro::class,
            'Id_Pedido',
            'Id_Pedido'
        );
    }
}
