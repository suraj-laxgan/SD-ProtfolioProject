@extends('layouts.admin.app')
@section('title', 'Profile | SD')
@section('meta_description', 'SD Dashboard home')
@section('meta_keywords', 'SD Dashboard home.')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-center align-items-center vh-100 text-center">
                <div class="misc-wrapper">
                    <h2 class="mb-2 mx-2">Service Unavailable :(</h2>
                    <p class="mb-4 mx-2">Be right back! We’re currently tuning our systems. Check back in a bit!</p>

                    <a href="{{ route('dashboard') }}" class="btn btn-primary">Back to dashboard</a>

                    <div class="mt-3">
                        <img src="{{ asset('images/503.png') }}" alt="error"
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
