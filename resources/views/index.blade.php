<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Azarbayjan Shahid Madani University</title>
    @include('includeCss')
</head>


<body style="background-color: #002147">
<!-- ##### Preloader ##### -->
<div id="preloader">
    <i class="circle-preloader"></i>
</div>

@include('header')


<!-- ##### Slider Start ##### -->
<section class="hero-area">
    <div class="hero-slides owl-carousel">

        <!-- Single  Slide -->
        @foreach($sliders as $slider)
        <div class="single-hero-slide bg-img " style="background-image: url( @if($slider->image != null) {{asset($slider->image->path)}} @endif );">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <h4 data-animation="fadeInUp" data-delay="100ms"></h4>
                            <h2 data-animation="fadeInUp" data-delay="400ms">{{$slider->title}}</h2>
                            @if($slider->link !== null)
                                <a href="{{$slider->link}}" class="btn academy-btn" data-animation="fadeInUp" data-delay="700ms" style="border-radius: 8px">Read More</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        <!-- Single  Slide -->
    </div>
</section>
<!-- ##### Slider End ##### -->


<!-- ##### Top Feature Area Start ##### -->
<div class="top-features-area wow fadeInUp" data-wow-delay="300ms">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="features-content">
                    <div class="row no-gutters">
                        <!-- Single Top Features -->
                        <div class="col-12 col-md-3">
                            <div class="single-top-features d-flex align-items-center justify-content-center">
                                <i class="fa fa-address-book-o"></i>
                                <a href="https://www.google.com/maps/place/Azarbaijan+Shahid+Madani+University/@37.8141037,45.9534153,15z/data=!4m5!3m4!1s0x0:0xce988b5a3c1d4573!8m2!3d37.8141037!4d45.9534153" target="_blank">
                                    <h5>Tabriz Guide</h5>
                                </a>
                            </div>
                        </div>
                        <!-- Single Top Features -->
                        <div class="col-12 col-md-3">
                            <div class="single-top-features d-flex align-items-center justify-content-center">
                                <i class="icon-worldwide"></i>
                                <a href="http://vtour.azaruniv.ac.ir" target="_blank">
                                    <h5>Take a Virtual Tour!</h5>
                                </a>
                            </div>
                        </div>
                        <!-- Single Top Features -->
                        <div class="col-12 col-md-3">
                            <div class="single-top-features d-flex align-items-center justify-content-center">
                                <i class="icon-map"></i>
                                <a href="https://www.google.com/maps/place/Azarbaijan+Shahid+Madani+University/@37.8141037,45.9534153,15z/data=!4m5!3m4!1s0x0:0xce988b5a3c1d4573!8m2!3d37.8141037!4d45.9534153" target="_blank">
                                <h5>Campus Map</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="single-top-features d-flex align-items-center justify-content-center">
                                <i class="icon-like"></i>
                                <a href="{{url('/contact-us')}}">
                                    <h5>Feedback</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Top Feature Area End ##### -->



<!-- ##### News and Info Start ##### -->
<div class="top-popular-courses-area section-padding-100-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center  mx-auto wow fadeInUp" data-wow-delay="300ms">
                    <span class="text-white " style="font-size: 1.2rem; font-weight: 800 "> Latest News & Info </span>
                </div>
            </div>
        </div>
        <div class="row">

            <!-- Single Top Popular Course -->
            @foreach($posts as $post)
            <div class="col-12 col-lg-6">
                <div class="single-top-popular-course d-flex  flex-wrap mb-30 wow fadeInUp" data-wow-delay="600ms">
                    <div class="popular-course-content">
                        @if($post->image != null)
                            <div class="popular-course-thumb bg-img " style="background-image: url({{asset($post->image->path)}});"></div>
                        @endif

                        <h4 >{{$post->title}}</h4>
                        <span style="font-weight: 500; font-size: 0.9rem">{{date_format($post->created_at, 'g:ia \o\n l jS F Y')}}</span>

                        <p style="font-size: 0.95rem">
                            {{substr(strip_tags($post->content), 0, 130)}}...
                        </p>
                        <a href="{{url('news-detail', $post->id)}}" class="btn academy-btn btn-sm">See More</a>
                    </div>
                 </div>
            </div>
                @endforeach






        </div>
    </div>
</div>
<!-- ##### News and Info End ##### -->

<!-- ##### Apply Now Start ##### -->


<div class="call-to-action-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cta-content d-flex align-items-center justify-content-between flex-wrap">
                    <h3>Do you want to Apply? Get in touch!</h3>
                    <a href="{{url('/student')}}" class="btn academy-btn">See More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Apply Now End ##### -->

@include('footer')

<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="js/bootstrap/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap/bootstrap.min.js"></script>
<!-- All Plugins js -->
<script src="js/plugins/plugins.js"></script>
<!-- Active js -->
<script src="js/active.js"></script>
</body>
</html>