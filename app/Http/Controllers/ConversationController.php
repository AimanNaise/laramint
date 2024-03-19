<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use Illuminate\Http\Request;

class ConversationController extends Controller
{
    public function index()
    {
        $conversations = auth()->user()->conversations()->get();
        return view('conversation.index', compact('conversations'));
    }

    public function show(Conversation $conversation)
    {
        $messages = $conversation->messages()->get();
        return view('conversations.show', compact('conversation', 'messages'));
    }
}
