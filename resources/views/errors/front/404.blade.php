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

    <title>@yield('title', '404')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}

    {{-- Need for admin pannel layout  Start --}}

    <!-- Favicon -->
    {{-- <link rel="icon" type="image/x-icon" href="{{ asset('backend/assets/img/favicon/favicon.ico') }}" /> --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('images/suraj_favicon_48.ico') }}">
</head>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <div class="layout-page">
                <div class="content-wrapper">
                    <!-- Main Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex justify-content-center align-items-center vh-100 text-center">
                                    <div class="misc-wrapper">
                                        <h2 class="mb-2 mx-2">Page Not Found :(</h2>
                                        <p class="mb-4 mx-2">Oops! 😖 The requested URL was not found on this server.
                                        </p>

                                        <a href="{{ route('index') }}" class="btn btn-primary">Back to
                                            Home</a>

                                        <div class="mt-3">
                                            <img src="{{ asset('images/404.png') }}" alt="error" width="400"
                                                class="img-fluid" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






</body>

</html>
