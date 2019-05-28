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
{{--<div class="breadcumb-area bg-img" style="background-image: url('img/bg-img/breadcumb.jpg');">--}}
    {{--<div class="bradcumbContent" style="border-radius: 5px">--}}
    {{--<h2>The News and Info</h2>--}}
    {{--</div>--}}
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Blog Area Start ##### -->
<div class="blog-area mt-25 section-padding-100" >
    <div class="container">
        <div class="row">
            <div class="col-md-8 p-4" id="content">
                <div class="container-content ">
                    <h3 class="p-3 align-items-center text-center">
                        Serach for "{{$text}}"
                    </h3>
                </div>
                <div class="card p-4 text-center">
                    <div class="card-header text-dark bg text-center" style="text-align: left; font-weight: 500 ; border-radius: 10px" >
                        <p>
                            Nothing Found
                        </p>
                        <i class="fa fa-frown-o" style="text-align: center;font-size: 2.5rem; align-content: center" ></i>
                    </div>

                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="academy-blog-sidebar" >
                    <!--&lt;!&ndash; Blog Post Widget &ndash;&gt;-->
                    <!--<div class="blog-post-search-widget mb-30">-->
                    <!--<form action="#" method="post">-->
                    <!--<input type="search" name="search" id="Search" placeholder="Search">-->
                    <!--<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>-->
                    <!--</form>-->
                    <!--</div>-->
                    <!-- Latest Blog Posts Area -->
                    <div class="latest-blog-posts mb-30" style="border-radius: 10px">
                        <h5>Latest Posts</h5>
                        @foreach($posts as $post)
                            <div class="single-latest-blog-post d-flex mb-30">
                                <div class="latest-blog-post-thumb">
                                    @if($post->image != null)
                                        <img src="{{asset($post->image->path)}}" alt="">
                                    @endif
                                </div>
                                <div class="latest-blog-post-content">
                                    <a href="{{url('/news-detail', $post->id)}}" class="post-title">
                                        <h6>{{$post->title}}</h6>
                                    </a>
                                    <a href="{{url('/news-detail', $post->id)}}" class="post-date">{{date_format($post->created_at, 'g:ia Y-M-d')}}</a>
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