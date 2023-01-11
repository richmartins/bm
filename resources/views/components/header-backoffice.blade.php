<header>
    <div class="header-container">
        <span id="logo-container">
            <img alt=logo src="{{ asset('storage/svg/logo_header.svg') }}"/>
        </span>
        <a href="#" id="bg-menu" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        <nav id="nav-bar">
            @guest
                <ul id="nav-bar-ul">
                </ul>
            @else
                <ul id="nav-bar-ul">
                    <li><a href="{{ route('logout') }}">Logout</a></li>
                </ul>
            @endguest
        </nav>
    </div>
</header>
