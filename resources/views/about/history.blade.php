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





<!-- ##### About us Title Area Start ##### -->
<div class="breadcumb-area bg-img" style="background-image: url('img/bg-img/breadcumb.jpg');">
    {{--<div class="bradcumbContent">--}}
        {{--<h2>About ASMU</h2>--}}
    {{--</div>--}}
</div>
<!-- ##### About us Title End ##### -->



<!-- ##### About Us Area Start ##### -->
<section class="about-us-area mt-50 section-padding-50">
    <div class="container">

        <div class="row">
            <div class="col-12 col-md-12 wow fadeInUp" data-wow-delay="400ms">
                <p class="text-white" style="font-size: 1.1rem; font-weight: 600 ">Azarbaijan Shahid Madani University was founded in 1988 as an extension of Tarbiat Moa’lem (teacher education) University of Tehran, with the purpose of educating high school teachers for the Ministry of Education. In 2001, however, based on revisions of the objectives and needs, the university transformed itself into an all-purpose university offering degree courses at both undergraduate and postgraduate levels. The university was originally located in Tabriz, but later was moved to the outskirts of the city. Currently, near 7000 students study at 29 departments within 7 faculties, of which about 1200 study at postgraduate level. The total number of academic staff (inclusive of part time staff) is currently 320.</p>
            </div>

        </div>

    </div>
</section>
<!-- ##### About Us Area End ##### -->


<!-- ##### Slider Start ##### -->
<section class="hero-area mb-3" style="margin-left: 10%;margin-right: 10%; ">
    <div class="hero-slides owl-carousel">

        <!-- Single  Slide -->
        <div class="single-hero-slide bg-img" style="background-image: url('img/bg-img/library.jpg');height: 650px;border-radius: 10px">

        </div>

        <div class="single-hero-slide bg-img" style="background-image:url('img/bg-img/bg-2.jpg');height: 650px;border-radius: 10px">

        </div>

        <div class="single-hero-slide bg-img" style="background-image:url('img/bg-img/Entery.jpg');height: 650px;border-radius: 10px">

        </div>
    </div>
</section>
<!-- ##### Slider End ##### -->


{{--<!-- ##### Team Area Start ##### -->--}}
{{--<section class="teachers-area section-padding-0-50">--}}
    {{--<div class="container">--}}
        {{--<div class="breadcumb-area ">--}}
            {{--<div class="bradcumbContent" style="bottom: 20px;border-radius: 5px">--}}
                {{--<h2>University Officials</h2>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="row">--}}
            {{--<!-- Single Teachers -->--}}
            {{--<div class="col-12 col-sm-6 col-lg-4">--}}
                {{--<div class="single-teachers-area text-center mb-100 wow fadeInUp" data-wow-delay="400ms">--}}
                    {{--<!-- Thumbnail -->--}}
                    {{--<div class="teachers-thumbnail">--}}
                        {{--<img src="img/bg-img/salahshor.JPG" alt="">--}}
                    {{--</div>--}}
                    {{--<!-- Meta Info -->--}}
                    {{--<div class="teachers-info mt-30">--}}
                        {{--<h5 style="color: #ffffff;">Dr.Farzad Salahshor</h5>--}}
                        {{--<span class="py-4" style=" font-size: 1.1rem; font-weight: 400">International Relations</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<!-- Single Teachers -->--}}
            {{--<div class="col-12 col-sm-6 col-lg-4">--}}
                {{--<div class="single-teachers-area text-center mb-100 wow fadeInUp" data-wow-delay="500ms">--}}
                    {{--<!-- Thumbnail -->--}}
                    {{--<div class="teachers-thumbnail">--}}
                        {{--<img src="img/bg-img/CEO-valizade.jpg" alt="">--}}
                    {{--</div>--}}
                    {{--<!-- Meta Info -->--}}
                    {{--<div class="teachers-info mt-30">--}}
                        {{--<h5 style="color: #ffffff;">Dr.Hassan Valizade</h5>--}}
                        {{--<span class="py-4" style=" font-size: 1.1rem; font-weight: 400">Chief</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<!-- Single Teachers -->--}}
            {{--<div class="col-12 col-sm-6 col-lg-4">--}}
                {{--<div class="single-teachers-area text-center mb-100 wow fadeInUp" data-wow-delay="600ms">--}}
                    {{--<!-- Thumbnail -->--}}
                    {{--<div class="teachers-thumbnail">--}}
                        {{--<img src="img/bg-img/dr%20ajami.jpg" alt="">--}}
                    {{--</div>--}}
                    {{--<!-- Meta Info -->--}}
                    {{--<div class="teachers-info mt-30">--}}
                        {{--<h5 style="color: #ffffff;">Dr.Ali Ajami</h5>--}}
                        {{--<span class="py-4" style=" font-size: 1.1rem; font-weight: 400">Vice President For Reasearch</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
{{--<!-- ##### Features Area Start ##### -->--}}


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