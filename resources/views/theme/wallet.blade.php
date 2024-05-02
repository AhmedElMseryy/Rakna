@extends('theme.master')

@section('title', '| Wallet')
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

    <div class="vv">
        <a class="wallet1" href="{{ route('stripe.post') }}">VISA</a>
        <a class="wallet2" href="">Wallet</a>
    </div>

    <!-------------------------------------------------------- VODAFONE CASH -->

    <div id="visa" class="untree_co-section">

        <img src="{{ asset('assets') }}/images/vodafonecash.png" class="vodafonecash-photo">

        <div class="text-center mb-2">
            <img class="vodafone-photo" src="{{ asset('assets') }}/images/vodafone.png"><span class="vodafone">Vodafone
                Cash</span>
        </div>

        <div class="">
            <div class="block">
                <div id="form" class="row ">

                    <div class="col-md-12 col-lg-12 pb-4">
                        <!-- VODAFONE CASH FORM -->
                        <form action="{{ route('theme.ticket') }}" method="get">
                            @csrf
                            <!-- Mobile Number -->
                            <div class="row d-flex align-items-start mb-2">
                                <div class="col-8 ">
                                    <div class="form-group">
                                        <label class="text-black" for="number">Mobile Number</label>
                                        <input type="text" name="" value="" class="form-control"
                                            id="number" placeholder="Enter Your Mobile Number">

                                    </div>
                                </div>
                                <button id="btn-vo"
                                    class="btn btn-primary-hover-outline col-3 align-self-end mt-2">send</button>
                            </div>

                            <!-- PIN -->
                            <div class="row mb-2">
                                <div class="col-14">
                                    <div class="form-group">
                                        <label class="text-black" for="pin">PIN-الرقم السرى للمحفظه</label>
                                        <input type="password" name="" value="" class="form-control"
                                            id="pin" placeholder="*******">

                                    </div>
                                </div>
                            </div>

                            <!-- OTP -->
                            <div class="row mb-4">
                                <div class="col-14 ">
                                    <div class="form-group">
                                        <label class="text-black" for="otp">OTP-الرقم السرى المتغير</label>
                                        <input type="password" name="" value="" class="form-control"
                                            id="otp" placeholder="*******">
                                    </div>
                                </div>
                            </div>

                            <button id="btn-visa" type="submit" class="btn btn-primary-hover-outline">Complete
                                Payment <img class="vector" src="{{ asset('assets') }}/images/vector.png"></button>
                        </form>
                        <!-- END VODAFONE CASH FORM -->

                    </div>

                </div>
            </div>
        </div>

    </div>

    <!-------------------------------------------------------- END VODAFONE CASH -->

    <!---------------------------------------------------------------------------------------- ORANGE CASH -->

    <div id="visa" class="untree_co-section">

        <div class="text-center mb-2">
            <img class="orange-photo" src="{{ asset('assets') }}/images/orange-icone.png"><span class="vodafone">Orange
                Cash</span>
        </div>

        <div class="">
            <div class="block">
                <div id="form" class="row ">

                    <div class="col-md-12 col-lg-12 pb-4">
                        <!-- ORANGE CASH FORM -->
                        <form action="{{ route('theme.ticket') }}" method="get">
                            @csrf
                            <!-- Mobile Number -->
                            <div class="row d-flex align-items-start mb-2">
                                <div class="col-8">
                                    <div class="form-group">
                                        <label class="text-black" for="number">Mobile Number</label>
                                        <input type="text" name="" value="" class="form-control"
                                            id="number" placeholder="Enter Your Mobile Number">
                                    </div>
                                </div>
                                <button id="btn-vo"
                                    class="btn btn-primary-hover-outline col-3 align-self-end mt-2">send</button>
                            </div>

                            <!-- PIN -->
                            <div class="row mb-2">
                                <div class="col-14 mb-2">
                                    <div class="form-group">
                                        <label class="text-black" for="pin">PIN-الرقم السرى للمحفظه</label>
                                        <input type="password" name="" value="" class="form-control"
                                            id="pin" placeholder="*******">
                                    </div>
                                </div>
                            </div>

                            <!-- OTP -->
                            <div class="row mb-4">
                                <div class="col-14 ">
                                    <div class="form-group">
                                        <label class="text-black" for="otp">OTP-الرقم السرى المتغير</label>
                                        <input type="password" name="" value="" class="form-control"
                                            id="otp" placeholder="*******">
                                    </div>
                                </div>
                            </div>

                            <button id="btn-visa" type="submit" class="btn btn-primary-hover-outline">Complete
                                Payment <img class="vector" src="{{ asset('assets') }}/images/vector.png"></button>
                        </form>
                        <!-- END ORANGE CASH FORM -->
                    </div>

                </div>
            </div>
        </div>

        <img src="{{ asset('assets') }}/images/orangecash.png" class="orangecash-photo">
    </div>

    <!---------------------------------------------------------------------------------------- END ORANGE CASH -->

@endsection
