<?php

namespace App\Http\Controllers;

use App\Producto;
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
        session()->forget('compra_id');
        return $request;
        
    }
   
}
