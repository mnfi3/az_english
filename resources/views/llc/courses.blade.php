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

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body style="background-color: #002147;">
<!-- ##### Preloader ##### -->
<div id="preloader">
    <i class="circle-preloader"></i>
</div>

<!-- ##### Header Area Start ##### -->
@include('header')
<!-- ##### Header Area End ##### -->

<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
    {{--<div class="bradcumbContent">--}}
        {{--<h2>Courses</h2>--}}
    {{--</div>--}}
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Top Popular Courses Area Start ##### -->
<div class="top-popular-courses-area mt-50 section-padding-100-70">
    <div class="container">
        <div class="row">
            <!-- Single Top Popular Course -->
            <div class="col-12 col-lg-6">
                <div class="single-top-popular-course d-flex  flex-wrap mb-30 wow fadeInUp" data-wow-delay="600ms">
                    <div class="popular-course-content">
                        <div class="popular-course-thumb bg-img " style="background-image: url({{asset('img/bg-img/pc-4.jpg')}});"></div>

                        <h4>learning Persian In 6 Month</h4>
                        <p style="font-size: 0.95rem">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda atque dolorem eaque modi, numquam optio quo totam!</p>
                        <a href="{{url('/course-detail')}}" class="btn academy-btn btn-sm">See More</a>
                    </div>
                </div>
            </div>

            <!-- Single Top Popular Course -->
            <div class="col-12 col-lg-6">
                <div class="single-top-popular-course d-flex  flex-wrap mb-30 wow fadeInUp" data-wow-delay="600ms">
                    <div class="popular-course-content">
                        <div class="popular-course-thumb bg-img " style="background-image: url({{asset('img/bg-img/pc-3.jpg')}});"></div>

                        <h4>learning Persian In 6 Month</h4>
                        <p style="font-size: 0.95rem">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda atque dolorem eaque modi, numquam optio quo totam!</p>
                        <a href="{{url('/course-detail')}}" class="btn academy-btn btn-sm">See More</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="single-top-popular-course d-flex  flex-wrap mb-30 wow fadeInUp" data-wow-delay="600ms">
                    <div class="popular-course-content">
                        <div class="popular-course-thumb bg-img " style="background-image: url({{asset('img/bg-img/pc-2.jpg')}});"></div>

                        <h4>learning Persian In 6 Month</h4>
                        <p style="font-size: 0.95rem">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda atque dolorem eaque modi, numquam optio quo totam!</p>
                        <a href="{{url('/course-detail')}}" class="btn academy-btn btn-sm">See More</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="single-top-popular-course d-flex  flex-wrap mb-30 wow fadeInUp" data-wow-delay="600ms">
                    <div class="popular-course-content">
                        <div class="popular-course-thumb bg-img " style="background-image: url({{asset('img/bg-img/pc-2.jpg')}});"></div>

                        <h4>learning Persian In 6 Month</h4>
                        <p style="font-size: 0.95rem">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda atque dolorem eaque modi, numquam optio quo totam!</p>
                        <a href="{{url('/course-detail')}}" class="btn academy-btn btn-sm">See More</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- ##### Footer Area Start ##### -->
@include('footer')
<!-- ##### Footer Area Start ##### -->

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