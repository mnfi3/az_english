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


<div class="breadcumb-area bg-img" style="background-image: url({{asset('img/bg-img/breadcumb.jpg')}});">

</div>
<!-- ##### Header Area End ##### -->

<!-- ##### Breadcumb Area Start ##### -->
<!--<div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">-->
<!--<div class="bradcumbContent" style="border-radius: 5px">-->
<!--<h2>The News and Info</h2>-->
<!--</div>-->
<!--</div>-->
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Blog Area Start ##### -->
<div class="blog-area mt-25 section-padding-100" >
    <div class="container">
        <div class="row">
            <div class="col-12" >
                <div class="academy-blog-posts">
                    <div class="row">

                        <!-- Single Blog Start -->
                        <div class="col-12" >
                            <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms" style="border-radius: 10px">
                                <!-- Post Thumb -->
                                    @if($research != null)
                                    <div class="mb-50 d-flex justify-content-center ">
                                        @if($research->image != null)
                                            <img src="{{asset($research->image->path)}}" alt="" class="" style="border-radius: 10px;max-height: 450px">
                                        @endif
                                    </div>
                                    <!-- Post Title -->
                                    <p class="text-dark " style="font-weight: 500; font-size: 1.5rem">{{$research->title}}</p>

                                    <!-- Post Excerpt -->
                                    <p class="" style="font-size: 1.1rem">
                                        @php
                                        echo $research->description;
                                        @endphp
                                    </p>
                                    @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- ##### Blog Area End ##### -->

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