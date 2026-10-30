<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container box_1620">

                <a class="navbar-brand logo_h" href="{{ route('theme.index') }}">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Sensive Blog Logo">
                </a>

                <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">

                    <ul class="nav navbar-nav menu_nav justify-content-center">
                        <li class="nav-item @yield('active-home')">
                            <a class="nav-link" href="{{ route('theme.index') }}">Home</a>
                        </li>

                        <li class="nav-item @yield('active-categories') submenu dropdown">
                            <a
                                href="#"
                                class="nav-link dropdown-toggle"
                                data-toggle="dropdown"
                                role="button"
                                aria-haspopup="true"
                                aria-expanded="false"
                            >
                                Categories
                            </a>

                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('theme.category') }}">Food</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('theme.category') }}">Business</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('theme.category') }}">Travel</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item @yield('active-contact')">
                            <a class="nav-link" href="{{ route('theme.contact') }}">Contact</a>
                        </li>
                    </ul>

                    <a href="#" class="btn btn-sm btn-primary mr-2">Add New</a>

                    <ul class="nav navbar-nav navbar-right navbar-social">
                        <li class="nav-item">
                            <a href="#" class="btn btn-sm btn-warning">Register / Login</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </div>
</header>
