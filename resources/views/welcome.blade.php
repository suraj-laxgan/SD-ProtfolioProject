@extends('layout.frontend.app')
@section('title', 'Suraj Das | SD')
@section('meta_description', 'Suraj Das')
@section('meta_keywords', 'Suraj Das')
@push('styles')
    <style>
        /* The main 12-column container for skill*/

        /* .skills-master-container {
                    border: 2px solid #e0e0e0;
                    border-radius: 25px;
                    overflow: hidden;
                    padding: 40px;
                    background: #ffffff;
                    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
                } */

        .skill-category-card {
            background: #ffffff;
            border: 1px solid #e0e0e0;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        .skill-category-card:hover {
            transform: translateY(-5px);
        }

        /* Category Title & Description */
        .category-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #2d3436;
            margin-bottom: 10px;
        }

        .category-description {
            color: #636e72;
            line-height: 1.6;
            font-size: 1rem;
            margin-bottom: 20px;
        }

        .divider {
            border: 0;
            border-top: 1px solid #eee;
            margin: 20px 0;
        }

        /* Skill Buttons (Pills) */
        .skill-pills {
            list-style: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .skill-pills li {
            background: #f1f2f6;
            color: #2f3542;
            padding: 6px 18px;
            border-radius: 50px;
            /* Pill shape */
            font-size: 0.9rem;
            font-weight: 500;
            border: 1px solid #dfe4ea;
            transition: all 0.2s ease;
        }

        .skill-pills li:hover {
            background: #e87532;
            color: white;
            border-color: #e87532;
            cursor: default;
        }
    </style>
@endpush
@section('content')
    @include('layout.admin.alerts')
    
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
    {{-- @include('layout.frontend.testimonials') --}}
    <!-- /Testimonials Section -->

    <!-- Services Section -->
    {{-- @include('layout.frontend.services') --}}
    <!-- /Services Section -->

    <!-- Faq Section -->
    {{-- @include('layout.frontend.faq') --}}
    <!-- /Faq Section -->

    <!-- Contact Section -->
    @include('layout.frontend.contact')
    <!-- /Contact Section -->
@endsection


@push('scripts')
    <script></script>
@endpush
