<?php

namespace App\Http\Controllers;

use App\Models\Orden_Venta;
use DB;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class Orden_Venta_Controller extends Controller
{
       /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ordenes_venta=Orden_Venta::all();

        return response()->json($ordenes_venta);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            DB::beginTransaction();
            $orden_venta= new Orden_Venta();
            $orden_venta->total=$request->total;
            $orden_venta->fecha_emision= Carbon::now();

            $orden_venta->save();

            $orden_venta->saveDetails($request->detalles,$orden_venta->id_orden_venta);

            DB::commit();
            return response()->json(['response'=>true],200);

        }catch(Exception $ex){
            DB::rollBack();
            return response()->json(['response'=>false],500);
        }





    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
