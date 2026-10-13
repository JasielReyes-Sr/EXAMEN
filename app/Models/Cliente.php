<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    protected $primaryKey = 'Id_Clientes';

    public $timestamps = false;

    public function pedidos()
    {
        return $this->hasMany(
            Equipo::class, 'Id_Clientes', 'Id_Clientes'
        );
    }
}
