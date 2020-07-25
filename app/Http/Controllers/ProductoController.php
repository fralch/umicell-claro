<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Compra_detalle;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
   
    public function index()
    {
        $productos_tipos = Producto::select('tipo')->distinct('tipo')->get();
        return view('compra.lista_productos')->with('productos_tipos', $productos_tipos);
    }

    public function productos_all(Request $request)
    {
        // return $request;
        $name=$request->nombre;
        return Producto::where('cod_producto', 'like', '%'.$name. '%')
                ->orWhere('descripcion', 'like', '%'.$name. '%')
                ->get();
    }

    public function guardar_lista_productos(Request $request)
    {
        $compra_id = $request->compra_id;
        $id_productos= $request->id_productos;
        $costo=$request->costo;
        $imei=$request->imei;
        $igv = floatval($costo)*0.18;
        $costo_con_igv = $costo + $igv;

        session()->forget('compra_id');
        Compra_detalle::insert(['id_compras'=>$compra_id,'id_productos'=> $id_productos ,'imei'=>$imei, 'costo'=>$costo, 'igv'=> $igv, 'costo_con_igv'=>$costo_con_igv]);
        return redirect()->route('compra_detalle', ['id' => $compra_id]);
        
    }
   
}
