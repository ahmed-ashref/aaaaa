<?php

namespace App\Http\Controllers;

use App\conversation;
use App\User;
use App\messages;


use Illuminate\Http\Request;

class ConversationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conversation = Conversation::where('sender_id', auth()->user()->id)->orWhere('receiver_id', auth()->user()->id)->orderBy('created_at', 'desc')->paginate(5);

        $messages = messages::orderBy('created_at', 'desc')->get();
        dd($messages);
        return view('messages.index', compact('conversation' ,'messages'));
    }




    public function store(Request $request)
    {


        $conversation =  new conversation();

        $conversation->sender_id = Auth()->user()->id ;
        $conversation->receiver_id = $request->receiver_id ;
        $conversation->save();

        $messages = new messages();
        $messages->conversation_id = $conversation->id;
        $messages->message = $request->message;
        $messages->user_id = Auth()->user()->id;
        $messages->save();


    }

}



// $conversation = Conversation::where('sender_id', auth()->user()->id)->orWhere('receiver_id', $request->id);