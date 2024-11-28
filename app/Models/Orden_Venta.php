<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden_Venta extends Model
{
    use HasFactory;
    protected $table='orden_venta';
    protected $primaryKey='id_orden_venta';
    public $timestamps=false;
    protected $fillable=['total','fecha_emision','id_cliente'];




}
