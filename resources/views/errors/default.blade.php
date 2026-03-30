@extends('layouts.admin.app')
@section('title', 'Maintences')
@section('meta_description', 'Maintences')
@section('meta_keywords', 'Maintences')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-center align-items-center vh-100 text-center">
                <div class="misc-wrapper">
                    <h2 class="mb-2 mx-2">Under Maintenance!</h2>
                    <p class="mb-4 mx-2">Sorry for the inconvenience but we're performing some maintenance at the moment</p>
                    <a href="{{ route('dashboard') }}" class="btn btn-primary">Back to home</a>
                    <div class="mt-4">
                        <img src="{{ asset("assets/img/illustrations/girl-doing-yoga-light.png") }}" alt="girl-doing-yoga-light"
                            width="500" class="img-fluid" data-app-dark-img="illustrations/girl-doing-yoga-dark.png"
                            data-app-light-img="illustrations/girl-doing-yoga-light.png" />
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@push('scripts')
    <script></script>
@endpush
