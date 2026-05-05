


<ul class="nav nav-pills flex-column flex-md-row mb-3">
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('contact.index') ? 'active' : '' }}" href="{{ route('contact.index') }}""><i
                class="bx bx-user me-1"></i>Messages</a>
    </li>
    {{-- <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('contact.create') ? 'active' : '' }}" href="{{ route('contact.create') }}"><i class="bx bx-bell me-1"></i>
           Education Add</a>
    </li> --}}
</ul>