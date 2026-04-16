@extends('layout.admin.app')
@section('title', 'Profile | SD')
@section('meta_description', 'SD Dashboard home')
@section('meta_keywords', 'SD Dashboard home.')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('skill.admin.skill_nav')
            <div class="card">
                <div class="table-responsive text-nowrap">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Percentage</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @if ($lists->isEmpty())
                                <tr>
                                    <td colspan="3" class="text-center">
                                        <div class="p-4">
                                            <p class="text-muted">No data found in the table.</p>
                                        </div>
                                    </td>
                                </tr>
                            @else
                                @foreach ($lists as $l)
                                    <tr class="{{ session('updated_id') == (string)$l->id ? 'active-row' : '' }}">
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>
                                                {{ $l->name }} </strong></td>
                                        <td>{{ $l->skillCategory->name ?? 'N/A' }}</td>
                                        <td>{{ ($l->percentage) }} %</td>
                                        <td>
                                            <a
                                                href="{{ route('skill.edit', [encrypt($l->id), 'page' => $lists->currentPage()]) }}"><i
                                                    class="bx bx-edit-alt me-1"></i>Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
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
