@extends('layouts.front')
@section('content-app')
<div class="breadcrumbs overlay">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2>Service</h2>
                    <ul class="bread-list">
                        <li><a href="index-2.html">Home</a></li>
                        <li><i class="icofont-simple-right"></i></li>
                        <li class="active">Service</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="services section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-service">
                    <i class="icofont icofont-prescription"></i>
                    <h4><a href="service-details.html">General Treatment</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut
                        imperdiet. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-service">
                    <i class="icofont icofont-tooth"></i>
                    <h4><a href="service-details.html">Teeth Whitening</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut
                        imperdiet. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-service">
                    <i class="icofont icofont-heart-alt"></i>
                    <h4><a href="service-details.html">Heart Surgery</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut
                        imperdiet. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-service">
                    <i class="icofont icofont-listening"></i>
                    <h4><a href="service-details.html">Ear Treatment</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut
                        imperdiet. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-service">
                    <i class="icofont icofont-eye-alt"></i>
                    <h4><a href="service-details.html">Vision Problems</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut
                        imperdiet. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-service">
                    <i class="icofont icofont-blood"></i>
                    <h4><a href="service-details.html">Blood Transfusion</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut
                        imperdiet. </p>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="clients overlay">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="owl-carousel clients-slider">
                    <div class="single-clients">
                        <img src="img/client1.png" alt="#">
                    </div>
                    <div class="single-clients">
                        <img src="img/client2.png" alt="#">
                    </div>
                    <div class="single-clients">
                        <img src="img/client3.png" alt="#">
                    </div>
                    <div class="single-clients">
                        <img src="img/client4.png" alt="#">
                    </div>
                    <div class="single-clients">
                        <img src="img/client5.png" alt="#">
                    </div>
                    <div class="single-clients">
                        <img src="img/client1.png" alt="#">
                    </div>
                    <div class="single-clients">
                        <img src="img/client2.png" alt="#">
                    </div>
                    <div class="single-clients">
                        <img src="img/client3.png" alt="#">
                    </div>
                    <div class="single-clients">
                        <img src="img/client4.png" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="appointment">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>We Are Always Ready to Help You. Book An Appointment</h2>
                    <img src="img/section-img.png" alt="#">
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <form class="form" action="#">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="name" type="text" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="email" type="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="phone" type="text" placeholder="Phone">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="nice-select form-control wide" tabindex="0"><span
                                        class="current">Department</span>
                                    <ul class="list">
                                        <li data-value="1" class="option selected ">Department</li>
                                        <li data-value="2" class="option">Cardiac Clinic</li>
                                        <li data-value="3" class="option">Neurology</li>
                                        <li data-value="4" class="option">Dentistry</li>
                                        <li data-value="5" class="option">Gastroenterology</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="nice-select form-control wide" tabindex="0"><span
                                        class="current">Doctor</span>
                                    <ul class="list">
                                        <li data-value="1" class="option selected ">Doctor</li>
                                        <li data-value="2" class="option">Dr. Akther Hossain</li>
                                        <li data-value="3" class="option">Dr. Dery Alex</li>
                                        <li data-value="4" class="option">Dr. Jovis Karon</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" placeholder="Date" id="datepicker">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea name="message" placeholder="Write Your Message Here....."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <div class="button">
                                    <button type="submit" class="btn">Book An Appointment</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <p>( We will be confirm by an Text Message )</p>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-md-12 ">
                <div class="appointment-image">
                    <img src="img/contact-img.png" alt="#">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="newsletter section">
    <div class="container">
        <div class="row ">
            <div class="col-lg-6  col-12">

                <div class="subscribe-text ">
                    <h6>Sign up for newsletter</h6>
                    <p class>Cu qui soleat partiendo urbanitas. Eum aperiri indoctum eu,<br> homero alterum.</p>
                </div>

            </div>
            <div class="col-lg-6  col-12">

                <div class="subscribe-form ">
                    <form action="https://wpthemesgrid.com/themes/mediplus/mail/mail.php" method="get"
                        class="newsletter-inner">
                        <input name="EMAIL" placeholder="Your email address" class="common-input"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'"
                            required type="email">
                        <button class="btn">Subscribe</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection