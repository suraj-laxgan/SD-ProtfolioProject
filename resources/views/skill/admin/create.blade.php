@extends('layout.admin.app')
@section('title', 'Profile | SD')
@section('meta_description', 'SD Dashboard home')
@section('meta_keywords', 'SD Dashboard home.')
@section('content')

    <div class="row">
        <div class="col-md-12">
            @include('skill.admin.nav')
            <div class="card mb-4">
                <div class="card-body">
                    <form id="formAccountSettings" method="POST" action="{{ route('skill_category.store') }}">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="firstName" class="form-label">Name</label>
                                <input class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                                    type="text" id="firstName" name="name" autofocus />
                            </div>
                             <div class="mb-3 col-md-6">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" class="form-control" id="description" cols="30" rows="1"></textarea>
                            </div>
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">Create</button>
                            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </div>
                    </form>
                </div>
                <!-- /Account -->
            </div>

        </div>
    </div>


@endsection


@push('scripts')
    <script></script>
@endpush
