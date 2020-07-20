<?php

namespace App\Http\Controllers;

use App\Compra;
use App\Compra_detalle;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    public function index()
    {
        return view('compra.index');
    }
    public function comprasxfechas(Request $request)
    {
        // return $request;
        $antes= $request->antes;
        $despues= $request->despues;
        
        return Compra::select('id','f_compra', 'tipo_doc', 'factura_serie' ,'factura_numero', 'subtotal', 'igv', 'total')
                        ->whereBetween('f_compra', [$antes , $despues ])
                        ->orderBy('f_compra', 'ASC')
                        ->get();
    }

    public function compra_detalle($id)
    {
        //return $id;
        $compras=Compra::where('id', $id)->get();

        $detalles_compras=Compra_detalle::select('compra_detalles.id','productos.cod_producto', 'compra_detalles.iccid', 'compra_detalles.imei','productos.descripcion','compra_detalles.costo','compra_detalles.igv', 'compra_detalles.costo_con_igv')
                                    ->join('compras', 'compras.id', 'compra_detalles.id_compras')
                                    ->join('productos', 'productos.id','compra_detalles.id_productos' )
                                    ->where('compras.id', $id)
                                    ->get();

        return view('compra.compra_detalle')->with('compras', $compras)->with('detalles_compras', $detalles_compras);
    }
    
    public function eliminar_producto_compra($id)
    {
        # Elimina producto de la compra 
        $producto = Compra_detalle::find($id);
        $producto->delete();
        return redirect()->back();

    }

    public function editar_producto_compra($id)
    {
        # Editar producto de compra hecha
    }

}
