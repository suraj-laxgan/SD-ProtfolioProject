@extends('layout.admin.app')
@section('title', 'Profile | SD')
@section('meta_description', 'SD Dashboard home')
@section('meta_keywords', 'SD Dashboard home.')
@section('content')

    <div class="row">
        <div class="col-md-12">
            @include('education.admin.nav')
            <div class="card mb-4">
                <div class="card-body">
                    <form id="formAccountSettings" method="POST" action="{{ route('education.store') }}">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="degree" class="form-label">Degree</label>
                                <input class="form-control @error('degree') is-invalid @enderror"
                                    value="{{ old('degree') }}" type="text" id="degree" name="degree" autofocus />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="field_of_study" class="form-label">Study</label>
                                <input class="form-control @error('field_of_study') is-invalid @enderror"
                                    value="{{ old('field_of_study') }}" type="text" id="field_of_study"
                                    name="field_of_study" autofocus />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="institution" class="form-label">Institution</label>
                                <input class="form-control @error('institution') is-invalid @enderror"
                                    value="{{ old('institution') }}" type="text" id="institution" name="institution"
                                    autofocus />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="location" class="form-label">Location</label>
                                <input class="form-control @error('location') is-invalid @enderror"
                                    value="{{ old('location') }}" type="text" id="location" name="location" autofocus />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="start_year" class="form-label">Start Year</label>
                                <select name="start_year" id="start_year"
                                    class="select2 form-select @error('start_year') is-invalid @enderror">
                                    <option value="">Select Year</option>
                                    @for ($year = date('Y'); $year >= 2001; $year--)
                                        <option value="{{ $year }}"
                                            {{ old('start_year') == $year ? 'selected' : '' }}>
                                            {{ $year }}
                                        </option>
                                    @endfor
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="end_year" class="form-label">End Year</label>
                                <select name="end_year" id="end_year"
                                    class="select2 form-select @error('end_year') is-invalid @enderror">
                                    <option value="">Select Year</option>
                                    @for ($year = date('Y'); $year >= 2001; $year--)
                                        <option value="{{ $year }}"
                                            {{ old('end_year') == $year ? 'selected' : '' }}>
                                            {{ $year }}
                                        </option>
                                    @endfor
                                </select>
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="grade" class="form-label">Grade</label>
                                <input class="form-control @error('grade') is-invalid @enderror"
                                    value="{{ old('grade') }}" type="text" id="grade" name="grade" autofocus />
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
