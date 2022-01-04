<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactanosMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject="Infomación de contacto";// para definir el asunto del correo

    public $contacto;//cualquier propiedad que incluyamos dentro de esta clase va a poder ser accedida por el correo

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contacto)
    {
        $this->contacto=$contacto;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()//este metodo nos entregara una vista de nuestra correo, en esa vista debe estar el contenido de nuestro email
    {
        return $this->view('email.contactanos');
    }
}
