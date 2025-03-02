@include('layouts.partials.header')

    <div class="main-wrapper">
        <!--start navbar-->
        @include('layouts.partials.navbar')
        <!--end top navbar-->

        <main class="main users chart-page" id="skip-target">
            @yield('content')
        </main>

    @include('layouts.partials.footer')
