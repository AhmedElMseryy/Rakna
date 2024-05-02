@extends('theme.master')

@section('title', '| Parking')
@section('hero-title', 'Parking.')
@section('parking-active', 'active')

<!---------------------------- hero - image -->
@section('hero-img')
    <img src="{{ asset('assets') }}/images/parking.png" class="parking-photo">
@endsection
<!--------------------------------------------->

<!---------- paragraph  -->
@section('pragraph')
    Book and manage your parking from anywhere through the Rakna app or web.
@endsection
<!--------------------------->


@section('content')

    <!-- Paragraph -->
    <div class="why-choose-section">

        <h2 style="text-align: center;color:black;font:bold;"><b>Choose Parking Section</b></h2>

    </div>
    <!-- End Paragraph -->


    <!-- Start Parking Section -->
    <div class="product-section pt-0">
        <div class="container">
            <div style="gap: 4rem" class="row d-flex flex-wrap justify-content-center">


                @foreach ($serv4 as $park1)
                    @if ($park1->mqtt == 0)
                        <!------------------------------ START ROW 1 -->
                        <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                            <a class="product-item" href="/addproducttocart/{{ $park1->id }}">
                                <img src="{{ asset('assets') }}/images/{{ $park1->image }}"
                                    class="img-fluid product-thumbnail">
                                <h3 style="font-size: 30px;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"
                                    class="product-title"><b>{{ $park1->name }}</b></h3>

                                <img src="{{ asset('assets') }}/images/stars.png"><br>
                                <span><strong>{{ $park1->price }} EGP</strong></span><br>
                                <button class="park-button"><span>Book Now</span></button>

                            </a>
                        </div>
                        <!------------------------------ END ROW 1 -->
                    @endif
                @endforeach

            </div>
        </div>
    </div>
    <!-- End Parking Section -->

    <!-- Start Parking Section -->
    {{-- <div class="product-section pt-0">
        <div class="container">
            <div style="display: flex;justify-content: center" class="row">

                @foreach ($serv5 as $park2)
                    @if ($park2->mqtt == 0)
                        <!-------------------------- START ROW 2 -->
                        <div style="margin-left: 70px" class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                            <a class="product-item" href="/addproducttocart/{{ $park2->id }}">
                                <img src="{{ asset('assets') }}/images/{{ $park2->image }}"
                                    class="img-fluid product-thumbnail">
                                <h3 style="font-size: 30px;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"
                                    class="product-title"><b>{{ $park2->name }}</b></h3>

                                <img src="{{ asset('assets') }}/images/stars.png"><br>
                                <span><strong>{{ $park2->price }} EGP</strong></span><br>
                                <button class="park-button"><span>Book Now</span></button>

                            </a>
                        </div>
                        <!--------------------------- END ROW 2 -->
                    @endif
                @endforeach

            </div>
        </div>
    </div> --}}
    <!-- End Parking Section -->

@endsection
