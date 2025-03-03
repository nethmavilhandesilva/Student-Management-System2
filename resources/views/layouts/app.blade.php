<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ELMS')</title>
    <link rel="icon" href="{{ asset('assets/css/images.png') }}" type="image/png">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    
    <!-- Main stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Stack for additional page-specific styles -->
    @stack('styles')
</head>
<body>

@include('layouts.partials.header')

<!--start sidebar-->
@include('layouts.partials.sidebar')
<!--end sidebar-->

<div class="main-wrapper">
    <!--start navbar-->
    @include('layouts.partials.navbar')
    <!--end top navbar-->

    <main class="main users chart-page" id="skip-target">
        @yield('content')
    </main>

    @include('layouts.partials.footer')
</div>

<!-- Bootstrap Bundle with Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Stack for additional page-specific scripts -->
@stack('scripts')

</body>
</html>
