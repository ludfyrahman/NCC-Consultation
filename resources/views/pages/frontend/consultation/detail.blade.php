@extends('layouts.front')
@section('content-app')
<link rel="stylesheet" href="{{asset('fe_assets/css/chat.css')}}">
<div class="chat">

    <!-- Header -->
    <div class="top">
        <img src="https://cdn.vectorstock.com/i/preview-1x/33/51/person-gray-photo-placeholder-little-boy-vector-22863351.jpg" alt="Avatar" style="width:5%!important">
        <div>
        @if (auth()->user()->role == 'User')
            <p>{{$detail->consultant->username}}</p>
        @else
            <p>{{$detail->user->username}}</p>
        @endif
        <small>Online</small>
        </div>
    </div>
    <!-- End Header -->

    <!-- Chat -->
    <div class="messages">
        @foreach ($data as $d)
            @if($d->type == 'left')
                @include('includes.receive', ['message' => $d->message])
            @else
                @include('includes.broadcast', ['message' => $d->message])
            @endif
        @endforeach
    </div>
    <!-- End Chat -->

    <!-- Footer -->
    <div class="bottom">
        <input type="text" id="message" name="message" placeholder="Enter message..." autocomplete="off">
        <button type="submit" id="submit"></button>
    </div>
    <!-- End Footer -->
</div>
<script>
    $(function(){

        setInterval(() => {
            reload();
            console.log('reload')
        }, 1000);
        $('#submit').click(function(){
            var val = $('#message').val();
            if(val != ''){
                $.ajax({
                    url: "{{route('consultation.send')}}",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        message: val,
                        id: "{{$id}}"
                    },
                    success: function(data){
                        $('#message').val('');
                        $('.messages').append(data);
                        reload();
                    }
                })
            }
        })

        function reload(){
            $.ajax({
                url: "{{route('chat', $id)}}",
                type: "GET",
                success: function(data){
                    $('.messages').html(data);
                }
            })
        }
    })
</script>
@endsection
