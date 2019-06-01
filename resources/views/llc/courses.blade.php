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

    <!-- Favicon -->
    <link rel="icon" href="{{asset('img/core-img/favicon.ico')}}">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{asset('style.css')}}">

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
{{--<div class="breadcumb-area bg-img" style="background-image: url({{asset('img/bg-img/breadcumb.jpg')}});">--}}
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
            @foreach($courses as $course)
            <div class="col-12 col-lg-6">
                <div class="single-top-popular-course d-flex  flex-wrap mb-30 wow fadeInUp" data-wow-delay="600ms">
                    <div class="popular-course-content">
                        @if($course->image != null)
                        <div class="popular-course-thumb bg-img " style="background-image: url({{asset($course->image->path)}});"></div>
                        @endif

                        <h4>{{$course->title}}</h4>
                        <p style="font-size: 0.95rem">
                           {{substr(strip_tags($course->content), 0, 130)}}...
                        </p>
                        <a href="{{url('/course-detail', $course->id)}}" class="btn academy-btn btn-sm">See More</a>
                    </div>
                </div>
            </div>
            @endforeach



        </div>
        <div class="academy-pagination-area wow fadeInUp" data-wow-delay="400ms" >
            <nav>
                <ul class="pagination">
                    {{$courses->links()}}
                </ul>
            </nav>
        </div>
    </div>


</div>

<!-- ##### Footer Area Start ##### -->
@include('footer')
<!-- ##### Footer Area Start ##### -->

<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="{{asset('js/jquery/jquery-2.2.4.min.js')}}"></script>
<!-- Popper js -->
<script src="{{asset('js/bootstrap/popper.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>
<!-- All Plugins js -->
<script src="{{asset('js/plugins/plugins.js')}}"></script>
<!-- Active js -->
<script src="{{asset('js/active.js')}}"></script>
</body>

</html>