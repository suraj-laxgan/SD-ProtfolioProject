


<ul class="nav nav-pills flex-column flex-md-row mb-3">
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('project.index') ? 'active' : '' }}" href="{{ route('project.index') }}""><i
                class="bx bx-user me-1"></i>Project List</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('project.create') ? 'active' : '' }}" href="{{ route('project.create') }}"><i class="bx bx-bell me-1"></i>
           Project Add</a>
    </li>
</ul>