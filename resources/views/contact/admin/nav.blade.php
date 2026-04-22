


<ul class="nav nav-pills flex-column flex-md-row mb-3">
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('education.index') ? 'active' : '' }}" href="{{ route('education.index') }}""><i
                class="bx bx-user me-1"></i>Education List</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('education.create') ? 'active' : '' }}" href="{{ route('education.create') }}"><i class="bx bx-bell me-1"></i>
           Education Add</a>
    </li>
</ul>