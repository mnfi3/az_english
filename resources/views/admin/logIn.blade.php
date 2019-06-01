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

<body style="background-color: #002147; font-family: Vazir">
<!-- ##### Preloader ##### -->
<div id="preloader">
    <i class="circle-preloader"></i>
</div>
<section id="login" class="w-100 py-3">
    <div class="container">
        <div class="header text-center">
            <img src="{{asset('img/bg-img/logo2.png')}}" alt="" class="img-fluid  ml-auto">
            <h3 class="pt-4 " style="font-family: Vazir"> سیستم مدیریت سایت انگلیسی دانشگاه</h3>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body mt-3">
                        <form method="POST" action="{{route('login')}}">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-3">
                                    <input id="email" type="email"
                                           class="form-control"
                                           name="email"  required autofocus placeholder="ایمیل">
                                        <span class="invalid-feedback" role="alert">
                                        <strong>Error</strong>
                                    </span>

                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-3">
                                    <input id="password" type="password"
                                           class="form-control"
                                           name="password" required placeholder="رمز عبور">
                                        <span class="invalid-feedback" role="alert">
                                        <strong>Error</strong>
                                    </span>

                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <div class="col-md-6 offset-md-3">
                                    <button type="submit" class="btn btn-app btn-block text-dark">
                                        ورود
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
</section>


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
<!-- Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
<script src="js/google-map/map-active.js"></script>
</body>

</html>