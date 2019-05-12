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


<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img" style="background-image: url({{asset('img/bg-img/breadcumb.jpg')}});">
    {{--<div class="bradcumbContent" style="border-radius: 5px">--}}
        {{--<h2>Facultie of Engineering</h2>--}}
    {{--</div>--}}
</div>

<!-- ##### Header Area End ##### -->

<!-- ##### Breadcumb Area Start ##### -->
<!--<div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">-->
<!--<div class="bradcumbContent" style="border-radius: 5px">-->
<!--<h2>The News and Info</h2>-->
<!--</div>-->
<!--</div>-->
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Blog Area Start ##### -->
<div class="blog-area mt-25 section-padding-100" >
    <div class="container">
        <div class="row">
            <div class="col-12" >
                <div class="academy-blog-posts">
                    <div class="row">
                        <!-- Single Blog Start -->
                        <div class="col-12" >
                            <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms" style="border-radius: 10px">
                                <!-- Post Thumb -->
                                <div class="mb-50 d-flex justify-content-center ">
                                    @if($faculty->image != null)
                                    <img src="{{asset($faculty->image->path)}}" alt="" class="" style="border-radius: 10px; max-height: 450px">
                                    @endif
                                </div>

                                <!-- Post Excerpt -->
                                <p class="" style="font-size: 1.5rem">
                                    @php echo $faculty->description; @endphp
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>


        </div>
        <h2 class="text-white pb-2">{{$faculty->name}} Faculty Departments</h2>
        <div id="accordion" role="tablist" class="mt-25">

            @php($i=0)
            @foreach($faculty->departments as $department)
                @php($i++)
                <div class="card">
                <div class="card-header bg-warning" role="tab" id="headingOne{{$department->id}}"  data-toggle="collapse"   href="#collapseOne{{$department->id}}" aria-expanded="true" aria-controls="collapseOne{{$department->id}}">
                    <h5 class="mb-0">
                        <a style="font-size: 1.2rem">
                            {{$department->name}}
                        </a>
                    </h5>
                </div>

                    @if($i == 1)
                <div id="collapseOne{{$department->id}}" class="collapse show" role="tabpanel" aria-labelledby="headingOne{{$department->id}}" data-parent="#accordion">
                    @else
                <div id="collapseOne{{$department->id}}" class="collapse show" role="tabpanel" aria-labelledby="headingOne{{$department->id}}" data-parent="#accordion">
                    @endif
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Row</th>
                                <th scope="col">Name</th>
                                <th scope="col">Specialty</th>
                                <th scope="col">Academic Rank </th>
                                <th scope="col">Email </th>
                                <th scope="col">Picture </th>
                                <th scope="col">CV </th>

                            </tr>
                            </thead>
                            <tbody style="alignment: center" class="">
                            @php($i=0)
                            @foreach($department->masters as $master)
                            <tr>
                                <th scope="row">{{++$i}}</th>
                                <td>{{$master->name}}</td>
                                <td>{{$master->speciality}}</td>
                                <td>{{$master->rank}}</td>
                                <td>{{$master->email}}</td>
                                <td>
                                    @if($master->image != null)
                                    <img src="{{asset($master->image->path)}}" class="img-container mt-0" alt="">
                                    @else
                                    <img src="" class="img-container mt-0" alt="">
                                    @endif
                                </td>
                                @if($master->doc != null)
                                <td><a href="{{\Illuminate\Support\Facades\URL::to('/').'/'.$master->doc->path}}" download>Download</a></td>
                                @else
                                <td><a href="{{$master->cv_link}}" target="_blank">Link</a></td>
                                @endif
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
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