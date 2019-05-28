



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
        {{--<h2>Application form</h2>--}}
    {{--</div>--}}
</div>
<!-- ##### Breadcumb Area End ##### -->

<div class="container  bg-light mt-100 mb-50" style="border-radius: 10px">
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Row</th>
                <th scope="col">Form Name</th>
                <th scope="col">receive</th>
            </tr>
            </thead>
            <tbody style="alignment: center" class="">
            @php($i=0)
            @foreach($forms as $form)
            <tr>
                <th scope="row">{{++$i}}</th>
                <td>{{$form->name}}</td>
                @if($form->doc->path != null)
                <td><a href="{{\Illuminate\Support\Facades\URL::to('/').'/'.$form->doc->path}}" download style="color: #007bff"> Download </a></td>
                @else
                <td><a href="" download style="color: #007bff"> No File </a></td>
                @endif

            </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</div>

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
<script>

  // (function wa(){
  //   'use strict'
  //
  //   if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
  //     var msViewportStyle = document.createElement('style')
  //     msViewportStyle.appendChild(
  //       document.createTextNode(
  //         '@-ms-viewport{width:auto!important}'
  //       )
  //     )
  //     document.head.appendChild(msViewportStyle)
  //   }
  //
  // }())
</script>
</body>

</html>