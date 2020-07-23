<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
   
    public function index()
    {
        return view('compra.lista_productos');
    }

   
}
