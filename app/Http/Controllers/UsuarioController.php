<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function validarUsuario(Request $request)
    {
        return $request;
        exit;
        // return $request;
        $usuario = $request->usuario;
        $clave = $request->password;

        $validando_usuario = Usuario::select('dni', 'nombre', 'paterno', 'materno')->where('u_login', $usuario)->where('pwd', $clave)->get();

        //echo count($validando_usuario);

        if ( count($validando_usuario)==1) {
                foreach ($validando_usuario as $value) {
                    $nombres= $value->nombre." ".$value->paterno;
                    $dni= $value->dni;
                }
                session(['usuario_dni' => $dni]);
                session(['usuario' => $nombres]);
                
                return redirect('/home');
        }elseif (count($validando_usuario)==0) {
                Session::flash('usuario_no_valido','El usuario o contraseña no son correctas');
                return redirect('/');
                exit();
        }
    }
}
