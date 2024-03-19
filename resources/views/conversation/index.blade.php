<!-- conversations/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Conversations</h1>
    @foreach($conversations as $conversation)
        <a href="{{ route('conversations.show', $conversation) }}">{{ $conversation->name }}</a>
    @endforeach
@endsection
