<?php

namespace App\Http\Controllers;

use App\messages;
use Illuminate\Http\Request;

class MessagesController extends Controller
{

    public function store(Request $request)
    {

        $messages = new messages();
        $messages->conversation_id =$request->$conversation->id;
        $messages->message = $request->message;
        $messages->user_id = auth()->user()->id;
        $messages->save();

    }



}