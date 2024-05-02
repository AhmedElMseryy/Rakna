@extends('theme.master')

@section('title', '| Reviews')
@section('hero-title', 'Reviews')
@section('review-active', 'active')

<!-- hero - image -->
@section('hero-img')
    <img style="height:360px;weidth:360px;transform: translate(290px,40px);" src="{{ asset('assets') }}/images/reviews.png"
        class="img-fluid">
@endsection
<!------------------->

<!-- paragraph  -->
@section('pragraph')
    Thanks for choosing us, share your experience with us <br> by filling out this form .
@endsection
<!------------------->

@section('content')
    <!-- Start Contact Form -->
    <div class="untree_co-section">
        <div class="container">

            <div class="block">
                <div class="row justify-content-center">

                    <div class="col-md-8 col-lg-8 pb-4">

                        <!------ CUSTOMER OPINIONS ----->
                        <div style="text-align: center;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
                            <p>
                            <h2><b><span style="color: black">Customer</span> <span
                                        style="color: #3b5d50">opinions</span></b></h2>
                            </p>
                        </div><br><br>
                        <!------------------------------->


                        @if (session('rev'))
                            <div class="alert alert-success">
                                {{ session('rev') }}
                            </div>
                        @endif
                        <!-- CONTACT FORM -->
                        <form action="{{ route('reviews.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <!-- Name -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="text-black" for="name">Name</label>
                                        <input type="text" name="name" value="{{ old('name') }}"
                                            class="form-control" id="name">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- RATING -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="text-black" for="rate">Your Rating</label>
                                        <input type="text" name="rate" value="{{ old('rate') }}"
                                            class="form-control" id="rate">
                                        @error('rate')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- Email -->
                            <div class="form-group">
                                <label class="text-black" for="email">Email address</label>
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control"
                                    id="email">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- Message -->
                            <div class="form-group mb-5">
                                <label class="text-black" for="comment">Message</label>
                                <textarea name="comment" class="form-control" id="comment" cols="30" rows="5">{{ old('comment') }}</textarea>
                                @error('comment')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                            <button type="submit" class="btn btn-primary-hover-outline">Send Message</button>
                        </form>
                        <!-- END CONTACT FORM -->

                    </div>

                </div>

            </div>

        </div>


    </div>

    <!-- End Contact Form -->

    <!-- Start Testimonial Slider -->
    @include('theme.partials.testimonials')
    <!-- End Testimonial Slider -->
@endsection
