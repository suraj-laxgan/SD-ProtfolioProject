@extends('layout.admin.app')
@section('title', 'Profile | SD')
@section('meta_description', 'SD Dashboard home')
@section('meta_keywords', 'SD Dashboard home.')
@section('content')

    <div class="row">
        <div class="col-md-12">
            @include('experience.admin.nav')
            <div class="card mb-4">
                <div class="card-body">
                    <form id="formAccountSettings" method="POST" action="{{ route('experience.store') }}">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="firstName" class="form-label">Company Name</label>
                                <input class="form-control @error('company_name') is-invalid @enderror" value="{{ old('company_name') }}"
                                    type="text" id="company_name" name="company_name" autofocus />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="firstName" class="form-label">Position</label>
                                <input class="form-control @error('position') is-invalid @enderror" value="{{ old('position') }}"
                                    type="text" id="position" name="position" autofocus />
                            </div>
                             <div class="mb-3 col-md-6">
                                <label for="start_date" class="form-label">Start Date</label>
                                <input class="form-control @error('start_date') is-invalid @enderror" value="{{ old('start_date') }}"
                                    type="date" id="start_date" name="start_date" autofocus />
                            </div>
                             <div class="mb-3 col-md-6">
                                <label for="end_date" class="form-label">End Date</label>
                                <input class="form-control @error('end_date') is-invalid @enderror" value="{{ old('end_date') }}"
                                    type="date" id="end_date" name="end_date" autofocus />
                            </div>
                             <div class="mb-3 col-md-6">
                                <label class="form-label" for="country">Currently Working</label>
                                <select id="currently_working" class="select2 form-select" name="currently_working">
                                    <option value="">Select</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
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
