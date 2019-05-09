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

<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img" style="background-image: url('img/bg-img/breadcumb.jpg');">
    {{--<div class="bradcumbContent" style="border-radius: 5px">--}}
        {{--<h2>Staff</h2>--}}
    {{--</div>--}}
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Blog Area Start ##### -->
<div class="blog-area mt-25 section-padding-100" >
    <div class="container px-5">
        <div class="row">
            <div class="col-12 col-md-6" >
                <div class="academy-blog-posts">
                    <div class="row">

                        <!-- Single Blog Start -->
                        <div class="col-12" >
                            <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms" style="border-radius: 10px">
                                <!-- Post Thumb -->
                                <div class="mb-50 d-flex justify-content-center ">
                                    <img src="{{asset('img/bg-img/salahshor.jpg')}}" alt="" class="w-100" style="border-radius: 10px;max-height: 300px;">
                                </div>
                                <!-- Post Title -->
                                <p class="post-title">The Managing Director :</p>

                                    <p class="text-dark ml-3" style="font-size: 1.3rem; font-weight: 700;">  Dr.Farzad Salahshoor</p>
                                    <p class="text-dark w-100" style="font-size: 1.2rem; font-weight: 500;">  Phone Number: +98-4134327539 <br>


                                    </p>
                                <p class="text-dark w-100" style="font-size: 1.2rem; font-weight: 500;">
                                    Fax Number:    +98-34327526 <br>

                                </p>
                                <p class="text-dark w-100" style="font-size: 1.2rem; font-weight: 500;">
                                    E-mail:
                                </p>
                                <p class="text-dark w-100 mr-auto" style="font-size: 1.2rem; font-weight: 500;">
                                    E-mail:
                                    farzad.salahshoor@gmail.com &

                                </p>
                                <p class="text-dark w-100" style="font-size: 1.2rem; font-weight: 500;">
                                    email@gmail.com
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
             </div>
            <div class="col-12 col-md-6" >
                <div class="academy-blog-posts">
                    <div class="row">

                        <!-- Single Blog Start -->
                        <div class="col-12" >
                            <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms" style="border-radius: 10px">
                                <!-- Post Thumb -->
                                <div class="mb-50 d-flex justify-content-center ">
                                    <img src="{{asset('img/bg-img/woman-avatar.png')}}" alt="" class="m-auto" style="border-radius: 10px; max-height: 250px;">
                                </div>
                                <!-- Post Title -->
                                <p class="post-title">Assistant :</p>

                                <p class="text-dark ml-3" style="font-size: 1.3rem; font-weight: 700;">  Mahsa Mehrangiz </p>
                                <p class="text-dark ml-3 w-100" style="font-size: 1.2rem; font-weight: 500;">  Phone Number: +98-4134327503 <br>
                                    Fax Number:    +98-34327526 <br>
                                    E-mail:
                                    mahsa.mehrangiz@yahoo.com &
                                    m.mehrangiz@azaruniv.ac.ir
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