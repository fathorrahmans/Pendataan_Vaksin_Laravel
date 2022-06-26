<!-- NAVBAR -->

<header class="header trans_200">

    <!-- Top Bar -->
    <div class="top_bar">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                        <div class="top_bar_item"><a href="#">FAQ</a></div>
                        <div class="top_bar_item"><a href="#">Request an Appointment</a></div>
                        <div class="emergencies  d-flex flex-row align-items-center justify-content-start ml-auto">
                            For Emergencies: +563 47558 623</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar ketika tampilan di laptop -->
    <div class="header_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_content d-flex flex-row align-items-center justify-content-start">
                        <nav class="main_nav ml-auto">
                            <ul>
                                <li class="{{ Nav::isRoute('landing-home') }}"><a
                                        href="{{ route('landing-home') }}">Home</a></li>
                                <li class="{{ Nav::isRoute('landing-kk') }}"><a
                                        href="{{ route('landing-kk') }}">Check KK</a></li>
                                <li class="{{ Nav::isRoute('landing-nik') }}"><a
                                        href="{{ route('landing-nik') }}">Check NIK</a></li>
                                <li class="{{ Nav::isRoute('landing-about') }}"><a
                                        href="{{ route('landing-about') }}">About Us</a></li>
                                <li class="{{ Nav::isRoute('login') }}"><a href="{{ route('login') }}">Login</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Navbar ketika tampilan di laptop -->

    <!-- Logo -->
    <div class="logo_container_outer">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="logo_container">
                        <a href="#">
                            <div class="logo_content d-flex flex-column align-items-start justify-content-center">
                                <div class="logo_line"></div>
                                <div class="logo d-flex flex-row align-items-center justify-content-center">
                                    <div class="logo_text">Vaksin<span>Med</span></div>
                                    <div class="logo_box">+</div>
                                </div>
                                <div class="logo_sub">Health Care Center</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>


<!-- Navbar ketika di layar HP -->
<div class="menu_container menu_mm">

    <!-- Menu Close Button -->
    <div class="menu_close_container">
        <div class="menu_close"></div>
    </div>

    <!-- Menu Items -->
    <div class="menu_inner menu_mm">
        <div class="menu menu_mm">
            <ul class="menu_list menu_mm">
                <li class="menu_item menu_mm"><a href="{{ route('landing-home') }}">Home</a></li>
                <li class="menu_item menu_mm"><a href="{{ route('landing-about') }}">About Us</a></li>
            </ul>
        </div>
        <div class="menu_extra">
            <div class="menu_appointment"><a href="#">Request an Appointment</a></div>
            <div class="menu_emergencies">For Emergencies: +563 47558 623</div>
        </div>

    </div>

</div>
<!-- Akhir Navbar ketika di layar HP -->
