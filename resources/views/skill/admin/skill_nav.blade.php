<ul class="nav nav-pills flex-column flex-md-row mb-3">
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('skill.index') ? 'active' : '' }}" href="{{ route('skill.index') }}""><i
                class="bx bx-user me-1"></i>Skill List</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('skill.create') ? 'active' : '' }}" href="{{ route('skill.create') }}"><i class="bx bx-bell me-1"></i>
            Skill Add</a>
    </li>
</ul>