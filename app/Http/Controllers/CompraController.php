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

    public function compras(Request $request)
    {
        $antes= $request->antes;
        $despues= $request->despues;
        
        return Compra::select('registro','f_compra', 'tipo_doc', 'factura_serie' ,'factura_numero', 'subtotal', 'igv', 'total')
                        ->whereBetween('f_compra', [$antes , $despues ])
                        ->get();
    }



    
}
