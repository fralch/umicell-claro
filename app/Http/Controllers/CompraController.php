<?php

namespace App\Http\Controllers;

use App\Compra;
use App\Compra_detalle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
                                    ->join('productos', 'productos.id','compra_detalles.id_productos' )
                                    ->where('compra_detalles.id_compras', $id)
                                    ->get();

        session(['compra_id' => $id]);
        return view('compra.compra_detalle')->with('compras', $compras)->with('detalles_compras', $detalles_compras);
    }

    public function editar_producto_compra($id)
    {
        # Eduta el producto de una compra ya realizada  
        $editar_producto=Compra_detalle::select('compras.id as compra_id','compra_detalles.id','productos.cod_producto', 'compra_detalles.iccid', 'compra_detalles.imei','productos.descripcion','compra_detalles.costo','compra_detalles.igv', 'compra_detalles.costo_con_igv')
                                    ->join('compras', 'compras.id', 'compra_detalles.id_compras')
                                    ->join('productos', 'productos.id','compra_detalles.id_productos' )
                                    ->where('compra_detalles.id', $id)
                                    ->get();
        return view('compra.editar_compra')->with('editar_producto', $editar_producto);
    }

    public function editar_producto_compra_guardar(Request $request)
    {
        $id_c=$request->compra_id;
        
        // return $request;
        Compra_detalle::where('id',$request->id)->update(['costo'=>$request->costo, 'igv'=>$request->igv, 'costo_con_igv'=>$request->costo_con_igv]);
        
        return redirect()->route('compra_detalle', ['id' => $id_c]);
        
    }
    
    public function eliminar_producto_compra($id)
    {
        # Elimina producto de la compra 
        $producto = Compra_detalle::find($id);
        $producto->delete();
        return redirect()->back();

    }

    public function guardar_suma_productos($id)
    {
        
        # code...
        $grabar_total= Compra_detalle::select(DB::raw('SUM(compra_detalles.costo) as subtotal'), DB::raw('SUM(compra_detalles.igv) as igv'),DB::raw('SUM(compra_detalles.costo_con_igv) as total') )
                        ->join('compras','compras.id','compra_detalles.id_compras')
                        ->where('compras.id', $id)
                        ->get();

        $subtotal=$grabar_total['0']->subtotal;
        $igv=$grabar_total['0']->igv;
        $total=$grabar_total['0']->total;

        //echo $subtotal." ".$igv." ".$total;
        Compra::where('id',$id )->update(['subtotal' => $subtotal, 'igv' => $igv, 'total' => $total], ['timestamps' => false]);

        
        return redirect()->route('compra_detalle', ['id' => $id]);
    }
   

}
