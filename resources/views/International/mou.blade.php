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

{{--<div class="breadcumb-area bg-img" style="background-image: url({{asset('img/bg-img/breadcumb.jpg')}});">--}}
    {{--<div class="bradcumbContent" style="border-radius: 5px">--}}
        {{--<h2>Mou</h2>--}}
    {{--</div>--}}
</div>
<!-- ##### Blog Area Start ##### -->
<div class="blog-area mt-25 section-padding-100" >
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8" >
                <div class="academy-blog-posts">
                    <div class="row">

                        <!-- Single Blog Start -->
                        <div class="col-12" >
                            <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms" style="border-radius: 10px">
                                <!-- Post Thumb -->
                                <div class="mb-50 ">
                                    <img src="img/blog-img/contract.png" alt="" style="border-radius: 10px">
                                </div>
                                <!-- Post Title -->
                                <p class="text-dark " style="font-weight: 500; font-size: 1.5rem">List of universities contracts signed by <b>Azarbayjan Shahid Madani University</b></p>

                                <!-- Post Excerpt -->
                                        <ul class="dropdown" style="width:100%">
                                            @foreach($mous as $mou)
                                            <li style="font-size: 1.2rem; font-weight: 500; color: #000;" class=" py-3">- {{$mou->full_name}}</li>
                                            @endforeach

                                        </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="academy-blog-sidebar" >
                    <!-- Latest Blog Posts Area -->
                    <div class="latest-blog-posts mb-30" style="border-radius: 10px">
                        <h5>Latest Posts</h5>
                        <!-- Single Latest Blog Post -->
                        @foreach($posts as $post)
                        <div class="single-latest-blog-post d-flex mb-30">
                            <div class="latest-blog-post-thumb">
                                @if($post->image != null)
                                <img src="{{$post->image->path}}" alt="">
                                 @endif
                            </div>
                            <div class="latest-blog-post-content">
                                <a href="{{url('news-detail', $post->id)}}" class="post-title">
                                    <h6>{{$post->title}}</h6>
                                </a>
                                <a href="{{url('news-detail', $post->id)}}" class="post-date">{{date_format($post->created_at, 'g:ia Y-M-d')}}</a>
                            </div>
                        </div>
                        @endforeach

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