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
<section class="schedule ">
    <div class="container">
        <div class="schedule-inner">
            <div class="row">
                <div class="col-12 ">
                    <div class="single-schedule first">
                        <div class="inner">
                            <div class="icon">
                                <i class="fa fa-ambulance"></i>
                            </div>
                            <div class="single-content">
                                <h4>Reservasi Online</h4>
                                <form action="" method="post" class="row">
                                    <div class="col-md-5">
                                        <input type="date" class="form-control" placeholder="Tanggal">
                                    </div>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control" placeholder="Konselor">
                                    </div>
                                    <div class="col-md-2">
                                        <button class=" bg-success hover-not-dark btn tw-100">Reservasi</button>
                                    </div>
                                </form>
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
        <div class="row px-2 py-3">
            <div class="col-lg-6">
                <h1>Ini yang NCC sediakan untukmu.</h1>
                {{-- <img src="{{asset('fe_assets/img/section-img.png')}}" alt="#"> --}}
            </div>
            <div class="col-md-6">
                <p>Nutrition Care Center (NCC) memiliki berbagai layanan untuk memberikan panduan dan nasihat terbaik dalam perawatan gizi Anda. </p>
            </div>
        </div>
    </div>
</section>
<section class="our-vision-area ptb-100 pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-vision-box">
                    <div class="icon">
                        <img src="{{asset('fe_assets/img/organik.png')}}" alt="#">
                    </div>
                    <h3>Resep Organik</h3>
                    <p>Temukan resep organik yang lezat dan sehat untuk mendukung gaya hidup Anda yang ramah lingkungan.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-vision-box">
                    <div class="icon">
                        <img src="{{asset('fe_assets/img/nutrisi.png')}}" alt="#">
                    </div>
                    <h3>Strategi Nutrisi</h3>
                    <p>Dapatkan strategi nutrisi yang tepat untuk mencapai tujuan kesehatan dan kebugaran Anda.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-vision-box">
                    <div class="icon">
                        <img src="{{asset('fe_assets/img/kesehatan.png')}}" alt="#">
                    </div>
                    <h3>Tingkatkan Kesehatan</h3>
                    <p>Tingkatkan kesehatan Anda dengan panduan gizi yang disesuaikan untuk meningkatkan energi.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-vision-box">
                    <div class="icon">
                        <img src="{{asset('fe_assets/img/bmi.png')}}" alt="#">
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
            <div class="col-lg-6 col-12">
                <div class="choose-right rounded">
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
            <div class="col-lg-6 col-12">
                <div class="choose-left">
                    <span class="badge bg-warning text-white px-4 py-2 text-dark mb-2">KONSULTASI</span>
                    <h3>Konsultasikan Kesehatanmu Dengan Ahli Gizi Terpercaya Melalui Layanan Online Di NCC!</h3>
                    <p>Di Nutrition Care Center (NCC), kami mengembangkan program kesehatan yang memberikan peluang bagi Anda untuk menjadi lebih efisien dan fokus dalam mencapai tujuan kesehatan Anda. </p>
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
                    <button class="btn bg-success w-100 mt-2">Konsultasi Sekarang</button>
                </div>

            </div>
        </div>
    </div>
</section>
<hr>
<section class="why-choose section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="choose-left">
                    <span class="badge bg-warning text-white px-4 py-2 text-dark mb-2">RESERVASI ONLINE</span>
                    <h3>Janji Temu yang Mudah di NCC!</h3>
                    <p>Temukan kenyamanan dan kemudahan konsultasi gizi online di NCC. Dengan fitur janji temu online yang simpel, kamu dapat dengan mudah mengatur pertemuan langsung dengan ahli gizi terpercaya kami. Dapatkan bimbingan dan rekomendasi nutrisi yang sesuai dengan kebutuhanmu, tanpa harus keluar rumah. Jangan khawatir, kami siap membantu kamu mencapai tujuan kesehatanmu dengan penuh semangat dan dukungan.</p>
                    <ul class="list">
                        <li><i class="fa fa-check"></i>Konsultasi gizi online di NCC memberikan kemudahan akses melalui perangkatmu sendiri.</li>
                        <li><i class="fa fa-check"></i>Dapatkan kenyamanan dan fleksibilitas dengan memilih waktu sesuai jadwalmu.</li>
                        <li><i class="fa fa-check"></i>Ahli gizi terpercaya kami memberikan dukungan pribadi yang sesuai dengan kebutuhanmu.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="rounded bg-sky px-4 py-4">
                    <img src="{{asset('fe_assets/img/chat.png')}}" alt="">
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
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt adhuc persius.</p>
                </div>
            </div>
        </div>
        @if(count($recipe) == 0)
            <h5 class="text-center text-secondary">Data Resep Kosong</h5>
        @endif
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
                                <div>
                                    @foreach ($data->category as $cat)
                                        <span class="badge bg-info text-white">{{$cat->category->name}}</span>
                                    @endforeach
                                </div>
                                <h2><a href="{{route('resep.detail', $data->id)}}">{{$data->name}}</a></h2>

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
