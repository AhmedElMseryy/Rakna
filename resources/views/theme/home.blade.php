@extends('theme.master')


@section('hero-title', 'Home')
@section('home-active', 'active')

<!---------------------------- hero - image -->
@section('hero-img')
    <img src="{{ asset('assets') }}/images/ncm1.png" class="img-fluid m me-4" id="home-photo">
@endsection
<!-------------------------------------------->

<!--------------- paragraph  -->
@section('pragraph')
    PARKING JUST GOT A LOT Simpler Book the Best Spaces <br> & Save Up to
    <b style="color: #f9bf29;">50% </b>.
@endsection
<!----------------------------->

@section('content')

    <!-- Start Product Section -->
    <div class="product-section">
        <div class="container">
            <div class="row">

                <!-- Start Column 1 -->
                <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                    <h2 class="mb-4 section-title">Some of services Our partner’s.</h2>
                    <p class="mb-4">We provide you with all the services you need for your car in one place,
                        Choose what is right for you now at the best price. </p>
                    <p><a href="{{ route('product.services') }}" class="btn">Explore</a></p>
                </div>
                <!-- End Column 1 -->

                <!-- Start Column 2 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <div class="product-item">
                        <img src="{{ asset('assets') }}/images/washing.webp" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Car Washing</h3>
                        <strong class="product-price">80 E£</strong>


                    </div>
                </div>
                <!-- End Column 2 -->

                <!-- Start Column 3 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <div class="product-item">
                        <img src="{{ asset('assets') }}/images/oill.webp" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Change Oil</h3>
                        <strong class="product-price">110 E£</strong>


                    </div>
                </div>
                <!-- End Column 3 -->

                <!-- Start Column 4 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <div class="product-item">
                        <img src="{{ asset('assets') }}/images/maintenance.webp" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Maintenance</h3>
                        <strong class="product-price">460 E£</strong>

                    </div>
                </div>
                <!-- End Column 4 -->

            </div>
        </div>
    </div>
    <!-- End Product Section -->

    <!-- Start Why Choose Us Section -->
    <div class="why-choose-section">
        <div class="container">
            <div class="row justify-content-between">
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
                        <img src="{{ asset('assets') }}/images/garage1.jpg" alt="Image" class="img-fluid">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Why Choose Us Section -->

    <!-- Start We Help Section -->
    <div class="we-help-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="imgs-grid">
                        <div class="grid grid-1"><img src="{{ asset('assets') }}/images/hero22.png" alt="Untree.co">
                        </div>
                        {{-- <div class="grid grid-2"><img src="{{ asset('assets') }}/images/hero33.jpg" alt="Untree.co">
                        </div> --}}
                        <div class="grid grid-3"><img src="{{ asset('assets') }}/images/hero44.jpg" alt="Untree.co">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 ps-lg-5">
                    <h2 class="section-title mb-4">We help you park your car safely and easily.</h2>
                    <p>Book a parking in just a few easy clicks Save up to 50% off standard rates.
                        scan your private “Qr code” easly and you get your place
                    </p>

                    <ul class="list-unstyled custom-list my-4">
                        <li>Find your perfect spot now!</li>
                        <li>Save time, reserve online.</li>
                        <li>Park stress-free with us.</li>
                        <li>Secure your spot today!</li>
                        <li>Your parking solution awaits.</li>
                        <li>Reserve your spot hassle-free.</li>
                    </ul>
                    <p><a herf="#" class="btn">Explore</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- End We Help Section -->

    <!-- Start Popular Product -->
    <div style="transform: translateX(150px)" class="popular-product">

        <div class="container">
            <div class="row">

                <!-- ICON 1 -->
                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="product-item-sm d-flex">
                        <div class="thumbnail">
                            <img src="{{ asset('assets') }}/images/fix.png" alt="Image" class="img-fluid">
                        </div>
                        <div class="pt-3" class="pt-3" style="transform: translate(-115px,100px) ">
                            <p><br>
                            <h3><b>Fix your Car</b></h3>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- ICON 2 -->
                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="product-item-sm d-flex">
                        <div class="thumbnail">
                            <img src="{{ asset('assets') }}/images/wash.png" alt="Image" class="img-fluid">
                        </div>
                        <div class="pt-3" class="pt-3" style="transform: translate(-125px,100px) ">
                            <p><br>
                            <h3><b>Wash your Car</b></h3>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- ICON 3 -->
                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="product-item-sm d-flex">
                        <div class="thumbnail">
                            <img src="{{ asset('assets') }}/images/check.png" alt="Image" class="img-fluid">
                        </div>
                        <div class="pt-3" style="transform: translate(-125px,100px) ">
                            <p><br>
                            <h3>Check your Car</h3>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- End Popular Product -->

    <!-- Start Testimonial Slider -->
    @include('theme.partials.testimonials')
    <!-- End Testimonial Slider -->


@endsection
