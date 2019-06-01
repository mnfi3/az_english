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
    <!-- Core Stylesheet -->
    @include('includeCss')

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
    {{--<div class="bradcumbContent" style="border-radius: 5px">--}}
    {{--<h2>The News and Info</h2>--}}
    {{--</div>--}}
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Blog Area Start ##### -->
<div class="blog-area mt-25 section-padding-100" >
    <div class="container">
        <div class="card p-4 text-center">
            <div class="card-header text-dark bg text-center" style=" font-size: 4.5rem; text-align: left; font-weight: 500 ; border-radius: 10px" >
                <p style="font-size: 2.5rem;">
                    The Page Not Found
                </p>
                <i class="fa fa-frown-o" style="text-align: center;font-size: 4.5rem; align-content: center" ></i>
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