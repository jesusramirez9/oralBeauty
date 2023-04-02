<?php

namespace App\Http\Controllers;

use App\Mail\ContactoMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function store(Request $request)
    {
     
            $request->validate([
                'name' => 'required',
                'lastname' => 'required',
                'celular' =>'required|numeric',
                'correo' =>'required|email',
                'mensaje' =>'required'
            ]);
    
            $correo = new ContactoMailable($request->all());
            Mail::to('jesus.ramirez9@unmsm.edu.pe')->send($correo);
    
            return redirect()->route('contacto')->with('info','Mensaje enviado');
        
    }

}
