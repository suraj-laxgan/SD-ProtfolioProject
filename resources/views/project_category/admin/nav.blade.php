


<ul class="nav nav-pills flex-column flex-md-row mb-3">
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('project_category.index') ? 'active' : '' }}" href="{{ route('project_category.index') }}""><i
                class="bx bx-user me-1"></i>Category List</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('project_category.create') ? 'active' : '' }}" href="{{ route('project_category.create') }}"><i class="bx bx-bell me-1"></i>
           Add Category</a>
    </li>
</ul>