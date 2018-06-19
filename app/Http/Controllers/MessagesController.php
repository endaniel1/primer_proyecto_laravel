<?php

namespace App\Http\Controllers;

use App\Message;

use Illuminate\Http\Request;

use App\Http\Requests\CreateMessageRequest;




class MessagesController extends Controller
{

    public function show(Message $message)
    {

        return view("messages.show", [
            "message" => $message
        ]);
    }


    public function create(CreateMessageRequest $request)
    {
       // dd($request->all());
        //return "create";
        //ESO FUE PARA VER SI ENTRAVA AL CONTROLADOR}

        //obtenemos el ususrario logeado
        $user = $request->user();

        //guardar en la base de datos
        $message = Message::create([
            'user_id' => $user->id,
            'content' => $request->input('message'),
            'image' => 'http://lorempixel.com/600/338?' . mt_rand(0, 1000)
        ]);
        return redirect("/messages/" . $message->id);
        
        dd($message);
    }
}
