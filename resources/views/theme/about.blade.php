@extends('theme.master')

@section('title', '| About Us')
@section('hero-title', 'About Us')
@section('about-active', 'active')

<!-- hero - image -->
@section('hero-img')
    <img style="height:430px;weidth:430px;transform: translate(270px,10px);" src="{{ asset('assets') }}/images/about.png"
        class="img-fluid m me-4">
@endsection
<!------------------->

<!-- paragraph  -->
@section('pragraph')
    A world where parking is seamlessly integrated into our travels through the use of smart technology.
@endsection
<!------------------->

@section('content')
    <!-- Start Why Choose Us Section -->
    <div class="why-choose-section">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <h2 class="section-title">Why Choose Us</h2>
                    <p>Say goodbye to circling the block in search of a parking space. Get to where you’re going faster by
                        driving straight from A to B and pay the best price guaranteed for your parking space.</p>

                    <div class="row my-5">
                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="{{ asset('assets') }}/images/truck.svg" alt="Image" class="imf-fluid">
                                </div>
                                <h3>Fast &amp; Easy Parking</h3>
                                <p>Book and manage your parking from anywhere through the Rakna app or web.</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="{{ asset('assets') }}/images/bag.svg" alt="Image" class="imf-fluid">
                                </div>
                                <h3>Easy to Shop</h3>
                                <p>We provide you with all the spare parts you need for your car.</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="{{ asset('assets') }}/images/support.svg" alt="Image" class="imf-fluid">
                                </div>
                                <h3>Services</h3>
                                <p>We provide you with all the services you need for your car.</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="{{ asset('assets') }}/images/return.svg" alt="Image" class="imf-fluid">
                                </div>
                                <h3>Hassle Free Returns</h3>
                                <p>You can easily cancel your reservation and get your money back.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="img-wrap">
                        <img src="{{ asset('assets') }}/images/parking.jpg" alt="Image" class="img-fluid">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Why Choose Us Section -->

    <!---------------------------------------------------------------------------OUR TEAM-->
    <!-- Start Team Section -->
    <div class="untree_co-section">
        <div class="container">

            <div class="row mb-5">
                <div class="col-lg-5 mx-auto text-center">
                    {{-- <h2 class="section-title">Our Team</h2> --}}
                    <h2 style="text-align: center;color:black;font:bold;"><b>Our Team</b></h2>
                </div>
            </div>

            <div class="row">

                <!-- Start Column 1 -->
                <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                    <img src="{{ asset('assets') }}/images/photo.jpg" class="img-fluid mb-5">
                    <h3 style="color: black;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif" clas><span
                            class="">Ahmed</span> Elmsery</h3>
                    <span class="d-block position mb-4"><b>Back-End Developer.</b></span>
                    <p>I am a student in
                        Facualty of computer information scince Mansoura University.</p>
                    {{-- <p class="mb-0"><a href="#" class="more dark">Learn More <span
                                class="icon-arrow_forward"></span></a></p> --}}
                </div>
                <!-- End Column 1 -->

                <!-- Start Column 2 -->
                <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                    <img src="{{ asset('assets') }}/images/photo5.jpg" class="img-fluid mb-5">

                    <h3 style="color: black;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif" clas><span
                            class="">Ahmed</span> Elmsery</h3>
                    <span class="d-block position mb-4"><b>Front-End Developer.</b></span>
                    <p>I am a student in
                        Facualty of computer information scince Mansoura University.</p>
                    {{-- <p class="mb-0"><a href="#" class="more dark">Learn More <span
                                class="icon-arrow_forward"></span></a></p> --}}

                </div>
                <!-- End Column 2 -->

                <!-- Start Column 3 -->
                <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                    <img src="{{ asset('assets') }}/images/photo6.jpg" class="img-fluid mb-5">
                    <h3 style="color: black;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif" clas>
                        <span class="">Ahmed</span> Elmsery
                    </h3>
                    <span class="d-block position mb-4"><b>UI-UX Designer.</b></span>
                    <p>I am a student in
                        Facualty of computer information scince Mansoura University.</p>
                    {{-- <p class="mb-0"><a href="#" class="more dark">Learn More <span
                                class="icon-arrow_forward"></span></a></p> --}}
                </div>
                <!-- End Column 3 -->

                <!-- Start Column 4 -->
                <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                    <img src="{{ asset('assets') }}/images/photo4.jpg" class="img-fluid mb-5">

                    <h3 style="color: black;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif" clas><span
                            class="">Ahmed</span> Elmsery</h3>
                    <span class="d-block position mb-4"><b>Full Stack.</b></span>
                    <p>I am a student in
                        Facualty of computer information scince Mansoura University.</p>
                    {{-- <p class="mb-0"><a href="#" class="more dark">Learn More <span
                                class="icon-arrow_forward"></span></a></p> --}}


                </div>
                <!-- End Column 4 -->

            </div>
        </div>
    </div>
    <!-- End Team Section -->
    <!------------------------------------------------------------------------------------- END TEAM-->
    <!-- Start Testimonial Slider -->
    @include('theme.partials.testimonials')
    <!-- End Testimonial Slider -->
@endsection
