 <!-- Menu -->

 <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
     <div class="app-brand demo">
         <a href="{{ route('dashboard') }}" class="app-brand-link">
             {{-- <img src="{{ asset('images/logo.png') }}" alt="Suraj" class="app-logo-sd app-brand-logo demo"> --}}
             <img src="{{ asset('images/suraj_logo_01.png') }}" alt="Suraj" class="app-logo-sd app-brand-logo demo">
         </a>

         <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
             <i class="bx bx-chevron-left bx-sm align-middle"></i>
         </a>
     </div>

     <div class="menu-inner-shadow"></div>

     <ul class="menu-inner py-1">
         <!-- Dashboard -->
         <li class="menu-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
             <a href="{{ route('dashboard') }}" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-home-circle"></i>
                 <div>Dashboard</div>
             </a>
         </li>

         <li class="menu-header small text-uppercase">
             <span class="menu-header-text">Pages</span>
         </li>
         <li class="menu-item {{ request()->routeIs('profile.*') ? 'active open' : '' }}">
             <a href="javascript:void(0);" class="menu-link menu-toggle">
                 <i class="menu-icon tf-icons bx bx-dock-top"></i>
                 <div>Account Settings</div>
             </a>

             <ul class="menu-sub">
                 <li class="menu-item {{ request()->routeIs('profile.edit') ? 'active' : '' }}">
                     <a href="{{ route('profile.edit') }}" class="menu-link">
                         <div>My Account</div>
                     </a>
                 </li>
                 <li class="menu-item {{ request()->routeIs('profile.notification') ? 'active' : '' }}">
                     <a href="{{ route('profile.notification') }}" class="menu-link">
                         <div data-i18n="Notifications">Notifications</div>
                     </a>
                 </li>
                 <li class="menu-item {{ request()->routeIs('profile.connection') ? 'active' : '' }}">
                     <a href="{{ route('profile.connection') }}" class="menu-link">
                         <div data-i18n="Connections">Connections</div>
                     </a>
                 </li>
             </ul>
         </li>
     </ul>
 </aside>
 <!-- / Menu -->
