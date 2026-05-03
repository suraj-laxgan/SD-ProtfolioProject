@extends('layout.admin.app')
@section('title', 'Profile | SD')
@section('meta_description', 'SD Dashboard home')
@section('meta_keywords', 'SD Dashboard home.')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <form id="formAccountSettings" method="POST" action="{{ route('contact.update') }}">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        <input type="hidden" name="page" value="{{ $page }}">

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="name" class="form-label">Name</label>
                                <input class="form-control @error('name') is-invalid @enderror" value="{{ $data->name }}"
                                    type="text" id="name" name="name" autofocus />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input class="form-control @error('email') is-invalid @enderror" value="{{ $data->email }}"
                                    type="text" id="email" name="email" autofocus />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="subject" class="form-label">Subject</label>
                                <input class="form-control @error('subject') is-invalid @enderror"
                                    value="{{ $data->subject }}" type="text" id="subject" name="subject" autofocus />
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="start_year" class="form-label">Status</label>

                                <select name="is_read" id="start_year"
                                    class="select2 form-select @error('is_read') is-invalid @enderror">

                                    <option value="">Select</option>

                                    <option value="1" {{ isset($data) && $data->is_read == 1 ? 'selected' : '' }}>
                                        Seen
                                    </option>

                                    <option value="0" {{ isset($data) && $data->is_read == 0 ? 'selected' : '' }}>
                                        Unseen
                                    </option>

                                </select>
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="message" class="form-label">Messsage</label>
                                <textarea name="message" class="form-control" id="message" cols="30" rows="10">
                                    {{ $data->message }}
                                </textarea>
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
