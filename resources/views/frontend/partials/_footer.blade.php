        <!--footer start-->
        <footer class="footer widget-footer clearfix">
            <div class="first-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="first-footer-inner">
                                <div class="footer-logo">
                                    <img id="footer-logo-img" class="img-center" src="{{ asset(imagePath($site_logo, 'abouts')) }}" alt="{{ $about->site_name }}">

                                </div>
                                <div class="row no-gutters footer-box">
                                    <div class="col-md-4 widget-area">
                                        <div class="featured-box text-center">
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h5>Our Address</h5>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>{{ $about->address }}</p>
                                                    <p>{{ $about->address_one }}</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 widget-area">
                                        <div class="featured-box text-center">
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h5>Talk To Expert</h5>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>{{ $about->contact_number_one }} , {{ $about->contact_number_two }}</p>
                                                    <p>{{ $about->contact_number_three }}</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 widget-area">
                                        <div class="featured-box text-center">
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h5>Email Us</h5>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>{{ $about->email_one }}</p>
                                                    <p>{{ $about->email_two }}</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second-footer ttm-textcolor-white">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                            <div class="widget widget_text  clearfix">
                                <h3 class="widget-title">About {{ $about->site_name }}</h3>
                                <div class="textwidget widget-text">
                                    {{ Str::limit($about->site_description, '200') }}
                                    <br><br>
                                    <div class="social-icons circle social-hover">
                                        <ul class="list-inline">
                                            <li class="social-facebook"><a class="tooltip-top" target="_blank" href="{{ $about->facebook }}"
                                                    data-tooltip="Facebook"><i class="fa fa-facebook"
                                                        aria-hidden="true"></i></a></li>
                                            <li class="social-twitter"><a class="tooltip-top" target="_blank" href="{{ $about->twitter }}"

                                                    data-tooltip="Twitter"><i class="fa fa-twitter"
                                                        aria-hidden="true"></i></a></li>
                                            <li class="social-instagram"><a class=" tooltip-top" target="_blank" href="{{ $about->instagram }}"
                                                    data-tooltip="instagram"><i class="fa fa-instagram"
                                                        aria-hidden="true"></i></a></li>
                                            <li class="social-linkedin"><a class=" tooltip-top" target="_blank" href="#"
                                                    data-tooltip="LinkedIn"><i class="fa fa-linkedin"
                                                        aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <br>
                                    <div class="mb-20">
                                        <a class="ttm-btn ttm-btn-size-xs ttm-btn-shape-square ttm-btn-style-fill ttm-btn-bgcolor-skincolor ttm-btn-color-white"
                                            href="{{ route('about') }}">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                            <div class="widget widget_nav_menu clearfix">
                                <h3 class="widget-title">Quick Links</h3>
                                <ul id="menu-footer-services">
                                    <li><a href="{{ route('about.services') }}">Customer Services</a></li>
                                    <li><a href="#">Department Services</a></li>
                                    <li><a href="{{ route('about') }}">About Company</a></li>
                                    <li><a href="#">Meet Our Experts</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                            <div class="widget widget_text clearfix">
                                <h3 class="widget-title">Latest News</h3>
                                <ul class="widget-post ttm-recent-post-list">
                                    @foreach($latest_blogs as $blog)    
                                    <li>
                                        <a href="{{ route('blogs.show', $blog) }}"><img src="{{ asset(imagePath($blog->image, 'blogs')) }}"
                                                alt="{{ $blog->title }}"></a>
                                        <span class="post-date">{{ $blog->created_at['year']. ' ' .$blog->created_at['month'] . ' ' .$blog->created_at['day'] }}</span>

                                        <a href="{{ route('blogs.show', $blog) }}">{{ Str::limit($blog->title, 50) }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                            <div class="widget flicker_widget clearfix">
                                <h3 class="widget-title">Our Branches</h3>
                                <div class="textwidget widget-text">
                                    <ul class="ttm-our-location-list">
                                        @foreach($footer_contacts as $contact)
                                        <li><i class="fa fa-map-marker"></i>{{ $contact->country }}, {{ $contact->address }} &nbsp</li>
                                        <li><i class="fa fa-phone"></i>{{ $contact->phone_number_one }}, {{ $contact->phone_number_two }}</li>

                                       @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-footer-text ttm-textcolor-white">
                <div class="container">
                    <div class="row copyright">
                        <div class="col-md-12">
                            <div class="">
                                <span>Copyright © {{ date('Y') }}&nbsp;<a href="{{ route('home') }}">Franklin</a>. All rights reserved.</span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <ul id="menu-footer-menu" class="footer-nav-menu">
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('about.services') }}">Services</a></li>
                                <li><a href="{{ route('about') }}">Privacy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--footer end-->

        <!--back-to-top start-->
        <a id="totop" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!--back-to-top end-->

        </div><!-- page end -->


        <!-- Javascript -->

        <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
        <script src="{{ asset('frontend/js/tether.min.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.easing.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery-waypoints.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery-validate.js') }}"></script>
        <script src="{{ asset('frontend/js/owl.carousel.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.prettyPhoto.js') }}"></script>
        <script src="{{ asset('frontend/js/numinate.min6959.js?ver=4.9.3') }}"></script>
        <script src="{{ asset('frontend/js/main.js') }}"></script>

        <!-- Revolution Slider -->
        <script src="{{ asset('frontend/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('frontend/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
        <script src="{{ asset('frontend/revolution/js/slider.js') }}"></script>


        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->

        <script src="{{ asset('frontend/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
        <script src="{{ asset('frontend/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
        <script src="{{ asset('frontend/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
        <script src="{{ asset('frontend/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}">
        </script>
        <script src="{{ asset('frontend/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
        <script src="{{ asset('frontend/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
        <script src="{{ asset('frontend/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
        <script src="{{ asset('frontend/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>

        <!-- Javascript end-->
        @section('footerelements')
        @show
        </body>

        </html>
