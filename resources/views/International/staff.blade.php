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
    {{--<h2>Staff</h2>--}}
    {{--</div>--}}
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Blog Area Start ##### -->
<div class="blog-area mt-25 section-padding-100" >
    <div class="container px-5">
        <div class="row">
            @foreach($staffs as $staff)
                <div class="col-12 col-md-6" >
                    <div class="academy-blog-posts">
                        <div class="row">

                            <!-- Single Blog Start -->
                            <div class="col-12" >
                                <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms" style="border-radius: 10px">
                                    <!-- Post Thumb -->
                                    <div class="mb-50 d-flex justify-content-center ">
                                        @if($staff->image != null)
                                            <img src="{{asset($staff->image->path)}}" alt="" class="w-100" style="border-radius: 10px;max-height: 300px; max-width: 240px; min-height:280px">
                                        @endif
                                    </div>
                                    <!-- Post Title -->
                                    <p class="post-title">{{$staff->type}}</p>

                                    <p class="text-dark ml-3" style="font-size: 1.3rem; font-weight: 700;"> {{$staff->full_name}} </p>
                                    <p class="text-dark ml-3 w-100" style="font-size: 1.2rem; font-weight: 500;">  Phone Number: {{$staff->phone}} <br>
                                        Fax Number:    {{$staff->fax}} <br>
                                        E-mail:
                                        {{$staff->email}}
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

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