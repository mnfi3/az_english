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
<div class="blog-area mt-25 section-padding-100" >
    <div class="container">
        <div class="row">
            <div class="col-12" >
                <div class="academy-blog-posts">
                    <div class="row">

                        <!-- Single Blog Start -->
                        <div class="col-12" >
                            <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms" style="border-radius: 10px;background-color: #002147;">
                                <!-- Post Thumb -->


                                <div class="mb-50 mt-25 d-flex justify-content-center ">
                                    <!-- ##### Slider Start ##### -->
                                    <section class="hero-area" style="width: 70%;">
                                        <div class="hero-slides owl-carousel" style="">

                                            <!-- Single  Slide -->
                                            @foreach($campus->images as $image)
                                                <div class="single-hero-slide bg-img  " style="background-image: url('{{asset($image->path)}}'); height: 500px">
                                                </div>
                                            @endforeach

                                        </div>
                                    </section>
                                    <!-- ##### Slider End ##### -->
                                </div>


                                <!-- Post Excerpt -->
                                <p class="text-white" style="font-size: 1.1rem">
                                    @php echo $campus->content; @endphp
                                </p>
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