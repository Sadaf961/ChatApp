<?php

namespace App\Http\Controllers;

use App\Models\Conversation as msg;

use Illuminate\Http\Request;

class ConversationController extends Controller
{

    public function viewChat(){
        $msg=msg::all();
        return view('chat_room', compact('msg'));
    }
}
