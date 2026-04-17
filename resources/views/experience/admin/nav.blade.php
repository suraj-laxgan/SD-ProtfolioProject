<ul class="nav nav-pills flex-column flex-md-row mb-3">
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('experience.index') ? 'active' : '' }}" href="{{ route('experience.index') }}""><i
                class="bx bx-user me-1"></i>Experience List</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('experience.create') ? 'active' : '' }}" href="{{ route('experience.create') }}"><i class="bx bx-bell me-1"></i>
           Experience Add</a>
    </li>
</ul>
