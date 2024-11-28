<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalles_Orden_Venta extends Model
{
    use HasFactory;
    protected $table='detalle_orden_venta';
    protected $primaryKey='id_detalle_orden_venta';
    public $timestamps=false;
    protected $fillable=['id_orden_venta','id_producto','cantidad'];
}
