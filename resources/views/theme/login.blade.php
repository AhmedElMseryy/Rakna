@section('title', '| Login')
@section('hero-title', 'Login.')

<html>
@include('theme.partials.head')

<body>
    <!-- Start Header/Navigation -->
    @include('theme.partials.nav')
    <!-- End Header/Navigation -->


    <!-------------------------- Start Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>@yield('hero-title')</h1>
                        <p class="mb-4">Log into your Rakna account. </p>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="hero-img-wrap">
                        {{-- <img src="{{ asset('assets') }}/images/login2.png" class="img-fluid"> --}}
                        <img src="{{ asset('assets') }}/images/login.png" class=""
                            style="height: 250px;weidth:250px;transform: translate(360px,30px);">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-------------------------- End Hero Section -->


    <!-- Start Login Form -->
    <div class="untree_co-section">
        <div class="container">

            <div class="block">
                <div class="row justify-content-center">


                    <div class="col-md-8 col-lg-8 pb-4" style="transform: translateX(160px)">

                        <form action="{{ route('login.post') }}" method="POST">
                            @csrf
                            <div class="row">
                                <!--------------- Email -->
                                <div class="col-8">
                                    <div class="form-group">
                                        <label class="text-black" for="email">Email</label>
                                        <input type="email" name="email" value="{{ old('email') }}"
                                            class="form-control" id="email">
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                </div>

                                <!--------------- Password -->
                                <div class="col-8 mb-4">
                                    <div class="form-group">
                                        <label class="text-black" for="password">Password</label>
                                        <input type="password" name="password" class="form-control" id="password">
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                </div>
                            </div>
                            <!------------- LOGIN BUTTON -->
                            <button style="background-color: #3b5d50" type="submit"
                                class="btn btn-primary-hover-outline mb-4">Log In</button>
                            <a href="{{ route('register') }}" class="mx-3">Don’t have an account?</a>

                        </form>

                        <!------------------------ GOOGLE BUTTON -->
                        <button
                            style="background-color: #fff;color:black;border-radius: 5px;width: 65%;border-color: gray"
                            type="submit" class="btn btn-primary-hover-outline mb-4"><img
                                style="height:22px;transform: translateX(-23px)"
                                src="{{ asset('assets') }}/images/google.png" alt=""> Log in with Google
                        </button>
                        <!------------------------ FACEBOOK BUTTON -->
                        <button
                            style="background-color: #fff;color:black;border-radius: 5px;width: 65%;border-color: gray"
                            type="submit" class="btn btn-primary-hover-outline mb-4"><img
                                style="height:24px;transform: translateX(-15px)"
                                src="{{ asset('assets') }}/images/facebook.png" alt=""> Log in with Facebook
                        </button>
                    </div>

                </div>

            </div>

        </div>
        {{-- --------------------------- --}}


    </div>

    <!-- End Login Form -->


    @include('theme.partials.scripts')
</body>

</html>
