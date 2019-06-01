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

<!-- ##### About Us Area Start ##### -->
<section class="about-us-area mt-50 section-padding-50">
    <div class="container">

        <div class="row">
            <div class="col-12 col-md-12 wow fadeInUp" data-wow-delay="400ms">
                <p class="text-white" style="font-size: 1.1rem; font-weight: 600 ">
                    @if($history != null)
                        @php echo $history->content; @endphp
                    @endif
                </p>
            </div>

        </div>

    </div>
</section>
<!-- ##### About Us Area End ##### -->


<!-- ##### Slider Start ##### -->
<section class="hero-area mb-3" style="margin-left: 10%;margin-right: 10%; ">
    <div class="hero-slides owl-carousel">

        <!-- Single  Slide -->
        @if($history != null)
            @if($history->images !== null)
                @foreach($history->images as $image)
                    <div class="single-hero-slide bg-img" style="background-image: url({{asset($image->path)}});height: 650px;border-radius: 10px">

                    </div>
                @endforeach
            @endif
        @endif


    </div>
    </div>
</section>
<!-- ##### Slider End ##### -->


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