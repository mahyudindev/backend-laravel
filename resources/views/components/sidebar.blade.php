<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div>
            <div style="margin-top: 1rem" class="sidebar-brand" style="background-color: #e4ecec; color: #050a0f;">
                <a href="index.html" style="color: #01070c;">
                    <i class="fa-solid fa-house-medical" style="font-size: 2rem;"></i>
                    YDTM Klinik
                </a>
            </div>
        </div>
        <div class="sidebar-brand sidebar-brand-sm" style="background-color: #BDF2D5; color: #010911;">
            <a href="index.html" style="color: #004085;"><i class="fa-solid fa-house-medical"></i></a>
        </div>
        <ul class="sidebar-menu">
            <ul class="sidebar-menu">
                <li class="nav-item dropdown">
                    <a href="{{ route('users.index') }}" class="nav-link"><i
                            class="fa-solid fa-table-columns"></i><span>Dashboard</span></a>
                </li>

                <ul class="sidebar-menu">
                    <li class="nav-item dropdown">
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
