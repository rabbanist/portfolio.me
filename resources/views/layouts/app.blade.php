<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>Portfolio | @yield('title')</title>
    <!-- Bootstrap CSS -->
    @include('components.default.styles')
</head>

<body>
    <!--================ Start Header Area =================-->
    @include('components.default.header')
    <!--================ End Header Area =================-->

    @yield('content')

    <!--================Footer Area =================-->
    @include('components.default.footer')
    <!--================End Footer Area =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    @include('components.default.scripts')
</body>

</html>
