<ul class="nav nav-pills flex-column flex-md-row mb-3">
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('wsprofile.list') ? 'active' : '' }}" href="{{ route('wsprofile.list') }}""><i
                class="bx bx-user me-1"></i> List</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('wsprofile.create') ? 'active' : '' }}" href="{{ route('wsprofile.create') }}"><i class="bx bx-bell me-1"></i>
            Add</a>
    </li>
</ul>
