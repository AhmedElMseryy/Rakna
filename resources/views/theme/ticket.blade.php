<?php
use App\Models\Qr;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

$qr = Qr::latest('id')->first();
if ($qr) {
    $qrCode = QrCode::size(200)->generate($qr->qr);
} else {
    $qrCode = 0;
}
?>

@extends('theme.master')

@section('title', '| Ticket')
@section('hero-title', 'User Ticket Summary.')
@section('ticket-active', 'active')

<!---------------------------- hero - image -->
@section('hero-img')
    <img src="{{ asset('assets') }}/images/ticket3.png" class="bill-photo">
@endsection
<!--------------------------------------------->

<!---------- paragraph  -->
@section('pragraph')

@endsection
<!--------------------------->

@section('content')

    <div class="vv">
        <a class="qr1" href="">Active Parking</a>
        @if ($time)
            <a class="qr2" href="{{ route('theme.ticket-past') }}">Past Parking</a>
        @endif
    </div>

    <!-------------------------------------------------------- TICKET SUMMARY CASH -->

    <div id="visa" class="ticket">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <img src="{{ asset('assets') }}/images/ticket4.png" class="qr-photo">


        <div class="text-center mb-2">
            <img class="ticket-photo" src="{{ asset('assets') }}/images/ticket1.png"><span class="vodafone">User Ticket
                Summary</span>
        </div>

        <div id="form" class="row ">

            @if ($time)
                @if (Auth::user()->email == $time->user->email)
                    <div class="col-md-12 col-lg-9 pb-4">
                        <!-- TICKET SUMMARY  -->

                        <!-- NAME -->
                        <div>
                            <h3> <span class="qr-style">Name:</span> {{ Auth::user()->name }}</h3>
                        </div>

                        <!-- EMAIL -->
                        <div>
                            <h3> <span class="qr-style">Email :</span> {{ Auth::user()->email }}</h3>
                        </div>

                        <!-- ARRIVING TIME -->
                        <div>
                            <h3> <span class="qr-style">Arriving Time:</span> {{ $time->time_from }}</h3>
                        </div>

                        <!-- LEAVING TIME -->
                        <div>
                            <h3> <span class="qr-style">Leaving Time:</span>{{ $time->time_to }}</h3>
                        </div>

                        <!-- PLACE -->
                        <div>
                            <h3><span class="qr-style">Place :</span> {{ $time->place }}</h3>

                        </div>

                    </div>

                    <!-- QR-PHOTO -->
                    <div class="col-md-5 col-lg-3 pb-4 mx-auto w-auto">
                        @if ($qrCode)
                            <img class="qr-code" src="data:image/svg+xml;base64,{{ base64_encode($qrCode) }}">
                        @endif
                    </div>


                    <!-- END TICKET SUMMARY -->

                @endif
            @else
                <div class="text-center alert alert-danger">
                    <p>No Past Reservation</p>
                </div>
            @endif

        </div>

    </div>

    <!-- Two Button -->
    @if ($time)
        <div class=" d-flex gap-5 justify-content-center mb-4">
            {{-- <a href="{{ route('appointment.cancel', $time->id) }}" id="btn-cancel" type="submit"
                class="btn btn-primary-hover-outline">Cancel</a> --}}

            <a id="btn-cancel" type="submit" class="btn btn-primary-hover-outline">Cancel</a>

            <button id="btn-renewal" type="submit" class="btn btn-primary-hover-outline">Renewal</button>
        </div>
    @endif



    <!-------------------------------------------------------- END TICKET SUMMARY CASH -->


@endsection
