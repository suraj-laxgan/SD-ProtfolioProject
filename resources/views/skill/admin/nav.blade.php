
<ul class="nav nav-pills flex-column flex-md-row mb-3">
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('skill_category.index') ? 'active' : '' }}" href="{{ route('skill_category.index') }}""><i
                class="bx bx-user me-1"></i>Category List</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('skill_category.create') ? 'active' : '' }}" href="{{ route('skill_category.create') }}"><i class="bx bx-bell me-1"></i>
           Category Add</a>
    </li>
</ul>
