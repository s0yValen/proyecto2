<?php

namespace App\Http\Controllers;
use App\Models\Usuarios;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{

    public function index(){
        $usuarios = Usuarios::all();
        return  ['usuarios' => $usuarios];
    }

    // public function consultarPensionado(Request $request){
    //     $tipoDocumento = $request->input('tipo_documento');
    //     $numero = $request->input('numero');

    //     $usuario = Usuarios::where('tipo_documento', $tipoDocumento)
    //                       ->where('numero', $numero)
    //                       ->select('name','tipo_documento', 'numero', 'pensionado')
    //                       ->first();
    //     if ($usuario) {
    //         if ($usuario->pensionado == 0) {
    //             return view('certificacion', ['usuario' => $usuario]);

    //         } elseif ($usuario->pensionado == 1) {
    //             return  ['usuario' => $usuario];
    //         }
    //     } else {
    //         $usuario = (object) [
    //             'tipo_documento' => $tipoDocumento,
    //             'numero' => $numero,
    //         ];
    //         return view('certificacion', ['usuario' => $usuario]);
    //     }

    // }

    public function verPdf(Request $request){
        $usuario=json_decode($request->input('usuario'));
        return view('certificacion', compact('usuario'));
    }

    public function consultarPensionado(Request $request){
        $tipoDocumento = $request->input('tipo_documento');
        $numero = $request->input('numero');

        $usuario = Usuarios::where('tipo_documento', $tipoDocumento)
                          ->where('numero', $numero)
                          ->select('name','tipo_documento', 'numero', 'pensionado')
                          ->first();
        if ($usuario) {
                return  ['usuario' => $usuario];
            
        } else {
            $usuario = (object) [
                'tipo_documento' => $tipoDocumento,
                'numero' => $numero,
            ];
            
            return  ['usuario' => $usuario];
    }
    }

    // public function pdf(){

    //     return view('certificacion', );
    // }




}
