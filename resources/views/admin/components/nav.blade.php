<nav class="main-sidebar ps-menu">
    <div class="sidebar-header">
        {{-- <div class="text" style="font-size: 15px">SMART X SIMULATOR</div> --}}
        <img src="{{ asset('assets/assets/images/Logo/logo-main.png') }}" width="200" alt="logo">
        <div class="close-sidebar action-toggle">
            <i class="ti-close"></i>
        </div>
    </div>
    <div class="sidebar-content">
        <ul>
            <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}" class="link">
                    <i class="ti-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="menu-category">
                <span class="text-uppercase">Form</span>
            </li>
            <li class="{{ request()->routeIs('public-service-quality') ? 'active' : '' }}">
                <a href="{{ route('public-service-quality') }}" class="link">
                    <i class="ti-medall"></i>
                    <span>Public Service Quality</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('birth-rate-prediction') ? 'active' : '' }}">
                <a href="{{ route('birth-rate-prediction') }}" class="link">
                    <i class="ti-heart"></i>
                    <span>Birth Rate Prediction</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('weather-prediction') ? 'active' : '' }}">
                <a href="{{ route('weather-prediction') }}" class="link">
                    <i class="ti-cloud"></i>
                    <span>Weather Prediction</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('economic-growth') ? 'active' : '' }}">
                <a href="{{ route('economic-growth') }}" class="link">
                    <i class="ti-bar-chart"></i>
                    <span>Economic Growth</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
