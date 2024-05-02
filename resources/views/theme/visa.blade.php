@extends('theme.master')

@section('title', '| Visa')
@section('hero-title', 'Payment Method.')
{{-- @section('parking-active', 'active') --}}

<!---------------------------- hero - image -->
@section('hero-img')
    <img src="{{ asset('assets') }}/images/bill.png" class="bill-photo">
@endsection
<!--------------------------------------------->

<!---------- paragraph  -->
@section('pragraph')

@endsection
<!--------------------------->


@section('content')
    <!-- Start Visa Form -->

    <div class="vv">
        <a class="v1" href="">VISA</a>
        <a class="v2" href="{{ route('theme.wallet') }}">Wallet</a>
    </div>


    <div id="visa" class="untree_co-section">
        <div class="">

            <div class="block">
                <div id="form" class="row ">

                    <div class="col-md-12 col-lg-12 pb-4">


                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <!-- CONTACT FORM -->
                        <form role="form" action="{{ route('stripe.post') }}" method="post" class="require-validation"
                            data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">

                            @csrf
                            <div class="row">
                                <!-- Card Number -->
                                <div class="col-14 mb-2">
                                    <div class="form-group">
                                        <label class="text-black" for="card_number">Card Number</label>
                                        <input type="text" name="card_number" value="" class="form-control"
                                            id="card_number" placeholder="1111-2222-3333-4444">

                                    </div>
                                </div>
                                <!-- Name on Card -->
                                <div class="col-14 mb-2">
                                    <div class="form-group">
                                        <label class="text-black" for="lname">Name on Card</label>
                                        <input type="text" name="" value="" class="form-control"
                                            id="lname" placeholder="Ahmed Elmsery">

                                    </div>
                                </div>

                                <!-- Exp Month -->
                                <div class="col-4 mb-2">
                                    <div class="form-group">
                                        <label class="text-black" for="exp_month">Exp Month</label>
                                        <input type="text" name="exp_month" value="" class="form-control"
                                            id="exp_month" placeholder="MM">
                                    </div>
                                </div>
                                <!-- Exp Year -->
                                <div class="col-4 mb-2">
                                    <div class="form-group">
                                        <label class="text-black" for="exp_year">Exp Year</label>
                                        <input type="text" name="exp_year" value="" class="form-control"
                                            id="exp_year" placeholder="YYYY">

                                    </div>
                                </div>
                                <!-- CVV -->
                                <div class="col-4 mb-2">
                                    <div class="form-group">
                                        <label class="text-black" for="cvc">CVC</label>
                                        <input type="text" name="cvc" value="" class="form-control"
                                            id="cvc" placeholder="ex. 311">
                                    </div>
                                </div>
                                <!-- City -->
                                <div class="col-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-black" for="lname">City</label>
                                        <input type="text" name="" value="" class="form-control"
                                            id="" placeholder="Cairo">
                                    </div>
                                </div>
                                <!-- Zip -->
                                <div class="col-6 mb-4">
                                    <div class="form-group">
                                        <label class="text-black" for="lname">Zip</label>
                                        <input type="text" name="" value="" class="form-control"
                                            id="" placeholder="10001">
                                    </div>
                                </div>

                            </div>

                            <button id="btn-visa" type="submit" class="btn btn-primary-hover-outline">Complete
                                Payment <img class="vector" src="{{ asset('assets') }}/images/vector.png"></button>
                        </form>
                        <!-- END CONTACT FORM -->

                    </div>

                </div>

            </div>

        </div>

        <img src="{{ asset('assets') }}/images/left card.png" class="card-photo">
    </div>

    <!-- End Visa Form -->
@endsection
