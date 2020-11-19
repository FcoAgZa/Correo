<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Correo extends Mailable
{
    use Queueable, SerializesModels;

    public $datos_correo;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($datos_correo)
    {
        $this->datos_correo = $datos_correo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $input = array(
            'asunto' => $this->datos_correo['asunto'],
            'correo' => $this->datos_correo['correo'],
            'mensaje' => $this->datos_correo['mensaje']
        );
        return $this->
            from('Frank@hotmail.com', 'Frank') //destinatario
            ->subject($this->datos_correo['asunto']) //asunto
            ->view('emails.correo') //vista de correo
            ->with([
                'inputs' => $input,  //datos ingresados por usuario
            ]); 
        
    }
}
