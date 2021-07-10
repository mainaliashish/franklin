        <!--header start-->
        <header id="masthead" class="header ttm-header-style-classic">
            <!-- ttm-topbar-wrapper -->
            <div class="ttm-topbar-wrapper ttm-bgcolor-darkgrey ttm-textcolor-white clearfix">
                <div class="container">
                    <div class="ttm-topbar-content">
                        <div class="text-left">
                        <ul class="top-contact ttm-highlight-left text-left" style="background: green">
                            <li><i class="fa fa-clock-o"></i><strong>Open Hours:</strong> {{ $about->opening_hours }}</li>
                        </ul>
                        </div>
                        <div class="topbar-right text-right">
                            <ul class="top-contact">
                                <li><i class="fa fa-envelope-o"></i><a
                                        href="mailto:{{ $about->email_one }}">{{ $about->email_one }}</a></li>
                                <li><i class="fa fa-phone"></i>{{ $about->contact_number_one }}</li>
                            </ul>
                            <div class="ttm-social-links-wrapper list-inline">
                                <ul class="social-icons">
                                    <li><a href="{{ $about->facebook }}"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="{{ $about->twitter }}"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="{{ $about->instagram }}"><i class="fa fa-instagram"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- ttm-topbar-wrapper end -->
            <!-- ttm-header-wrap -->
            <div class="ttm-header-wrap">
                <!-- ttm-stickable-header-w -->
                <div id="ttm-stickable-header-w" class="ttm-stickable-header-w clearfix">
                    <div id="site-header-menu" class="site-header-menu">
                        <div class="site-header-menu-inner ttm-stickable-header">
                            <div class="container">
                                <!-- site-branding -->
                                <div class="site-branding">
                                    <a class="home-link" href="{{ route('home') }}" title="Franklin" rel="home">
                                        <img id="logo-img" class="img-center"
                                            src="{{ asset(imagePath($site_logo, 'abouts')) }}" alt="{{ $about->site_name }}">
                                    </a>
                                </div><!-- site-branding end -->
                                <!--site-navigation -->
                                <div id="site-navigation" class="site-navigation">
                                    
                                    <div class="ttm-rt-contact">
                                        <!-- header-icons -->
                                        <div class="ttm-header-icons">
                                            
                                            <div class="ttm-header-icon ttm-header-search-link">
                                                <a href="#"><i class="ti ti-search"></i></a>
                                                <div class="ttm-search-overlay">
                                                    <form method="GET" class="ttm-site-searchform" action="{{ route('search') }}">
                                                        @csrf
                                                        <div class="w-search-form-h">
                                                            <div class="w-search-form-row">
                                                                <div class="w-search-input">
                                                                    <input type="search" class="field searchform-s"
                                                                        name="query" placeholder="Type Word Then Enter...">
                                                                    <button type="submit">
                                                                        <i class="ti ti-search"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div><!-- header-icons end -->
                                    </div>
                                    <div class="ttm-menu-toggle">
                                        <input type="checkbox" id="menu-toggle-form" />
                                        <label for="menu-toggle-form" class="ttm-menu-toggle-block">
                                            <span class="toggle-block toggle-blocks-1"></span>
                                            <span class="toggle-block toggle-blocks-2"></span>
                                            <span class="toggle-block toggle-blocks-3"></span>
                                        </label>
                                    </div>
                                    <nav id="menu" class="menu">
                                        <ul class="dropdown">
                                            <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a
                                                    href="{{ route('home') }}">Home</a>
                                            <li class="{{ request()->routeIs('studyabroads*') ? 'active' : '' }}"><a href=" #">Study Abroad</a>
                                                <ul>
                                                    @foreach($studies_title as $title)
                                                    <li><a href="{{ route('studyabroads.show', $title->slug) }}">{{ 'Study in ' . $title->country_name }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>

                                            <li class="{{ request()->routeIs('testpreparations*') ? 'active' : '' }}"><a href="#">Test Preparation</a>
                                                <ul>
                                                    @foreach($tests_title as $test)      
                                                    <li><a href="{{ route('testpreparations.show', $test->slug) }}">{{ $test->test_name . ' Information' }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>

                                            <li class="{{ request()->routeIs('about*') ? 'active' : '' }}"><a href="#">About Us</a>
                                                <ul>
                                                    <li><a href="{{ route('about') }}">About</a></li>
                                                    <li><a href="{{ route('about.gallery') }}">Gallery</a></li>
                                                    <li><a href="{{ route('about.services') }}">Services</a></li>
                                                    <li><a href="{{ route('about.events') }}">Events</a></li>
                                                    <li><a href="{{ route('about.announcements') }}">Announcement</a></li>
                                                    <li><a href="{{ route('about.contacts') }}">Contact</a></li>
                                                </ul>
                                            </li>
                                            <li class="{{ request()->routeIs('blogs*') ? 'active' : '' }}"><a href="{{ route('blogs') }}">Blog</a></li>

                                        </ul>
                                    </nav>
                                </div><!-- site-navigation end-->
                            </div>
                        </div>
                    </div>
                </div><!-- ttm-stickable-header-w end-->
            </div>
            <!--ttm-header-wrap end -->
        </header>
        <!--header end-->
