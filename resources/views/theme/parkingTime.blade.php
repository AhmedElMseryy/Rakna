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


    <main id="main ">

        <section id="" class="children pt-5 mt-5">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-7 position-relative text-center mt-5 parking-form" data-aos="zoom-in"
                        data-aos-delay="100">
                        <h1 class="three-title">PARKING JUST GOT A LOT <br> <span class="green-title"> SIMPLER </span> </h1>
                        <h4 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"
                            class="side-suptitle my-5">
                            Book a parking in just a few easy clicks <br>
                            Save up to <span style="color: #3b5d50">50%</span> off standard rates
                        </h4>

                        <form action="{{ route('appointments.store') }}" method="POST">

                            <!-- PLACE -->
                            <div class="box form-box">
                                <div class="row">
                                    <div class="col-12">
                                        <select class="places" name="place">
                                            <option selected disabled>Places</option>
                                            <option value="Mansoura">Mansoura</option>
                                            <option value="Cairo">Cairo</option>
                                            <option value="Alex">Alex</option>
                                        </select>
                                    </div>
                                </div>

                                {{-- <form action="{{ route('appointments.store') }}" method="POST"> --}}
                                <div class="row">
                                    @csrf

                                    <!-- START TIME -->
                                    <div class="col-6">
                                        <div>
                                            <label for="time_from" class="label">FROM</label>
                                        </div>
                                        <input type="datetime-local" class="time" id="time_from" name="time_from"
                                            value="2018-07-22" />

                                    </div>

                                    <!-- END TIME -->
                                    <div class="col-6">
                                        <div>
                                            <label for="time_to" class="label">TO</label>
                                        </div>

                                        <input type="datetime-local" class="time" id="time_to" name="time_to"
                                            value="2018-07-22" />
                                    </div>
                                </div>

                                <!-- BUTTON -->
                                <button type="submit" class="btn btn-show w-100 text-wrap" id="button">show parking
                                    spaces</button>
                        </form>

                    </div>

                </div>
                <div class="col-1"></div>
                <div class="col-4 position-relative text-center right-hero" data-aos="zoom-in" data-aos-delay="100">
                    <img class="hero1-img" src="{{ asset('assets') }}/images/hero11.png" alt="" />
                    <img class="hero2-img" src="{{ asset('assets') }}/images/hero22.png" alt="" />
                </div>
            </div>
            </div>
        </section>

    </main>

@endsection
