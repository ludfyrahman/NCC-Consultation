@extends('layouts.front')
@section('content-app')

<section class="slider">
    <div class="hero-slider">

        <div class="single-slider" style="background-image:url('{{asset('fe_assets/img/slider2.jpg')}}')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="text">
                            <h1>Sahabat gizi terbaik kamu</h1>
                            <p>Nutrition Care Center (NCC) memiliki tim konselor gizi berpengalaman yang siap memberikan panduan dan nasihat terbaik dalam perawatan gizi Anda. </p>
                            <div class="button">
                                <a href="{{route('konsultasi')}}" class="btn">Konsultasi Online</a>
                                {{-- <a href="#" class="btn primary">Reservasi</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="single-slider" style="background-image:url('{{asset('fe_assets/img/slider.jpg')}}')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="text">
                            <h1>Sahabat gizi terbaik kamu</h1>
                            <p>Nutrition Care Center (NCC) memiliki tim konselor gizi berpengalaman yang siap memberikan panduan dan nasihat terbaik dalam perawatan gizi Anda. </p>
                            <div class="button">
                                <a href="{{route('konsultasi')}}" class="btn">Konsultasi Online</a>
                                {{-- <a href="#" class="btn primary">Reservasi</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="single-slider" style="background-image:url('{{asset('fe_assets/img/slider3.jpg')}}')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="text">
                            <h1>Sahabat gizi terbaik kamu</h1>
                            <p>Nutrition Care Center (NCC) memiliki tim konselor gizi berpengalaman yang siap memberikan panduan dan nasihat terbaik dalam perawatan gizi Anda. </p>
                            <div class="button">
                                <a href="{{route('konsultasi')}}" class="btn">Konsultasi Online</a>
                                {{-- <a href="#" class="btn primary">Reservasi</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<section class="schedule d-none">
    <div class="container">
        <div class="schedule-inner">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 ">

                    <div class="single-schedule first">
                        <div class="inner">
                            <div class="icon">
                                <i class="fa fa-ambulance"></i>
                            </div>
                            <div class="single-content">
                                <span>Lorem Amet</span>
                                <h4>Emergency Cases</h4>
                                <p>Lorem ipsum sit amet consectetur adipiscing elit. Vivamus et erat in lacus
                                    convallis sodales.</p>
                                <a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-schedule middle">
                        <div class="inner">
                            <div class="icon">
                                <i class="icofont-prescription"></i>
                            </div>
                            <div class="single-content">
                                <span>Fusce Porttitor</span>
                                <h4>Doctors Timetable</h4>
                                <p>Lorem ipsum sit amet consectetur adipiscing elit. Vivamus et erat in lacus
                                    convallis sodales.</p>
                                <a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12">

                    <div class="single-schedule last">
                        <div class="inner">
                            <div class="icon">
                                <i class="icofont-ui-clock"></i>
                            </div>
                            <div class="single-content">
                                <span>Donec luctus</span>
                                <h4>Opening Hours</h4>
                                <ul class="time-sidual">
                                    <li class="day">Monday - Fridayp <span>8.00-20.00</span></li>
                                    <li class="day">Saturday <span>9.00-18.30</span></li>
                                    <li class="day">Monday - Thusday <span>9.00-15.00</span></li>
                                </ul>
                                <a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="Feautes section mt-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Ini yang NCC sediakan untukmu.</h2>
                    <img src="img/section-img.png" alt="#">
                    <p>Nutrition Care Center (NCC) memiliki berbagai layanan untuk memberikan panduan dan nasihat terbaik dalam perawatan gizi Anda. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-12">

                <div class="single-features">
                    <div class="signle-icon">
                        <i class="icofont icofont-ambulance-cross"></i>
                    </div>
                    <h3>Resep Organik</h3>
                    <p>Temukan resep organik yang lezat dan sehat untuk mendukung gaya hidup Anda yang ramah lingkungan.</p>
                </div>

            </div>
            <div class="col-lg-3 col-12">

                <div class="single-features">
                    <div class="signle-icon">
                        <i class="icofont icofont-medical-sign-alt"></i>
                    </div>
                    <h3>Strategi Nutrisi</h3>
                    <p>Dapatkan strategi nutrisi yang tepat untuk mencapai tujuan kesehatan dan kebugaran Anda.</p>
                </div>

            </div>
            <div class="col-lg-3 col-12">

                <div class="single-features last">
                    <div class="signle-icon">
                        <i class="icofont icofont-stethoscope"></i>
                    </div>
                    <h3>Tingkatkan Kesehatan</h3>
                    <p>Tingkatkan kesehatan Anda dengan panduan gizi yang disesuaikan untuk meningkatkan energi.</p>
                </div>

            </div>
            <div class="col-lg-3 col-12">

                <div class="single-features last">
                    <div class="signle-icon">
                        <i class="icofont icofont-stethoscope"></i>
                    </div>
                    <h3>Kalkulator BMI</h3>
                    <p>Gunakan kalkulator BMI kami untuk memantau dan mengelola berat badan secara efektif.</p>
                </div>

            </div>
        </div>
    </div>
</section>


<div id="fun-facts" class="fun-facts section overlay">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">

                <div class="single-fun">
                    <i class="icofont icofont-home"></i>
                    <div class="content">
                        <span class="counter">3468</span>
                        <p>Hospital Rooms</p>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 col-12">

                <div class="single-fun">
                    <i class="icofont icofont-user-alt-3"></i>
                    <div class="content">
                        <span class="counter">557</span>
                        <p>Specialist Doctors</p>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 col-12">

                <div class="single-fun">
                    <i class="icofont-simple-smile"></i>
                    <div class="content">
                        <span class="counter">4379</span>
                        <p>Happy Patients</p>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 col-12">

                <div class="single-fun">
                    <i class="icofont icofont-table"></i>
                    <div class="content">
                        <span class="counter">32</span>
                        <p>Years of Experience</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<section class="why-choose section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Konsultasikan Kesehatanmu dengan Ahli Gizi Terpercaya Melalui Layanan Online di NCC!</h2>
                    <img src="{{asset('fe_assets/img/section-img.png')}}" alt="#">
                    <p>Di Nutrition Care Center (NCC), kami mengembangkan program kesehatan yang memberikan peluang bagi Anda untuk menjadi lebih efisien dan fokus dalam mencapai tujuan kesehatan Anda. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12">

                <div class="choose-left">
                    <h3>Who We Are</h3>
                    <p>Di Nutrition Care Center (NCC), kami mengembangkan program kesehatan yang memberikan peluang bagi Anda untuk menjadi lebih efisien dan fokus dalam mencapai tujuan kesehatan Anda.</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list">
                                <li><i class="fa fa-caret-right"></i>Ahli Gizi Terpercaya</li>
                                <li><i class="fa fa-caret-right"></i>Keahlian Profesional</li>
                                <li><i class="fa fa-caret-right"></i>Pendekatan Personalized</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list">
                                <li><i class="fa fa-caret-right"></i>Pengetahuan Mendalam</li>
                                <li><i class="fa fa-caret-right"></i>Bimbingan Motivasi</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-12">

                <div class="choose-right">
                    <div class="video-image">

                        <div class="promo-video">
                            <div class="waves-block">
                                <div class="waves wave-1"></div>
                                <div class="waves wave-2"></div>
                                <div class="waves wave-3"></div>
                            </div>
                        </div>

                        <a href="https://www.youtube.com/watch?v=RFVXy6CRVR4"
                            class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<section class="blog section" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Resep Sehat Terbaru</h2>
                    <img src="{{asset('fe_assets/img/section-img.png')}}" alt="#">
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($recipe as $data)
            <div class="col-lg-4 col-md-6 col-12">
                <a href="{{route('resep.detail', $data->id)}}">
                    <div class="single-news">
                        <div class="news-head">
                            <img src="/storage/recipe/{{$data->image}}" alt="#">
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                <div class="date">{{$data->created_at->format('D M, Y')}}</div>
                                <h2><a href="{{route('resep.detail', $data->id)}}">{{$data->name}}</a></h2>
                                <p class="text">{{substr($d->description,0,50)}}</p>
                                @foreach ($d->category as $cat)
                                    <span class="badge bg-primary text-white">{{$cat->category->name}}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </a>

            </div>
            @endforeach

        </div>
    </div>
</section>



@endsection
