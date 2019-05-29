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
    <div class="bradcumbContent" style="border-radius: 5px">
        <h2>Conferences</h2>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Blog Area Start ##### -->
<div class="blog-area mt-25 section-padding-100" >
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8" >
                <div class="academy-blog-posts">
                    <div class="row">
                        <!-- Single Blog Start -->
                        @foreach($conferences as $conference)
                        <div class="col-12" >
                            <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms" style="border-radius: 10px">
                                <!-- Post Thumb -->
                                <div class="mb-50 mt-25 d-flex justify-content-center ">
                                    <!-- ##### Slider Start ##### -->
                                    <section class="hero-area" style="width: 70%;">
                                        <div class="hero-slides owl-carousel" style="">

                                            <!-- Single  Slide -->
                                            @foreach($research->images as $image)
                                                <div class="single-hero-slide bg-img  " style="background-image: url({{asset($image->path)}}); height: 500px">
                                                </div>
                                            @endforeach

                                        </div>
                                    </section>
                                    <!-- ##### Slider End ##### -->
                                </div>

                                <!-- Post Title -->
                                <a href="{{url('conference-detail', $conference->id)}}" class="post-title">
                                   {{$conference->title}}
                                </a>

                                <!-- Post Excerpt -->
                                <p>
                                    {{substr(strip_tags($conference->content), 0, 130)}}
                                </p>
                                <!-- Read More btn -->
                                <a href="{{url('conference-detail', $conference->id)}}" class="btn academy-btn btn-sm mt-15">Read More</a>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
                <!-- Pagination Area Start -->
                <div class="academy-pagination-area wow fadeInUp" data-wow-delay="400ms" >
                    <nav>
                        <ul class="pagination">
                            {{$conferences->links()}}
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