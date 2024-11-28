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
    protected $fillable=['total','fecha_emision'];


    public function saveDetails($detalles,$id){
        $new_d= null;
        foreach($detalles as $d){
            $new_d= new Detalles_Orden_Venta();
            $new_d->id_orden_venta= $id;
            $new_d->id_producto = $d['id_producto']; // Acceso como array
            $new_d->cantidad = $d['cantidad'];      //
            $new_d->save();
            \Log::info('Venta procesada: ' . $new_d);
        }
    }


}
