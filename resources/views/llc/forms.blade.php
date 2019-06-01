



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

<div class="container  bg-light mt-100 mb-50" style="border-radius: 10px;">
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
            <tr>
                <th scope="row">1</th>
                <td>Personal Information</td>
                <td><a href="#" style="color: #007bff"> Download </a></td>

            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Educational Information</td>
                <td><a href="#" style="color: #007bff"> Download </a></td>

            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Form type C</td>
                <td><a href="#" style="color: #007bff"> Download </a></td>

            </tr>
            </tbody>
        </table>
    </div>
</div>

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
<script>
  (function () {
    'use strict'

    if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
      var msViewportStyle = document.createElement('style')
      msViewportStyle.appendChild(
        document.createTextNode(
          '@-ms-viewport{width:auto!important}'
        )
      )
      document.head.appendChild(msViewportStyle)
    }

  }())
</script>
</body>

</html>