@section('title', '| Register')
@section('hero-title', 'Register.')

<html>
@include('theme.partials.head')

<body>
    <!-- Start Header/Navigation -->
    @include('theme.partials.nav')
    <!-- End Header/Navigation -->


    <!-- Start Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>@yield('hero-title')</h1>
                        <p class="mb-4">join over 100K derivers to our parking. </p>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="hero-img-wrap">
                        <img style="height:330px;weidth:330px;transform: translate(330px,-20px);"
                            src="{{ asset('assets') }}/images/register1.png" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->


    <!-- Start Contact Form -->
    <div class="untree_co-section">
        <div class="container">

            <div class="block">
                <div class="row justify-content-center">


                    <div class="col-md-8 col-lg-8 pb-4" style="transform: translateX(160px)">

                        <form action="{{ route('register.post') }}" method="POST">
                            @csrf
                            <div class="row">
                                <!-- Name -->
                                <div class="col-8">
                                    <div class="form-group">
                                        <label class="text-black" for="name">Name</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            value="{{ old('name') }}">
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>
                                </div>
                                <!-- Email -->
                                <div class="col-8 mb-4">
                                    <div class="form-group">
                                        <label class="text-black" for="email">Email</label>
                                        <input type="email" name="email" class="form-control" id="email"
                                            value="{{ old('email') }}">
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                </div>

                                <!-- Password -->
                                <div class="col-8 mb-4">
                                    <div class="form-group">
                                        <label class="text-black" for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password">
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                </div>

                                <!-- Confirm Password -->
                                <div class="col-8 mb-4">
                                    <div class="form-group">
                                        <label class="text-black" for="password_confirmation">Confirm Password</label>
                                        <input type="password" class="form-control" id="password_confirmation"
                                            name="password_confirmation">
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                    </div>
                                </div>
                            </div>

                            <button style="background-color: #3b5d50" type="submit"
                                class="btn btn-primary-hover-outline mb-4">Register</button>
                            <a href="{{ route('login.post') }}" class="mx-3">Already have an account?</a>
                        </form>
                        <!--------------------------- GOOGLE BUTTON -->
                        <button
                            style="background-color: #fff;color:black;border-radius: 5px;width: 65%;border-color: gray"
                            type="submit" class="btn btn-primary-hover-outline mb-4"><img
                                style="height:22px;transform: translateX(-23px)"
                                src="{{ asset('assets') }}/images/google.png" alt=""> Log in with Google
                        </button>
                        <!--------------------------- FACEBOOK BUTTON -->
                        <button
                            style="background-color: #fff;color:black;border-radius: 5px;width: 65%;border-color: gray"
                            type="submit" class="btn btn-primary-hover-outline mb-4"><img
                                style="height:24px;transform: translateX(-15px)"
                                src="{{ asset('assets') }}/images/facebook.png" alt=""> Log in with Facebook
                        </button>
                        <!----------------------------------------------->

                    </div>

                </div>

            </div>

        </div>


    </div>

    <!-- End Contact Form -->


    @include('theme.partials.scripts')
</body>

</html>
{{-- pattern="[A-Za-z]" --}}
