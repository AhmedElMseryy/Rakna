@extends('theme.master')

@section('title', '| Services')
@section('hero-title', 'Services')
@section('services-active', 'active')

<!---------------------------- hero - image -->
@section('hero-img')
    <img src="{{ asset('assets') }}/images/gear.svg" class=""
        style="height: 390px;width:390px;transform: translateX(230px);">
@endsection
<!--------------------------------------------->

<!---------------- paragraph  -->
@section('pragraph')
    We provide you with all the services you need for your car,<br>
    Choose what's right for you now.
@endsection
<!------------------------------>


@section('content')
    <!--=====================================================================================================-->
    <!-------------- PRODUCTS  ---------------->
    <!--=====================================================================================================-->
    <!-- Paragraph -->
    <div class="why-choose-section">

        <h2 style="text-align: center;color:black;font:bold;"><b>Choosing From Our partner’s services</b></h2>
        <img style="transform: translate(1200px,-20px);height:50px" src="{{ asset('assets') }}/images/tawkel.webp"
            alt="">

    </div>
    <!-- End Paragraph -->

    <!-- Start Product Section -->
    <div class="product-section pt-0">
        <div class="container">
            <div class="row">

                @foreach ($serv as $service)
                    <!-- Start Column 1 -->
                    <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                        <a class="product-item" href="/addproducttocart/{{ $service->id }}">
                            <img src="{{ asset('assets') }}/images/{{ $service->image }}"
                                class="img-fluid product-thumbnail">
                            <h3 class="product-title"><strong>{{ $service->name }}</strong></h3>
                            <strong class="product-price">{{ $service->price }} E£</strong>

                            <span class="icon-cross">
                                <img src="{{ asset('assets') }}/images/cross.svg" class="img-fluid">
                            </span>
                        </a>

                    </div>
                    <!-- End Column 1 -->
                @endforeach


            </div>
        </div>
    </div>
    <!-- End Product Section -->


    <!--=====================================================================================================-->
    <!-------------- SPARE PARTS ---------------->
    <!--=====================================================================================================-->

    <!-- Paragraph -->
    <div class="why-choose-section">
        <h2 style="text-align: center;color:black;font:bold;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
            <b><span style="color: black"> "Spare</span><span style="color: #3b5d50"> Parts" </span> </b>
        </h2>
        <img style="transform: translate(1300px,-20px)" src="{{ asset('assets') }}/images/tawfikia.svg" alt="">
    </div>
    <!-- End Paragraph -->

    <!------------------------------------------------------------------- الصف الاول ----------------------->
    <!-- Start Product Section -->
    <div class="product-section pt-0">
        <div class="container">
            <div class="row">

                @foreach ($serv2 as $spare1)
                    <!---------------------------- Start Column 1 -->
                    <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                        <a class="product-item" href="/addproducttocart/{{ $spare1->id }}">
                            <img style="height: 200px;" src="{{ asset('assets') }}/images/{{ $spare1->image }}"
                                class="img-fluid product-thumbnail">
                            <h3 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:20px"
                                class="product-title">{{ $spare1->name }}</h3>
                            <h3 style="color: red" class="product-price">{{ $spare1->price }} EGP</h3>

                            <span class="icon-cross">
                                <img src="{{ asset('assets') }}/images/cross.svg" class="img-fluid">
                            </span>
                        </a>
                    </div>
                    <!---------------------------- End Column 1 -->
                @endforeach


            </div>
        </div>
    </div>
    <!-- End Product Section -->


    <!----------------------------------------------------------------------------الصف التانى-------------------->
    <!-- Start Product Section -->
    <div class="product-section pt-0">
        <div class="container">
            <div class="row">

                @foreach ($serv3 as $spare2)
                    <!----------------------- Start Column 1 -->
                    <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                        <a class="product-item" href="/addproducttocart/{{ $spare2->id }}">
                            <img style="height: 200px" src="{{ asset('assets') }}/images/{{ $spare2->image }}"
                                class="img-fluid product-thumbnail">
                            <h3 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:20px"
                                class="product-title">{{ $spare2->name }}</h3>
                            <h3 style="color: red" class="product-price">{{ $spare2->price }} EGP</h3>

                            <span class="icon-cross">
                                <img src="{{ asset('assets') }}/images/cross.svg" class="img-fluid">
                            </span>
                        </a>
                    </div>
                    <!----------------------- End Column 1 -->
                @endforeach

            </div>
        </div>
    </div>
    <!-- End Product Section -->
    <center>
        <div class="show-more">
            <button class="button-show">
                <span><a style="color: white;text-decoration: none;" href="https://tawfiqia.com/ar" target="_blank">Show
                        More</a></span></button>
        </div>
    </center>

@endsection
