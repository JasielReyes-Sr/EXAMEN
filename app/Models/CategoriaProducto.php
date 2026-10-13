<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoriaProducto extends Model
{
    protected $table = 'categoria_productos';

    protected $primaryKey = 'Id_Categoria';

    public $timestamps = false;

    public function Productos()
    {
        return $this->hasMany(
            Equipo::class, 'Id_Categoria', 'Id_Categoria'
        );
    }

}
