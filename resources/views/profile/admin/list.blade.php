@extends('layout.admin.app')
@section('title', 'Profile | SD')
@section('meta_description', 'SD Dashboard home')
@section('meta_keywords', 'SD Dashboard home.')
@section('content')

    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Profile /</span></h4>

    <div class="row">
        <div class="col-md-12">
            @include('profile.admin.nav')
            <div class="card">
                <div class="table-responsive text-nowrap">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Title</th>
                                <th>email</th>
                                <th>Phone</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($list as $l)
                                <tr>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>
                                            {{ $l->name }}</strong></td>
                                    <td>{{ $l->title }}</td>
                                    <td>{{ $l->email }}</td>
                                    <td><span class="badge bg-label-primary me-1">{{ $l->phone }}</span></td>
                                    <td>
                                        <a  href="{{ route('wsprofile.edit', $l->email) }}"><i class="bx bx-edit-alt me-1"></i>Edit</a>
                                    </td>
                                </tr>
                            @endforeach



                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection


@push('scripts')
    <script></script>
@endpush
