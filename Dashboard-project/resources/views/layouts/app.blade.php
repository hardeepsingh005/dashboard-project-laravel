<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Dashboard')</title>
    <!-- bootstrap css bundle -->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    @include('partials.header')
</head>
<body>

    @include('partials.navbar')

    @yield('content')

    @include('partials.footer')
    @include('partials.scripts')
    <!-- bootstrap js bundle -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>