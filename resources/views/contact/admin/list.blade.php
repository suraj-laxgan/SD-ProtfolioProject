@extends('layout.admin.app')
@section('title', 'Profile | SD')
@section('meta_description', 'SD Dashboard home')
@section('meta_keywords', 'SD Dashboard home.')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('contact.admin.nav')
            <div class="card">
                <div class="table-responsive text-nowrap">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @forelse ($lists as $l)
                                <tr class="{{ session('updated_id') == (string) $l->id ? 'active-row' : '' }}">
                                    <td>{{ $l->created_at }}</td>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>
                                            {{ $l->name }} </strong></td>
                                    <td>{{ str($l->email)->limit(15) }}</td>
                                    <td>{{ str($l->subject)->limit(15) }}</td>
                                    <td>{{ str($l->message)->limit(15) }}</td>
                                    <td>{{ $l->is_read == 1 ? "Seen" : "Unseen"}}</td>
                                    <td>
                                        <a
                                            href="{{ route('contact.edit', [encrypt($l->id), 'page' => $lists->currentPage()]) }}"><i
                                                class="bx bx-edit-alt me-1"></i>Edit</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="10" class="text-center">
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
