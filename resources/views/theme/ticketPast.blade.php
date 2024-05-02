@extends('theme.master')

@section('title', '| Past Parking')
@section('hero-title', 'User Ticket Summary.')
{{-- @section('parking-active', 'active') --}}

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
        <a class="past1" href="{{ route('theme.ticket') }}">Active Parking</a>
        <a class="past2" href="">Past Parking</a>
    </div>

    <!-------------------------------------------------------- TICKET SUMMARY CASH -->

    @foreach ($PastTime as $ti)
        @if (Auth::user()->email == $ti->user->email)
            @php
                $qrr = $ti->place . $ti->time_from . $ti->created_at;
                $qrcode = QrCode::size(200)->generate($qrr);

            @endphp

            <div id="visa">

                <img src="{{ asset('assets') }}/images/ticket4.png" class="qr-photo">


                <div class="text-center mb-2">
                    <img class="ticket-photo" src="{{ asset('assets') }}/images/ticket1.png"><span class="vodafone">User
                        Ticket
                        Summary</span>
                </div>

                <div id="form" class="row ">

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
                            <h3> <span class="qr-style">Arriving Time:</span> {{ $ti->time_from }}</h3>
                        </div>

                        <!-- LEAVING TIME -->
                        <div>
                            <h3> <span class="qr-style">Leaving Time:</span>{{ $ti->time_to }}</h3>
                        </div>

                        <!-- DURATION -->
                        <div>
                            <h3><span class="qr-style">Place :</span> {{ $ti->place }}</h3>
                        </div>
                    </div>
                    <!-- QR-PHOTO -->
                    <div class="col-md-12 col-lg-3 pb-4">
                        <img class="qr-code" src="data:image/svg+xml;base64,{{ base64_encode($qrcode) }}">
                    </div>

                    <!-- END TICKET SUMMARY -->


                </div>

            </div>
        @endif
    @endforeach
    <!-------------------------------------------------------- END TICKET SUMMARY CASH -->

@endsection
