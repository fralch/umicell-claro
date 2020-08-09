<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Compra_detalle;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
       if (!empty($request->imei)) {
        $compra_id = $request->compra_id;
        $id_productos= $request->id_productos;
        $costo=$request->costo;
        $imei=$request->imei;
        $igv = floatval($costo)*0.18;
        $costo_con_igv = $costo + $igv;

        session()->forget('compra_id');
        Compra_detalle::insert(['id_compras'=>$compra_id,'id_productos'=> $id_productos ,'imei'=>$imei, 'costo'=>$costo, 'igv'=> $igv, 'costo_con_igv'=>$costo_con_igv]);

        // DB::insert('insert into compra_detalles (id_compras, id_productos, imei, costo, igv, costo_con_igv) 
        //             values ('.$compra_id.', '.$id_productos.', '.$imei.', '.$costo.', '.$igv.', '.$costo_con_igv.')', [1]);
        return redirect()->route('compra_detalle', ['id' => $compra_id]);
       }
       if (!empty($request->iccid)) {
        $compra_id = $request->compra_id;
        $id_productos= $request->id_productos;
        $costo=$request->costo;
        $igv = floatval($costo)*0.18;
        $costo_con_igv = $costo + $igv;
        $iccid=intval($request->iccid);
        $iccid2=intval($request->iccid2);

        for ($i=$iccid; $i <= $iccid2 ; $i++) { 
            Compra_detalle::insert(['id_compras'=>$compra_id,'id_productos'=> $id_productos ,'iccid'=>$i, 'costo'=>$costo, 'igv'=> $igv, 'costo_con_igv'=>$costo_con_igv]);
        }
        session()->forget('compra_id');
        return redirect()->route('compra_detalle', ['id' => $compra_id]);
       }
        
    }
    public function productos_todo()
    { 
        return Producto::take(20)->orderBy('id', 'DESC')->get();   
    }

    public function guardar_producto(Request $request)
    { 
        // return $request; 
        Producto::insert(['cod_producto'=>$request->cod_producto, 'descripcion'=>$request->descripcion, 'tipo'=>$request->tipo, 'fecha'=>$request->fecha]);
        return redirect('/productos');
    }

    
}
