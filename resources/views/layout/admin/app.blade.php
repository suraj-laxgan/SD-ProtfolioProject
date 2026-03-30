<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="suraj-theme"
    data-assets-path="{{ asset('backend/assets/') }}" data-template="SD-admin-panel">

<head>
    <!-- Required Meta -->
    <meta charset="UTF-8">
    {{-- Ensures the browser correctly displays characters (UTF-8 standard). --}}

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Required for Bootstrap and mobile responsiveness. --}}

    <meta name="description" content="@yield('meta_description', 'Find and register for exciting events easily with our Event Manager platform.')">
    {{-- Helps search engines understand your page. --}}

    <meta name="keywords" content="@yield('meta_keywords', 'events, event manager, conferences, meetups')">
    {{-- Not very important today but still sometimes included. --}}

    <link rel="canonical" href="{{ url()->current() }}">
    {{-- This prevents duplicate SEO issues. --}}

    <meta name="author" content="Suraj Das">

    <!-- Laravel CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Dashboard')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}

    {{-- Need for admin pannel layout  Start --}}

    <!-- Favicon -->
    {{-- <link rel="icon" type="image/x-icon" href="{{ asset('backend/assets/img/favicon/favicon.ico') }}" /> --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('images/suraj_favicon_48.ico') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/css/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/apex-charts/apex-charts.css') }}" />



    {{-- Need for admin pannel layout  End --}}

    <!-- Page Specific CSS -->
    @stack('styles')


</head>
{{-- @include('layouts.admin.header') --}}

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu or sidebar -->
            @include('layouts.admin.menu')
            <!-- Navbar -->
            <div class="layout-page">
                @include('layouts.admin.navigation')
                <div class="content-wrapper">
                    <!-- Main Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        @include('layouts.admin.alerts')
                        @yield('content')
                    </div>
                    <!-- Footer -->
                    @include('layouts.admin.footer')
                </div>
            </div>
        </div>
    </div>


    <!-- Global JS -->
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> --}}
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}



    {{-- New Script --}}

    <!-- Helpers -->
    <script src="{{ asset('backend/assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('backend/assets/js/config.js') }}"></script>
    <!-- Core JS -->
    <script src="{{ asset('backend/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('backend/assets/vendor/js/menu.js') }}"></script>

    <!-- Vendors JS -->
    <script src="{{ asset('backend/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('backend/assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('backend/assets/js/dashboards-analytics.js') }}"></script>

    <!-- Global AJAX CSRF Setup -->
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        });
    </script>

    <!-- Page Specific JS -->
    @stack('scripts')
</body>

</html>
