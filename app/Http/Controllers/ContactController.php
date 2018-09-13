<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ContactRequest;


class ContactController extends Controller
{
    public function showform()
    {
        return view('contacto.contacto');
    }

    public function store(ContactRequest $request)
    {
       // return $request->all(); todos los datos d ela solicitud

       //return $request->path(); regresa la ruta
      // return $request->url(); url completa
      //return $request->input('nombre'); trai el nombre
      // return $request->nombre; lo mismo
      //return $request->only(['nombre','email']); //trai nombre y email
      //return $request->except(['mensaje']); excepto el mensaje

      //validando los datos
      /*
      return $request->validate([

        'nombre'=> 'required',
        'email'=> 'required|email',
        'mensaje'=> 'required|min:5',
        
      ]);*/
      //la otra manera es con form request
      return $request->all();
       
    }
}
