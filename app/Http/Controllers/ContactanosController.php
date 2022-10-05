<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;




class ContactanosController extends Controller
{
    public function index()
    {
        return view('contactanos.index');
    }

    //Procesa el formulario y enviar el correo electronico
    public function store(Request $request)
    {

        $request -> validate([
            'name'    => 'required',
            'correo'   => 'required|email',
            'mensaje' => 'required',
        ]);

        $correo = new ContactanosMailable($request->all());
        Mail::to('pizoluligoa@gmail.com')->send($correo);

        return redirect()->route('contactanos.index')->with('info','Mensaje Enviado');
    }

}
