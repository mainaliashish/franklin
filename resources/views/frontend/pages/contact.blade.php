@extends('frontend.layouts.app')

@section('main-content')
<!-- page-title -->
<div class="ttm-page-title-row">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-box ttm-textcolor-white">
                    <div class="page-title-heading">
                        <h1 class="title">Contact Information</h1>
                    </div><!-- /.page-title-captions -->
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="{{ route('home') }}"><i class="ti ti-home"></i>&nbsp;&nbsp;Home</a>
                        </span>
                        <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                        <span>Contact Information</span>
                    </div>
                </div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- page-title end-->
        <!-- contact-form-section END-->
<!--site-main start-->
<div class="site-main mb-0" style="padding:0px;padding-top:90px;">

    <!--contact-section-->
    <section class="ttm-row contact-grid-section clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-6">
                     @foreach($contacts as $contact)
                <div class="col-md-12 col-lg-12">
                    <!-- featured-imagebox-post -->
                    <div class="featured-imagebox featured-imagebox-post box-shadow contact-box">
                        <div class="featured-content featured-content-post">
                            <div class="post-title featured-title">
                                 <h5 class="text-center"><i class="fa fa-map-marker"></i><span class="contact-country">{{ $contact->country }}</span></h5>
                            </div>
                            <div class="post-meta-contact">
                                <ul>
                                <li class="ttm-meta-line-contact"><i class="fa fa-map-marker" style="color:red;"></i> <spam class="contact-details">{{ $contact->address}}, {{ $contact->address_one}}</li></span>
                                <li class="ttm-meta-line-contact"><i class="fa fa-phone" style="color:red;"></i> <spam class="contact-details">{{ $contact->phone_number_one}}, {{ $contact->phone_number_two}}, {{ $contact->phone_number_three}}, {{ $contact->phone_number_four}}</li></span>
                                <li class="ttm-meta-line-contact"><i class="fa fa-envelope-o" style="color:red;"></i> <spam class="contact-details">{{ $contact->email_one}}, {{ $contact->email_two}}</li></span>
                                </ul>
                            </div>
                        </div>
                    </div><!-- featured-imagebox-post end -->
                </div>
                @endforeach
                {{ $contacts->links() }}
                </div>
                <div class="col-md-6">
                     <!-- contact-form-section -->
                    <section class="ttm-row contact-form-section clearfix">
                        <div class="ttm-bgcolor-skincolor spacing-7 contact">
                            <!-- section title -->
                            <div class="section-title text-left with-desc clearfix" id="message__title">
                                <div class="title-header">
                                    <h2 class="title">Message Us</h2>
                                </div>
                            </div><!-- section title end -->
              
                            <div class="form-group">
                                <b><span class="text-success" id="success-message"> </span><b>
                            </div>

                            <form id="contact-form" class="ttm-contactform wrap-form clearfix" method="post" action="#">
                               
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>
                                            <span class="text-input">
                                                <input name="name" id="name" type="text" value="" placeholder="Your Name">
                                            </span>
                                            <span class="text-danger" id="name-error"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-12">
                                        <label>
                                            <span class="text-input">
                                                <input name="email" id="email" type="email" value="" placeholder="Your Email">
                                            </span>
                                            <span class="text-danger" id="email-error"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>
                                            <span class="text-input">
                                                <input name="phone" id="phone" type="text" value="" placeholder="Your Phone">
                                            </span>
                                            <span class="text-danger" id="phone-error"></span>
                                        </label>
                                    </div>
                                </div>
                                <label>
                                    <span class="text-input">
                                        <textarea name="message" id="message" cols="40" rows="3" placeholder="Message"></textarea>
                                    </span>
                                    <span class="text-danger" id="message-error"></span>

                                </label>
                                <input name="submit" type="submit" id="submit" class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-bgcolor-darkgrey" value="Send Message">
                            	<i class="loading-spinner fa fa-lg fas fas-spinner fa-spin"></i>

                            </form>
                        </div>
                    </div>
                </div>
            
        </section>
                </div>
               
            </div><!-- row end-->
        </div>
        
    </section>
    <!--contact-section end-->
  
</div>
<!--site-main end-->
@endsection

@section('headerElements')
<meta name="csrf-token" content="{{ csrf_token() }}">


@endsection

@section('footerelements')
    <script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#contact-form').on('submit', function(event){
        event.preventDefault();
        $('.loading-spinner').toggleClass('active');

        $('#name-error').text('');
        $('#email-error').text('');
        $('#phone').text('');
        $('#message-error').text('');

        name = $('#name').val();
        email = $('#email').val();
        phone = $('#phone').val();
        message = $('#message').val();

        $.ajax({
          url: "{{ route('contact.form') }}",
          type: "POST",
          data:{
              name:name,
              email:email,
              phone:phone,
              message:message,
          },

          success:function(response){
            console.log(response);
            if (response) {
              $('#success-message').text(response.success).fadeOut(6000);
              $("#contact-form")[0].reset();
            }
          },
          error: function(response) {
              $('#name-error').text(response.responseJSON.errors.name).fadeOut(4200);
              $('#email-error').text(response.responseJSON.errors.email).fadeOut(4200);
              $('#phone-error').text(response.responseJSON.errors.phone).fadeOut(4200);
              $('#message-error').text(response.responseJSON.errors.message).fadeOut(4200);
          }
         });
        });
    </script>
@endsection