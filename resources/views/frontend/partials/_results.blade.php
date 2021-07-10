 <section class="element-row element-style" style="padding: 0px;margin-buttom:-80px;margin-top:30px;">
                <div class="container">
                    <div class="row ttm-fid-row-wrapper">
                        <div class="col-md-3 col-sm-6">
                            <!--ttm-fid-->
                            <div class="ttm-fid inside ttm-fid-view-lefticon">
                                <div class="ttm-fid-left">
                                    <div class="ttm-fid-icon-wrapper">
                                        <i class="ti ti-cup"></i>
                                    </div>
                                </div>
                                <div class="ttm-fid-contents text-left">
                                    <h4 class="ttm-fid-inner">
                                        <span data-appear-animation="animateDigits" data-from="0" data-to="{{ $result->number_of_students_enrolled }}"
                                            data-interval="25" data-before="" data-before-style="sup" data-after="+"
                                            data-after-style="sub">{{ $result->number_of_students_enrolled }}</span><span>+</span>
                                    </h4>
                                    <h3 class="ttm-fid-title">Students Enrolled</h3>
                                </div>
                            </div><!-- ttm-fid end-->
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!--ttm-fid-->
                            <div class="ttm-fid inside ttm-fid-view-lefticon">
                                <div class="ttm-fid-left">
                                    <div class="ttm-fid-icon-wrapper">
                                        <i class="ti ti-user"></i>
                                    </div>
                                </div>
                                <div class="ttm-fid-contents text-left">
                                    <h4 class="ttm-fid-inner">
                                        <span data-appear-animation="animateDigits" data-from="0" data-to="{{ $result->number_of_visas_lodged }}"
                                            data-interval="4" data-before="" data-before-style="sup" data-after="+"
                                            data-after-style="sub">{{ $result->number_of_visas_lodged }}</span><span>+</span>
                                    </h4>
                                    <h3 class="ttm-fid-title">Visas Lodged</h3>
                                </div>
                            </div><!-- ttm-fid end-->
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!--ttm-fid-->
                            <div class="ttm-fid inside ttm-fid-view-lefticon">
                                <div class="ttm-fid-left">
                                    <div class="ttm-fid-icon-wrapper">
                                        <i class="ti ti-star"></i>
                                    </div>
                                </div>
                                <div class="ttm-fid-contents text-left">
                                    <h4 class="ttm-fid-inner">
                                        <span data-appear-animation="animateDigits" data-from="0" data-to="{{ $result->number_of_partner_universities }}"
                                            data-interval="2" data-before="" data-before-style="sup" data-after="+"
                                            data-after-style="sub">{{ $result->number_of_partner_universities }}</span><span>+</span>
                                    </h4>
                                    <h3 class="ttm-fid-title">Partner Universities</h3>
                                </div>
                            </div><!-- ttm-fid end-->
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!--ttm-fid-->
                            <div class="ttm-fid inside ttm-fid-view-lefticon">
                                <div class="ttm-fid-left">
                                    <div class="ttm-fid-icon-wrapper">
                                        <i class="ti ti-medall"></i>
                                    </div>
                                </div>
                                <div class="ttm-fid-contents text-left">
                                    <h4 class="ttm-fid-inner">
                                        <span data-appear-animation="animateDigits" data-from="0" data-to="{{ $result->years_of_excellence }}"
                                            data-interval="1" data-before="" data-before-style="sup" data-after="+"
                                            data-after-style="sub">{{ $result->years_of_excellence }}</span><span>+</span>
                                    </h4>
                                    <h3 class="ttm-fid-title">Years of Experience</h3>
                                </div>
                            </div><!-- ttm-fid end-->
                        </div>
                    </div><!-- row end-->
                </div>
            </section>