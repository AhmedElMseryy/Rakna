<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

    <div class="container">
        {{-- <a class="navbar-brand" href="index.html">Rakna </a> --}}

        <!-- NAV-BAR -->
        <a class="navbar-brand" href="{{ route('theme.index') }}"><img style="height: 50px;weidth:50px"
                src="{{ asset('assets') }}/images/Sign-logo.svg" /> </a>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
            aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li class=" nav-item @yield('home-active')">
                    <a class="nav-link" href="{{ route('theme.index') }}">Home</a>
                </li>
                <li class="@yield('parking-active')"><a class="nav-link" href="{{ route('theme.parkingtime') }}">Parking</a>
                </li>
                <li class="@yield('about-active')"><a class="nav-link" href="{{ route('theme.about') }}">About us</a></li>
                <li class="@yield('services-active')"><a class="nav-link" href="{{ route('product.services') }}">Services</a>
                </li>
                <li class="@yield('review-active')"><a class="nav-link" href="{{ route('theme.reviews') }}">Reviews</a></li>
                <li class="@yield('contact-active')"><a class="nav-link" href="{{ route('theme.contact') }}">Contact us</a>
                </li>
                @if (Auth::check())
                    <li class="@yield('ticket-active')"><a class="nav-link" href="{{ route('theme.ticket') }}">Ticket</a>
                    </li>
                @endif
            </ul>

            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                @if (!Auth::check())
                    <li><a class="nav-link" href="{{ route('login') }}"><img
                                src="{{ asset('assets') }}/images/user.svg"></a></li>
                @else
                    <!--============================================================-->
                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                        <ul class="dropdown-menu">
                            {{-- <li class="nav-item"><a class="nav-link" href="#">Logout</a></li> --}}
                        </ul>
                    </li>
                    <!-- CART -->
                    <li><a class="nav-link" href="{{ route('cart') }}"><img
                                src="{{ asset('assets') }}/images/cart.svg"></a></li>


                    <!-- Log Out -->
                    <li>
                        <form action="{{ route('logout') }}" method="post" id="myForm">
                            @csrf
                        </form>
                        <a class="nav-link" href="#" onclick="submitForm()"><img style="height: 25px"
                                src="{{ asset('assets') }}/images/logout2.svg"></a>
                        <script>
                            function submitForm() {
                                // Triggering the form submission
                                document.getElementById('myForm').submit();
                            }
                        </script>
                    </li>
                    <!--============================================================-->
                @endif

                @if (!Auth::check())
                    <!--CART-->
                    <li><a class="nav-link" href="{{ route('cart') }}"><img
                                src="{{ asset('assets') }}/images/cart.svg"></a></li>
                @endif
            </ul>
        </div>
    </div>

</nav>
{{-- javascript:$('form').submit(); --}}
