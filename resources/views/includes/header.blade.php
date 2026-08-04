<header class="header">
    <div class="container">
        <nav class="navbar navbar-expand-xl">
            <a class="navbar-brand" href="/"><img alt="" src="{{ asset('assets/media/logo.png') }}"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar"><i class="fas fa-bars"></i></button>
            <div class="collapse navbar-collapse text-start" id="mynavbar">
                <ul class="navbar-nav mainmenu m-0">
                    <li class="menu-item">
                        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('services') }}" class="{{ request()->is('services*') ? 'active' : '' }}">Services</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('industries') }}" class="{{ request()->is('industries*') ? 'active' : '' }}">Industries</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('about_us') }}" class="{{ request()->routeIs('about_us') ? 'active' : '' }}">About</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('contact_us') }}" class="{{ request()->routeIs('contact_us') ? 'active' : '' }}">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!--
            <div class="right-content d-xl-block d-none">
                <a href="tel:123456789" class="phone-link"><i class="fal fa-phone-alt"></i> +1 234 567 890</a>
            </div> -->
        </nav>
    </div>
</header>