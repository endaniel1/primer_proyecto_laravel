<?php

namespace App\Http\Controllers;

use App\Message;

use Illuminate\Http\Request;


class PaginasController extends Controller
{
    public function home()
    {
        $messages = Message::latest()->paginate(6);
        //dd($mensaje);

        return view('welcome', [
            "messages" => $messages,
        ]);
    }
}
