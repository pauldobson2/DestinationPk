<!-- Main Header -->
<header class="main-header">
    <!-- Header Upper -->
    <div class="header-upper">
        <div class="auto-container">
            <!-- Main Box -->
            <div class="main-box clearfix">
                <!-- Logo -->
                <div class="logo-box">
                    <div class="logo">
                        <a href="{{ route('home') }}" title="Destination Pakistan">
                            <img src="{{ asset('assets/images/Logo.svg') }}" alt="Destination Pakistan Logo" title="Destination Pakistan Logo">
                        </a>
                    </div>
                </div>

                <div class="nav-box clearfix">
                    <!-- Nav Outer -->
                    <div class="nav-outer clearfix">
                        <nav class="main-menu">
                            <ul class="navigation clearfix">
                                <li class="">
                                    <a href="{{ route('home') }}">Home</a>
                                </li>
{{--                                <li class="">--}}
{{--                                    <a href="{{ route('trip_list', 'City Tour') }}">City Trips</a>--}}
{{--                                </li>--}}
{{--                                <li class="">--}}
{{--                                    <a href="{{ route('trip_list', 'Culture & Adventure Tours') }}">Culture & Adventure Trips </a>--}}
{{--                                </li>--}}
{{--                                <li class="">--}}
{{--                                    <a href="{{ route('trip_list', 'Bike Trips') }}">Bike Trips </a>--}}
{{--                                </li>--}}
                                <li class="dropdown">
                                    <a>Tours</a>
                                    <ul>
                                        <li class=""><a href="{{ route('trip_list', 'City Tour') }}">City Trips</a></li>
                                        <li class=""><a href="{{ route('trip_list', 'Culture & Adventure Tours') }}">Culture & Adventure Trips</a></li>
                                        <li class=""><a href="{{ route('trip_list', 'Bike Trips') }}">Bike Trips</a></li>
                                        <li class=""><a href="{{ route('trip_list', 'Sikh Pilgrims') }}">Sikh Pilgrims</a></li>
                                        <li class=""><a href="{{ route('trip_list', 'Festivals') }}">Festivals</a></li>
                                        <li class=""><a href="{{ route('trip_list', 'Trekking Trips') }}">Trekking Trips</a></li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="{{ route('pakistan_visa') }}">Tourist Visa</a>
                                </li>
                                <li>
                                    <a href="{{ route('about_us') }}">About</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact_us') }}">Contact</a>
                                </li>
                            </ul>
                        </nav><!-- .main-menu -->
                    </div>
                    <!-- Nav Outer End -->
                </div>

                <!-- Hidden Nav Toggler -->
                <div class="nav-toggler">
                    <button class="hidden-bar-opener">
                        <span class="icon"><img src="{{ asset('assets/images/icons/menu-icon.svg') }}" alt=""></span>
                    </button>
                </div>

                <div class="links-box clearfix">
                    {{-- <div class="link social">
                        <ul class="social-links clearfix">
                            <li>
                                <a href="https://www.facebook.com/destinationispakistan" class="facebook"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/destinationpak" class="twitter"><i class="fab fa-twitter"></i></a>
                            </li>

                            <li>
                                <a href="http://www.youtube.com/@destinationpakistan92" class="youtube"><i class="fab fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div> --}}
                    <div class="link call-to">
                        <a href="tel:+923494096697">
                            <i class="icon fa-solid fa-phone"></i> Call Us <span class="nmbr">+92 349 409 6697</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Upper -->
</header>
<!-- End Main Header -->

<!-- Menu Backdrop -->
<div class="menu-backdrop"></div>

<!-- Hidden Navigation Bar -->
<div class="hidden-bar">
    <!-- Hidden Bar Wrapper -->
    <div class="hidden-bar-wrapper">
        <div class="hidden-bar-closer">
            <span class="icon">
                <svg class="icon-close" role="presentation" viewbox="0 0 16 14">
                    <path d="M15 0L1 14m14 0L1 0" stroke="currentColor" fill="none" fill-rule="evenodd"></path>
                </svg>
            </span>
        </div>
        <div class="nav-logo-box">
            <!-- logo will be copied here ! -->
        </div>

        <!-- .Side-menu -->
        <nav class="side-menu">
            <!-- main-menu will be copied here! -->
        </nav><!-- .side-menu -->
    </div>
    <!-- / Hidden Bar Wrapper -->
</div>
<!-- / Hidden Bar -->
