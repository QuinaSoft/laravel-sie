<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Evento;

class EventoController extends Controller
{
    public function index(){

        $eventos = Evento::all();

        return view('portal', ['eventos' => $eventos]);
    }

    public function create() {

        return view('eventos.create');
    }

    public function store(Request $request) {

        $evento = new Evento;

        $evento->titulo = $request->titulo;
        $evento->local = $request->local;
        $evento->date = $request->date;
        $evento->horainicio = $request->horainicio;
        $evento->estado = $request->estado;
        $evento->descricao = $request->descricao;

        // Image Upload
        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/eventos'), $imageName);

            $evento->image = $imageName;


        }

        $user = auth()->user();
        $evento->user_id = $user->id;


        
        $evento->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso!');
        
    }


}
