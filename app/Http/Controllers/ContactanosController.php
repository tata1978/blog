<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index()//este metodo nos mostrara el formulario de contacto
    {
        return view('contactanos.index');
    }

    public function store(Request $request)
    {

        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email',
            'mensaje' => 'required',
        ]);

        $correo = new ContactanosMailable($request->all());

        Mail::to('amfale@gmail.com')->send($correo);

        return redirect()->route('contactanos.index')->with('info', 'Mensaje enviado');// con with() mandamos un mensjae de sesion
    }
}
