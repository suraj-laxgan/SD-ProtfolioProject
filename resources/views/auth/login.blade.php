@extends('layout.auth.app')
@section('title', 'Login | SD')
@section('meta_description', 'SD Login')
@section('meta_keywords', 'SD Login')
@section('content')

    <h4 class="mb-2">Welcome  👋</h4>
    <p class="mb-4">Please sign-in to your account and start the adventure</p>

    <div>
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>


    <form class="mb-3" action="{{ route('login') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email"
                placeholder="Enter your email or username" autofocus />

        </div>
        <div class="mb-3 form-password-toggle">
            <label class="form-label" for="password">Password</label>
            <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control" name="password"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="password" />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
            </div>

            <div class="d-flex justify-content-between">

                <a href="{{ route('password.request') }}">
                    <small>Forgot Password?</small>
                </a>
            </div>
        </div>
        <div class="mb-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="remember-me" />
                <label class="form-check-label" for="remember-me"> Remember Me </label>
            </div>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
        </div>
    </form>

    <p class="text-center">
        <span>New on our platform?</span>
        <a href="{{ route('register') }}">
            <span>Create an account</span>
        </a>
    </p>
@endsection
@push('scripts')
    <script></script>
@endpush
