<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailNotify;
use App\Mail\Correo;
use App\Mail\VistaPrevia;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    public function index(){
        return view('inicio');
    }

    public function VistaPrevia(Request $request){

        $request->validate([
            'asunto' => 'required|max:50',
            'correo' => 'required|email:rfc,dns',
            'mensaje' => 'nullable|max:300'
        ]); 
        

        $datos_correo = array(
            'asunto' => $request['asunto'],
            'correo' => $request['correo'],
            'mensaje' => $request['mensaje'],
        );
        return new \App\Mail\VistaPrevia($datos_correo);

    }

    public function EnviaCorreo(Request $request){
            $datos_correo = array(
                'asunto' => $request['asunto'],
                'correo' => $request['correo'],
                'mensaje' => $request['mensaje'],
            );
            Mail::to($request->correo)->send(new Correo($datos_correo));

            return redirect()->route('/')->withSuccess('Correo enviado');
    }
}
