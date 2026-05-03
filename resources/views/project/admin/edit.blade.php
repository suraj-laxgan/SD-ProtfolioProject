@extends('layout.admin.app')
@section('title', 'Profile | SD')
@section('meta_description', 'SD Dashboard home')
@section('meta_keywords', 'SD Dashboard home.')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <form id="formAccountSettings" method="POST" action="{{ route('project.update') }}">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        <input type="hidden" name="page" value="{{ $page }}">

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="title" class="form-label">Title</label>
                                <input class="form-control @error('title') is-invalid @enderror" value="{{ $data->title }}"
                                    type="text" id="title" name="title" autofocus />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="category_id" class="form-label">Category</label>
                                <select name="category_id" id="category_id"
                                    class="select2 form-select @error('category_id') is-invalid @enderror">
                                    <option value="">Select Category</option>
                                    @forelse ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $data->category_id == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}</option>
                                    @empty
                                        <option value="">Category Not found</option>
                                    @endforelse
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="technology_id" class="form-label">Technology</label>
                                <select name="technology_id[]" id="technology_id" multiple
                                    class="select2 form-select @error('technology_id') is-invalid @enderror">
                                    <option value="">Select Technology</option>
                                   @forelse ($technologies as $technology)
                                        <option value="{{ $technology->id }}" 
                                            {{ $data->technologies->contains('id', $technology->id)  ? 'selected' : '' }}>
                                            {{ $technology->name }}</option>
                                    @empty
                                        <option value="">Technology Not found</option>
                                        
                                    @endforelse
                                </select>
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="github_link" class="form-label">Github Link</label>
                                <input class="form-control @error('github_link') is-invalid @enderror"
                                    value="{{ $data->github_link  }}" type="text" id="github_link" name="github_link"
                                    autofocus />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="live_url" class="form-label">Live URL</label>
                                <input class="form-control @error('live_url') is-invalid @enderror"
                                    value="{{ $data->live_url  }}" type="text" id="live_url" name="live_url" autofocus />
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" id="status"
                                    class="select2 form-select @error('status') is-invalid @enderror">
                                    <option value="">Select</option>
                                    <option value="1" {{ $data->status ==  1 ? 'selected' : '' }}>Yes</option>
                                    <option value="0" {{ $data->status ==  0 ? 'selected' : '' }}>No</option>
                                </select>
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" class="form-control" id="description" cols="30" rows="1">
                                    {{ $data->description  }}
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
