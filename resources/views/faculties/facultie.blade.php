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




<!-- ##### Blog Area Start ##### -->
<div class="blog-area mt-25 section-padding-100" >
    <div class="container">
        <div class="row">
            <div class="col-12" >
                <div class="academy-blog-posts">
                    <div class="row">
                        <!-- Single Blog Start -->
                        <div class="col-12" >
                            <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms" style="border-radius: 10px;background-color: #002147;">
                                @if(count($faculty->images) > 0)
                                    <div class="mb-50 mt-25 d-flex justify-content-center ">
                                        <!-- ##### Slider Start ##### -->
                                        <section class="hero-area" style="width: 70%;">
                                            <div class="hero-slides owl-carousel" style="">

                                                <!-- Single  Slide -->
                                                @foreach($faculty->images as $image)
                                                    <div class="single-hero-slide bg-img  " style="background-image: url('{{asset($image->path)}}'); height: 500px">
                                                    </div>
                                                @endforeach

                                            </div>
                                        </section>
                                        <!-- ##### Slider End ##### -->
                                    </div>
                                @endif



                            <!-- Post Excerpt -->
                                <p class="text-white" style="font-size: 1.5rem">
                                    @php echo $faculty->description; @endphp
                                </p>

                                <h3 style="font-size: 1.1rem" class="text-white" > Faculty Dean : </h3>
                                {{--<p class="ml-3" style="font-size: 1.1rem"> {{$faculty->dean}} <br>--}}
                               <div class="text-white">
                                   {{$faculty->dean}}<br>
                                   {{$faculty->dean_phone}}<br>
                                   {{$faculty->dean_email}}</p>
                               </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>


        </div>



        <h2 class="text-white pb-2"> Departments</h2>
        <div id="accordion" role="tablist" class="mt-25">

            @php($i=0)
            @foreach($faculty->departments as $department)
                @php($i++)
                <div class="card">
                    <div class="card-header bg-warning tooltip1" role="tab" id="headingOne{{$department->id}}"  data-toggle="collapse"   href="#collapseOne{{$department->id}}" aria-expanded="true" aria-controls="collapseOne{{$department->id}}">
                        <h5 class="mb-0 hover">
                            <a style="font-size: 1.2rem">
                                {{$department->name}}
                            </a>
                        </h5>
                        <h6 class="text-dark  ml-1" style="">
                                <span class="ml-1" style="font-size: 0.9rem">
                                 DESCRIPTION :   <?php echo $department->description; ?>

                                </span>
                        </h6>
                        <span class=" tooltiptext "> Click For More Details </span>

                    </div>

                    <div id="collapseOne{{$department->id}}" class="collapse" role="tabpanel" aria-labelledby="headingOne{{$department->id}}" data-parent="#accordion" style="background-color: #e6e6e6">
                        <div style="width: 100%">
                            <h6 class="text-dark p-3 ml-3" style="font-size: 1.1rem; ">
                                Head of Departments :
                                <span class="ml-2" style="font-size: 1rem">{{$department->head}}</span>
                            </h6>
                        </div>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Row</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email </th>
                                    {{--<th scope="col">Picture </th>--}}
                                    <th scope="col">CV </th>

                                </tr>
                                </thead>
                                <tbody style="alignment: center" class="">
                                @php($i=0)
                                @foreach($department->masters as $master)

                                    <tr>
                                        <th scope="row">{{++$i}}</th>
                                        <td>{{$master->name}} </td>
                                        <td>{{$master->email}}</td>
                                        {{--<td>--}}
                                            {{--@if($master->image != null)--}}
                                                {{--<img src="{{asset($master->image->path)}}" class="img-container mt-0" alt="">--}}
                                            {{--@else--}}
                                                {{--<img src="" class="img-container mt-0" alt="">--}}
                                            {{--@endif--}}
                                        {{--</td>--}}
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