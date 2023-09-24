<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{url('/dashboard')}}">Siakat</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{url('/dashboard')}}">SK</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ url('dashboard') }}"><i class="fas fa-pencil-ruler">
                    </i> <span>Dashboard</span>
                </a>
            </li>
            <li class="{{ Request::is('user') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ route('user') }}"><i class="fas fa-user">
                    </i> <span>user</span>
                </a>
            </li>

        </ul>

    </aside>
</div>
