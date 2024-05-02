<div class="hero">
    <div class="container">
        <div class="row  justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>@yield('hero-title')</h1>
                    <p class="mb-4">@yield('pragraph')</p>

                    <p><a href="{{ route('theme.parkingtime') }}" class="btn btn-secondary me-2">Book Now</a><a
                            href="#" class="btn btn-white-outline">Explore</a></p>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="hero-img-wrap">
                    {{-- <img src="{{ asset('assets') }}/images/ncm1.png" class="img-fluid"> --}}
                    @yield('hero-img')
                </div>
            </div>
        </div>
    </div>
</div>



{{-- <img style="margin-right: 100px;height:400px" src="{{ asset('assets') }}/images/about us.svg" class="img-fluid"> --}}
