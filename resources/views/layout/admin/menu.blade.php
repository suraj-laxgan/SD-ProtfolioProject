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
         <li class="menu-item {{ request()->routeIs('wsprofile.*') ? 'active open' : '' }}">
             <a href="javascript:void(0);" class="menu-link menu-toggle">
                 <i class="menu-icon tf-icons bx bx-dock-top"></i>
                 <div>Protfolio Profile</div>
             </a>

             <ul class="menu-sub">
                 <li class="menu-item {{ request()->routeIs('wsprofile.list') ? 'active' : '' }}">
                     <a href="{{ route('wsprofile.list') }}" class="menu-link">
                         <div>List</div>
                     </a>
                 </li>
             </ul>
             <ul class="menu-sub">
                 <li class="menu-item {{ request()->routeIs('wsprofile.create') ? 'active' : '' }}">
                     <a href="{{ route('wsprofile.create') }}" class="menu-link">
                         <div>Create</div>
                     </a>
                 </li>
             </ul>
         </li>
         <li class="menu-item {{ request()->routeIs('skill*') ? 'active open' : '' }}">
             <a href="javascript:void(0);" class="menu-link menu-toggle">
                 <i class="menu-icon tf-icons bx bx-collection"></i>
                 <div data-i18n="Basic">Skills</div>
             </a>
             <ul class="menu-sub">
                 <li class="menu-item {{ request()->routeIs('skill_category.*') ? 'active' : '' }}">
                     <a href="{{ route('skill_category.index') }}" class="menu-link">
                         <div>Category</div>
                     </a>
                 </li>
             </ul>
             <ul class="menu-sub">
                 <li class="menu-item {{ request()->routeIs('skill.*') ? 'active' : '' }}">
                     <a href="{{ route('skill.index') }}" class="menu-link">
                         <div>List</div>
                     </a>
                 </li>
             </ul>
         </li>
         <li class="menu-item {{ request()->routeIs('experience.*') ? 'active open' : '' }}">
             <a href="{{ route('experience.index') }}" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-collection"></i>
                 <div data-i18n="Basic">Experience</div>
             </a>
         </li>
         <li class="menu-item {{ request()->routeIs('education.*') ? 'active open' : '' }}">
             <a href="{{ route('education.index') }}" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-collection"></i>
                 <div data-i18n="Basic">Education</div>
             </a>
         </li>
         <li class="menu-item {{ request()->routeIs('project*') ? 'active open' : '' }}">
             <a href="javascript:void(0);" class="menu-link menu-toggle">
                 <i class="menu-icon tf-icons bx bx-collection"></i>
                 <div data-i18n="Basic">Project</div>
             </a>
             <ul class="menu-sub">
                 <li class="menu-item {{ request()->routeIs('project_category.*') ? 'active' : '' }}">
                     <a href="{{ route('project_category.index') }}" class="menu-link">
                         <div>Category</div>
                     </a>
                 </li>
             </ul>
             <ul class="menu-sub">
                 <li class="menu-item {{ request()->routeIs('project_technology.*') ? 'active' : '' }}">
                     <a href="{{ route('project_technology.index') }}" class="menu-link">
                         <div>Technology</div>
                     </a>
                 </li>
             </ul>
             <ul class="menu-sub">
                 <li class="menu-item {{ request()->routeIs('project.*') ? 'active' : '' }}">
                     <a href="{{ route('project.index') }}" class="menu-link">
                         <div>List</div>
                     </a>
                 </li>
             </ul>
         </li>
         
         <li class="menu-item {{ request()->routeIs('contact.*') ? 'active' : '' }}">
             <a href="{{ route('contact.index') }}" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-collection"></i>
                 <div data-i18n="Basic">Contact Messages</div>
             </a>
         </li>
         <li class="menu-item">
             <a href="cards-basic.html" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-collection"></i>
                 <div data-i18n="Basic">Blog</div>
             </a>
         </li>
         <li class="menu-item">
             <a href="cards-basic.html" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-collection"></i>
                 <div data-i18n="Basic">API Docs</div>
             </a>
         </li>
         <li class="menu-item">
             <a href="cards-basic.html" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-collection"></i>
                 <div data-i18n="Basic">SEO</div>
             </a>
         </li>

         <li class="menu-item">
             <a href="cards-basic.html" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-collection"></i>
                 <div data-i18n="Basic">Analytics</div>
             </a>
         </li>
     </ul>
 </aside>
 <!-- / Menu -->
