<!doctype html>
<html lang="en">

@include('theme.partials.head')

<body>

    <!-- Start Header/Navigation -->
    @include('theme.partials.nav')
    <!-- End Header/Navigation -->

    <!-- Start Hero Section -->
    @include('theme.partials.hero')
    <!-- End Hero Section -->

    <!-- Differenr Content -->
    @yield('content')
    <!-- ================= -->

    <!-- Start Footer Section -->
    @include('theme.partials.footer')
    <!-- End Footer Section -->


    @include('theme.partials.scripts')
</body>

</html>
