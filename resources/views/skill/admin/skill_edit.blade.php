@extends('layout.admin.app')
@section('title', 'Profile | SD')
@section('meta_description', 'SD Dashboard home')
@section('meta_keywords', 'SD Dashboard home.')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <form id="formAccountSettings" method="POST" action="{{ route('skill.update') }}">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="id" value="{{ $skills->id }}">
                        <input type="hidden" name="page" value="{{ $page }}">

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="country">Category</label>
                                <select id="category_id" class="select2 form-select" name="category_id">
                                    <option value="">Select</option>
                                    @if ($categories->isNotEmpty())
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ isset($skills) && $skills->category_id == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="firstName" class="form-label">Name</label>
                                <input class="form-control @error('name') is-invalid @enderror" value="{{ $skills->name }}"
                                    type="text" id="firstName" name="name" autofocus />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="description" class="form-label">Percentage</label>
                                <input class="form-control @error('percentage') is-invalid @enderror"
                                    value="{{ $skills->percentage }}" type="number" id="firstName" name="percentage"
                                    autofocus />
                            </div>
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">Update</button>
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
