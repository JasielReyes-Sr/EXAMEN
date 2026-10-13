<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    protected $primaryKey = 'Id_Alquiler';

    public $timestamps = false;

    public function registro()
    {
        return $this->belongsTo(
            Registro::class,
            'Id_Categoria',
            'Id_Categoria'
        );
    }
}
