@extends('layouts.admin.app')
@section('title', 'Profile | SD')
@section('meta_description', 'SD Dashboard home')
@section('meta_keywords', 'SD Dashboard home.')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-center align-items-center vh-100 text-center">
                <div class="misc-wrapper">
                    <h2 class="mb-2 mx-2">Page Not Found :(</h2>
                    <p class="mb-4 mx-2">Oops! 😖 The requested URL was not found on this server.</p>

                    <a href="{{ route('dashboard') }}" class="btn btn-primary">Back to dashboard</a>

                    <div class="mt-3">
                        <img src="{{ asset('images/404.png') }}" alt="error"
                            width="400" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection


@push('scripts')
    <script></script>
@endpush
