<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Azarbaijan Shahid Madani University</title>
    @include('includeCss')
</head>


<body style="background-color: #003066">
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
            <div class="single-hero-slide bg-img " style="background-image: url( '@if($slider->image != null) {{asset($slider->image->path)}} @endif');">
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
<div class="top-features-area wow  " data-wow-delay="300ms"  style="background-color: #d9d9d9">
    <div class="container" >
        <div class="row">
            <div class="col-12" >
                <div class="features-content " style="">
                    <div class="row no-gutters">
                        <!-- Single Top Features -->
                        <div class="col-12 col-md-3">
                            <div class="single-top-features d-flex align-items-center justify-content-center">
                                <i class="fa fa-address-book-o text-dark"></i>
                                <a href="https://www.google.com/maps/place/Azarbaijan+Shahid+Madani+University/@37.8141037,45.9534153,15z/data=!4m5!3m4!1s0x0:0xce988b5a3c1d4573!8m2!3d37.8141037!4d45.9534153" target="_blank">
                                    <h6>Tabriz Guide</h6>
                                </a>
                            </div>
                        </div>
                        <!-- Single Top Features -->
                        <div class="col-12 col-md-3">
                            <div class="single-top-features d-flex align-items-center justify-content-center">
                                <i class="icon-worldwide"></i>
                                <a href="http://vtour.azaruniv.ac.ir" target="_blank">
                                    <h6>Take a Virtual Tour!</h6>
                                </a>
                            </div>
                        </div>
                        <!-- Single Top Features -->
                        <div class="col-12 col-md-3">
                            <div class="single-top-features d-flex align-items-center justify-content-center">
                                <i class="icon-map"></i>
                                <a href="https://www.google.com/maps/place/Azarbaijan+Shahid+Madani+University/@37.8141037,45.9534153,15z/data=!4m5!3m4!1s0x0:0xce988b5a3c1d4573!8m2!3d37.8141037!4d45.9534153" target="_blank">
                                    <h6>Campus Map</h6>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="single-top-features d-flex align-items-center justify-content-center">
                                <i class="icon-like"></i>
                                <a href="{{url('/contact-us')}}">
                                    <h6>Feedback</h6>
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
<div class="top-popular-courses-area section-padding-100-70 mt-3" style="background-color: #d9d9d9">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center  mx-auto wow " data-wow-delay="300ms">

                    <span class="text-black " style="font-size: 1.2rem; font-weight: 600 "> Latest News & Information </span>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Single Top Popular Course -->
            @foreach($posts as $post)
                <div class="col-12 col-lg-6" style="border-color:  #6c757d ;">
                    <div class="single-top-popular-course d-flex  flex-wrap mb-30 wow " data-wow-delay="600ms" style=" border: 2px solid #f8a51f;">
                        <div class="popular-course-content">
                            @if($post->image != null)
                                <div class="popular-course-thumb bg-img " style="background-image: url({{asset($post->image->path)}}); max-width: 400px; min-height: 230px;"></div>
                            @endif
                            <h4 >{{$post->title}}</h4>
                            <span style="font-weight: 500; font-size: 0.7rem">{{date_format($post->created_at, 'g:ia \o\n l jS F Y')}}</span>
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