


<ul class="nav nav-pills flex-column flex-md-row mb-3">
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('project_technology.index') ? 'active' : '' }}" href="{{ route('project_technology.index') }}""><i
                class="bx bx-user me-1"></i>Technology List</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('project_technology.create') ? 'active' : '' }}" href="{{ route('project_technology.create') }}"><i class="bx bx-bell me-1"></i>
           Add Technology</a>
    </li>
</ul>