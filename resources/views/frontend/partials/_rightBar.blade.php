<div class="col-lg-3 widget-area ttm-bgcolor-grey pull-right">
                    <aside class="widget widget-search">
                        <form role="search" method="get" class="search-form  box-shadow" action="#">
                            <label>
                                <span class="screen-reader-text">Search for:</span>
                                <i class="fa fa-search"></i>
                                <input type="search" class="input-text" placeholder="Search …" value="" name="s">
                            </label>
                        </form>
                    </aside>
                    <aside class="widget widget-text">
                        <div class="ttm-author-widget">
                            <div class="img img-rounded">
                                <img class="author-img" src="{{ asset(imagePath($site_logo, 'abouts')) }}"
                                    alt="{{ $about->site_name }}" style="width:226px;height:90px;">

                            </div>
                        </div>
                    </aside>
                    <aside class="widget contact-widget">
                        <h3 class="widget-title">Get in touch</h3>
                        <ul class="contact-widget-wrapper">
                            <li><i class="fa fa-map-marker"></i>{{ $about->address }}</li>
                            <li><i class="fa fa-envelope-o"></i><a href="mailto:{{ $about->email_one }}"
                                    target="_blank">{{ $about->email_one }}</a></li>
                            <li><i class="fa fa-phone"></i>{{ $about->contact_number_one }},
                                {{ $about->contact_number_one }}</li>
                            <li><i class="ti ti-alarm-clock"></i>{{ $about->opening_hours }}</li>
                        </ul>
                    </aside>
                 <aside class="widget widget-categories">
                    <h3 class="widget-title">Blog Categories</h3>
                    <ul>
                        @foreach($categories as $category)
                        <li><a href="{{ route('blogs.showcat', $category) }}">{{ $category->name }}</a><span>{{ $category->blogs->count() }}</span></li>
                        @endforeach
                    </ul>
                </aside>
                    <aside class="widget contact-widget">
                        <h3 class="widget-title">Social Links</h3>
                        <ul class="social-media">
                            <li class="facebook">
                            <a href="{{ $about->facebook }}">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                            <span> - Facebook</span>
                            </a>
                            </li>
                            <li class="twitter">
                            <a href="{{ $about->twitter }}">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <span> - Twitter</span>
                            </a>
                            </li>
                            <li class="instagram">
                            <a href="{{ $about->instagram }}">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                            <span> - Instagram</span>
                            </a>
                            </li>
                    </aside>
                </div>