<?php

namespace App\Http\Controllers;

use App\Compra;
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
                        ->get();
    }

    public function compra_detalle()
    {
        return view('compra.compra_detalle');
    }

}
