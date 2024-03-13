<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">YDTM Klinik</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('dashboard-general-dashboard') ? 'active' : '' }}'>
                        <a class="nav-link" href="{{ url('dashboard-general-dashboard') }}">General Dashboard</a>
                    </li>

                </ul>

                <ul class="sidebar-menu">
                    <li class="nav-item dropdown ">
                        <a href="{{ route('users.index') }}" class="nav-link"><i
                                class="fa-solid fa-user"></i><span>User</span></a>
                    </li>

                </ul>

                <ul class="sidebar-menu">
                    <li class="nav-item dropdown ">
                        <a href="{{ route('doctors.index') }}" class="nav-link"><i
                                class="fa-solid fa-user-doctor"></i><span>Doctor</span></a>
                    </li>

                </ul>
    </aside>
</div>
