<style>
    .active {
        color: red;
    }
</style>
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="">Admin Dashboard</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">DB</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown active">
                <a href="" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>

            </li>
            <li class="menu-header">Starter</li>


            <li class="dropdown">
                <a href="{{ route('location.index') }}"
                    class="{{ request()->routeIs('location.index') ? 'text-warning' : '' }}"><i
                        class="fa-solid fa-bars"></i>
                    <span>Location</span></a>
            </li>

            <li class="dropdown">
                <a href="{{ route('trips.index') }}"
                    class="{{ request()->routeIs('trips.index') ? 'text-warning' : '' }}"><i
                        class="fa-solid fa-bars"></i>
                    <span>Trip</span></a>

            </li>

            <li class="dropdown">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="mb-3 mobile-logout btn" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                            this.closest('form').submit()"
                        class="dropdown-item has-icon text-danger">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </form>

            </li>

        </ul>

    </aside>
</div>
