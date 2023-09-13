@extends('layouts.front')
@section('content-app')
<section class="appointment single-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="appointment-inner">
                    <div class="title">
                        <h3>Book your appointment</h3>
                        <p>We will confirm your appointment within 2 hours</p>
                    </div>
                    <form class="form" method="POST" action="{{route('reservation')}}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <select name="consultant_id" id="" class="form-control">
                                        <option value="">Pilih Konsultan</option>
                                        @foreach ($consultan as $cons)
                                            <option value="{{$cons->id}}">{{$cons->username}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Date" name="reservation_date" id="datepicker">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="button">
                                        <button type="submit" class="btn">Book An Appointment</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
