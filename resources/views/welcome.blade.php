@extends('layout.frontend.app')
@section('title', 'Dashboard Home | SD')
@section('meta_description', 'SD Dashboard home')
@section('meta_keywords', 'SD Dashboard home.')
@section('content')
    <!-- Hero Section -->
    @include('layout.frontend.hero')
    <!-- /Hero Section -->

    <!-- About Section -->
    @include('layout.frontend.about')
    <!-- /About Section -->

    <!-- Skills Section -->
    @include('layout.frontend.skill')
    <!-- /Skills Section -->

    <!-- Resume Section -->
    @include('layout.frontend.resume')
    <!-- /Resume Section -->

    <!-- Portfolio Section -->
    @include('layout.frontend.protfolio')
    <!-- /Portfolio Section -->

    <!-- Testimonials Section -->
    @include('layout.frontend.testimonials')
    <!-- /Testimonials Section -->

    <!-- Services Section -->
    @include('layout.frontend.services')
    <!-- /Services Section -->

    <!-- Faq Section -->
    @include('layout.frontend.faq')
    <!-- /Faq Section -->

    <!-- Contact Section -->
    @include('layout.frontend.contact')
    <!-- /Contact Section -->
@endsection


@push('scripts')
    <script></script>
@endpush
