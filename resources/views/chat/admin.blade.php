@extends('layouts.app')

@section('title', 'Chat Admin')

@section('style')
<style>
    .chat-container {
        max-width: 600px;
        margin: 50px auto;
        font-family: 'Poppins', sans-serif;
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 20px;
        background: #fff;
    }
    .chat-box {
        height: 400px;
        overflow-y: auto;
        border-bottom: 1px solid #ddd;
        padding-bottom: 10px;
        margin-bottom: 10px;
    }
    .chat-message {
        margin-bottom: 10px;
        padding: 8px 12px;
        border-radius: 8px;
        max-width: 75%;
        word-wrap: break-word;
    }
    .chat-user {
        background: #e6f3ff;
        text-align: right;
        margin-left: auto;
    }
    .chat-admin {
        background: #f0f0f0;
        text-align: left;
        margin-right: auto;
    }
    .chat-form {
        display: flex;
        gap: 10px;
    }
    .chat-form input {
        flex: 1;
        padding: 8px;
        border-radius: 8px;
        border: 1px solid #ccc;
    }
    .chat-form button {
        padding: 8px 15px;
        border: none;
        border-radius: 8px;
        background: #333;
        color: #fff;
        cursor: pointer;
    }
    .chat-form button:hover {
        background: #555;
    }
</style>
@endsection

@section('content')
<div class="chat-container">
    <h3>Chat dengan Admin</h3>
    <div class="chat-box">
        @foreach($chats as $chat)
            <div class="chat-message {{ $chat->is_admin ? 'chat-admin' : 'chat-user' }}">
                <strong>{{ $chat->is_admin ? 'Admin' : Auth::user()->name }}:</strong>
                <p>{{ $chat->message }}</p>
                <small>{{ $chat->created_at->format('H:i') }}</small>
            </div>
        @endforeach
    </div>
    <form action="{{ route('chatAdmin.store') }}" method="POST" class="chat-form">
        @csrf
        <input type="text" name="message" placeholder="Tulis pesan..." required>
        <button type="submit">Kirim</button>
    </form>
</div>
@endsection
