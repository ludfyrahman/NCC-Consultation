@extends('layouts.front')
@section('content-app')
<link rel="stylesheet" href="{{asset('fe_assets/css/chat.css')}}">
<div class="chat">

    <!-- Header -->
    <div class="top">
        <img src="https://cdn.vectorstock.com/i/preview-1x/33/51/person-gray-photo-placeholder-little-boy-vector-22863351.jpg" alt="Avatar" style="width:5%!important">
        <div>
        <p>{{$detail->consultant->username}}</p>
        <small>Online</small>
        </div>
    </div>
    <!-- End Header -->

    <!-- Chat -->
    <div class="messages">
        @include('includes.receive', ['message' => "Hey! What's up!  👋"])
        @include('includes.receive', ['message' => "Ask a friend to open this link and you can chat with them!"])
    </div>
    <!-- End Chat -->

    <!-- Footer -->
    <div class="bottom">
        <form>
        <input type="text" id="message" name="message" placeholder="Enter message..." autocomplete="off">
        <button type="submit"></button>
        </form>
    </div>
    <!-- End Footer -->

</div>
@endsection
