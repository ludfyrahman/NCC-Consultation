@extends('layouts.front')
@section('content-app')
<div class="breadcrumbs overlay">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2>About Us</h2>
                    <ul class="bread-list">
                        <li><a href="index-2.html">Home</a></li>
                        <li><i class="icofont-simple-right"></i></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="about-area section">
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-lg-6 col-md-12 p-0">
                <div class="about-image">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 p-0">
                <div class="about-content">
                    <span>About Us</span>
                    <h2>Short Story About Fovia Clinic Since 1999</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                        viverra maecenas accumsan lacus vel facilisis.</p>
                    <ul>
                        <li><i class="icofont-tick-mark"></i> Scientific Skills For getting a better result</li>
                        <li><i class="icofont-tick-mark"></i> Communication Skills to getting in touch</li>
                        <li><i class="icofont-tick-mark"></i> A Career Overview opportunity Available</li>
                        <li><i class="icofont-tick-mark"></i> A good Work Environment For work</li>
                        <li><i class="icofont-tick-mark"></i> Scientific Skills For getting a better result</li>
                        <li><i class="icofont-tick-mark"></i> Communication Skills to getting in touch</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="our-vision-area ptb-100 pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-vision-box">
                    <div class="icon">
                        <i class="icofont-tick-mark"></i>
                    </div>
                    <h3>Our Mission</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Quis ipsum suspendisse.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-vision-box">
                    <div class="icon">
                        <i class="icofont-tick-mark"></i>
                    </div>
                    <h3>Our Planning</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Quis ipsum suspendisse.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-vision-box">
                    <div class="icon">
                        <i class="icofont-tick-mark"></i>
                    </div>
                    <h3>Our Vision</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Quis ipsum suspendisse.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="our-mission-area ptb-100 pt-0">
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-lg-6 col-md-12 p-0">
                <div class="our-mission-content">
                    <span class="sub-title">Our Mission & Vision</span>
                    <h2>Better Information, Better Health</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="icofont-doctor"></i>
                            </div>
                            <span>Professional Staff</span>
                            Lorem ipsum dolor sit amet sit, consectetur adipiscing elit.
                        </li>
                        <li>
                            <div class="icon">
                                <i class="icofont-kid"></i>
                            </div>
                            <span>Newborn Care</span>
                            Lorem ipsum dolor sit amet sit, consectetur adipiscing elit.
                        </li>
                        <li>
                            <div class="icon">
                                <i class="icofont-laboratory"></i>
                            </div>
                            <span>Sufficient Lab Tests</span>
                            Lorem ipsum dolor sit amet sit, consectetur adipiscing elit.
                        </li>
                        <li>
                            <div class="icon">
                                <i class="icofont-tooth"></i>
                            </div>
                            <span>Tooth Extraction</span>
                            Lorem ipsum dolor sit amet sit, consectetur adipiscing elit.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 p-0">
                <div class="our-mission-image">
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
