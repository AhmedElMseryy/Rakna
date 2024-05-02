<footer class="footer-section">
    <div class="container relative">

        {{-- <div class="img">
            <img src="{{ asset('assets') }}/images/sofa.png" alt="Image" class="img-fluid">
        </div> --}}

        <div class="row">
            <div class="col-lg-8">
                <div class="subscription-form">
                    <h3 class="d-flex align-items-center"><span class="me-1"><img
                                src="{{ asset('assets') }}/images/envelope-outline.svg" alt="Image"
                                class="img-fluid"></span><span>Subscribe to Newsletter</span></h3>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <!-- Subscribers Form -->
                    <form action="{{ route('subscribers.store') }}" method="POST" class="row g-3">
                        @csrf
                        <!-- Name -->
                        <div class="col-auto">
                            <input type="text" value="{{ old('name') }}" name="name" class="form-control"
                                placeholder="Enter your name">
                        </div>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <!-- Email -->
                        <div class="col-auto">
                            <input type="email" value="{{ old('email') }}" name="email" class="form-control"
                                placeholder="Enter your email">
                        </div>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary">
                                <span class="fa fa-paper-plane"></span>
                            </button>
                        </div>
                    </form>
                    <!-- End Subscriber Form -->
                </div>
            </div>
        </div>

        <div class="row g-5 mb-5">
            <div class="col-lg-4">
                <div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Rakna<span>.</span></a>
                </div>
                <p class="mb-4">Enter easily with your mobile parking pass
                    Your place is waiting – pull in and go do your thing</p>

                <ul class="list-unstyled custom-social">
                    <li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
                    <li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
                    <li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
                </ul>
            </div>

            {{-- ================================================ --}}
            <div class="col-lg-8">
                <div class="row links-wrap">
                    <div class="col-6 col-sm-6 col-md-3">
                        <ul class="list-unstyled">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Parking</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-sm-6 col-md-3">
                        <ul class="list-unstyled">
                            <li><a href="#"></a></li>
                            <li style="text-align: center">
                                <b style="font-size: 16px">Our Services Providers :</b>
                            </li>

                            <li><a href="#"></a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-sm-6 col-md-3">

                        <ul class="list-unstyled">
                            <li> <img style="height:130px" class="mt-3" src="{{ asset('assets') }}/images/shell.svg"
                                    alt=""></li>

                        </ul>
                    </div>

                    <div class="col-6 col-sm-6 col-md-3">
                        <ul class="list-unstyled">
                            <li> <img class="mt-5" src="{{ asset('assets') }}/images/logo 4.jpg" alt=""></li>

                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!--=============================================================================================-->
        <div class="border-top copyright">
            <div class="row pt-4">
                <div class="col-lg-6">
                    <p class="mb-2 text-center text-lg-start">Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>. All Rights Reserved. &mdash; Designed with love by <a
                            href="https://untree.co">Rakna Team</a> Distributed By <a
                            hreff="https://themewagon.com">Ahmed ElMsery</a>
                        <!-- License information: https://untree.co/license/ -->
                    </p>
                </div>

                <div class="col-lg-6 text-center text-lg-end">
                    <ul class="list-unstyled d-inline-flex ms-auto">
                        <li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>

            </div>
        </div>
        <!--=============================================================================================-->

    </div>
</footer>
