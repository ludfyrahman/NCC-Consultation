@extends('layouts.front')
@section('content-app')


<section class="about-area section">
    <div class="container">
        <h3>Konsultasi</h3>
        <p>Lihat dan kelola konsultasimu disini</p>
        {{-- validate session login or not --}}
        @if (auth()->check() && auth()->user()->role == 'User')

        <a href="{{route('createReservation')}}"><button class="btn btn-primary float-end" >Tambah Reservasi</button></a>

        @endif
        @if (session('success'))
            <div class="alert alert-success mg-b-0" role="alert">
                <button aria-label="Close" class="close" data-bs-dismiss="alert" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{ session('success') }}
            </div>
        @endif
        @if(count($data) == 0)
            <h5 class="text-center text-secondary">Data Konsultasi Kosong</h5>
        @endif
        @foreach ($data as $d)
        <a href="{{route('konsultasi.detail', $d->id)}}">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-2 text-center">
                            <h5>{{date('d', strtotime($d->reservation_date))}}</h5>
                            <h3>{{date('M', strtotime($d->reservation_date))}}</h3>
                        </div>
                        <div class="col-4">
                            @if (auth()->check() && auth()->user()->role == 'User')
                            <h4>{{$d->consultant?->username}}</h4>
                            @else
                            <h4>{{$d->user?->username}}</h4>
                            @endif

                            <p>Selamat pagi ada yang bisa dibantu?</p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</section>


@endsection
