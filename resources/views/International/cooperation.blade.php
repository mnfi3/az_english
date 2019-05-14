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

<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img" style="background-image: url({{asset('img/bg-img/breadcumb.jpg')}});">
    {{--<div class="bradcumbContent" style="border-radius: 5px">--}}
    {{--<h2>Facultie of Engineering</h2>--}}
    {{--</div>--}}
</div>

<section id="main">
    <div class="container-fluid mb-100 mt-100" style="">
        <div class="row">
            <div class="col-12 col-md-3">
                <a href="{{url('/mou')}}">
                    <div class="card1 card">
                        <div class="card_image1">
                            <img src="{{asset('img/bg-img/mou.png')}}" />
                        </div>
                        <div class="card_title1" style="background-color: rgba(76,46,52,0.7); margin-top: -40px;">
                            <p class="text-white" style="font-size: 1.4rem">MOUs</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-3">
                <a href="{{url('/projects')}}">
                    <div class="card1 card ">
                        <div class="card_image1">
                            <img src="{{asset('img/bg-img/project.jpeg')}}" />
                        </div>
                        <div class="card_title1" style="background-color: rgba(76,46,52,0.7); margin-top: -40px";>
                            <p class="text-white" style="font-size: 1.4rem">Join Project</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-3">
                <a href="{{url('/conferences')}}">
                    <div class="card1 card">
                        <div class="card_image1">
                            <img src="{{asset('img/bg-img/conference.jpg')}}" />
                        </div>
                        <div class="card_title1" style="background-color: rgba(76,46,52,0.7); margin-top: -40px";>
                            <p class="text-white" style="font-size: 1.4rem">Conferences</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-3">
                <a href="{{url('/partnerships')}}">
                    <div class="card1 card">
                        <div class="card_image1">
                            <img src="{{asset('img/bg-img/partnership.jpg')}}" />
                        </div>
                        <div class="card_title1" style="background-color: rgba(76,46,52,0.7); margin-top: -40px";>
                            <p class="text-white" style="font-size: 1.4rem">Partnership</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

</section>



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