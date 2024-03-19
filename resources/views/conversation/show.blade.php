<!-- conversations/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>{{ $conversation->name }}</h1>
    <ul>
        @foreach($conversation->messages as $message)
            <li>{{ $message->content }}</li>
        @endforeach
    </ul>
    
    <form action="{{ route('messages.store', $conversation) }}" method="POST">
        @csrf
        <textarea name="content" placeholder="Type your message"></textarea>
        <button type="submit">Send</button>
    </form>
@endsection
