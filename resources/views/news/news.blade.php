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
<div class="breadcumb-area bg-img" style="background-image: url({{asset('img/bg-img/breadcumb.jpg')}});">
    {{--<div class="bradcumbContent" style="border-radius: 5px">--}}
        {{--<h2>The News and Info</h2>--}}
    {{--</div>--}}
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Blog Area Start ##### -->
<div class="blog-area mt-25 section-padding-100" >
    <div class="container">
        <div class="row">

            <div class="col-12 col-md-8 " >

                @if($text != null)
                <div class="container-content ">
                    <h3 class="p-3 align-items-center text-center">
                        Serach for "{{$text}}"
                    </h3>
                </div>
                @endif

                <div class="academy-blog-posts">
                    <div class="row">

                        <!-- Single Blog Start -->
                        @foreach($posts as $post)
                        <div class="col-12" >
                            <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms" style="border-radius: 10px">
                                <!-- Post Thumb -->
                                <div class="mb-50 ">
                                    @if($post->image != null)
                                    <img src="{{asset($post->image->path)}}" alt="" style="border-radius: 10px">
                                    @endif
                                </div>
                                <!-- Post Title -->
                                <a href="{{url('/news-detail', $post->id)}}" class="post-title">{{$post->title}}</a>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p>{{date_format($post->created_at, 'g:ia \o\n l jS F Y')}}</p>
                                </div>
                                <!-- Post Excerpt -->
                                <p>
                                    {{substr(strip_tags($post->content), 0, 130)}}...
                                </p>
                                <!-- Read More btn -->
                                <a href="{{url('news-detail', $post->id)}}" class="btn academy-btn btn-sm mt-15">Read More</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- Pagination Area Start -->
                <div class="academy-pagination-area wow fadeInUp" data-wow-delay="400ms" >
                    <nav>
                        <ul class="pagination">
                            {{$posts->links()}}
                        </ul>
                    </nav>
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
                        @foreach($posts2 as $post)
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