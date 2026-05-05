@extends('layout.admin.app')
@section('title', 'Profile | SD')
@section('meta_description', 'SD Dashboard home')
@section('meta_keywords', 'SD Dashboard home.')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('project.admin.nav')
            <div class="card">
                <div class="table-responsive text-nowrap">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Category</th>
                                <th>Technology</th>
                                {{-- <th>Github</th>
                                <th>URL</th> --}}
                                <th>status</th>
                                 <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @forelse ($lists as $l)
                                <tr class="{{ session('updated_id') == (string) $l->id ? 'active-row' : '' }}">
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>
                                            {{ $l->title }} </strong></td>
                                    <td>{{ $l->slug }}</td>
                                    <td>{{ $l->getCategory->name }}</td>
                                    <td>
                                        {{ $l->technologies->pluck('name')->join(', ') }}
                                    </td>
                                    {{-- <td>{{ $l->github_link }}</td>
                                    <td>{{ $l->live_url }}</td> --}}
                                    <td>{{ $l->status == 1 ? 'Active' : 'Inactive'}}</td>
                                    <td>{{ str($l->description)->limit(10) }}</td>
                                    <td>
                                        <a
                                            href="{{ route('project.edit', [encrypt($l->id), 'page' => $lists->currentPage()]) }}"><i
                                                class="bx bx-edit-alt me-1"></i>Edit</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">
                                        <div class="p-4">
                                            <p class="text-muted">No data found in the table.</p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>
    <div class="mt-3">
        {{ $lists->links('pagination::bootstrap-5') }}
    </div>
@endsection


@push('scripts')
    <script></script>
@endpush
