<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Conversation $conversation)
    {
        $data = request()->validate([
            'content' => 'required|string',
        ]);

        $conversation->messages()->create([
            'user_id' => auth()->id(),
            'content' => $data['content'],
        ]);

        return back();
    }
}

