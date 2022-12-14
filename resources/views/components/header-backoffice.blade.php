<header>
    <div class="header-container">
        <span id="logo-container">
            <img alt=logo src="{{ asset('storage/svg/logo_header.svg') }}"/>
        </span>
        <nav id="nav-bar">
            <ul>
            </ul>
        </nav>
        <div id="mobile">

            <label for="toggle-nav">
                <img id="toggle-nav"
                     src="{{ asset('storage/img/nav-menu.png') }}"
                     alt="burger-menu" />
                <input id="toggle-nav" type="checkbox"/>
            </label>

            <nav id="mobile-nav">
                <ul>
                    <li data-goto="desc"><img
                            src="{{ asset('storage/svg/bienvenue.svg') }}"
                            alt="bienvenue"/></li>
                    <li data-goto="la_carte"><img
                            src="{{ asset('storage/svg/la_carte.svg') }}"
                            alt="la_carte"/></li>
                    <li data-goto="contact"><img
                            src="{{ asset('storage/svg/contact.svg') }}"
                            alt="contact"/></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
