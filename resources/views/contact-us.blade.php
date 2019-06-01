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

<body style="background-color: #002147">
<!-- ##### Preloader ##### -->
<div id="preloader">
    <i class="circle-preloader"></i>
</div>

<!-- ##### Header Area Start ##### -->
@include('header')
<div class="map-area wow fadeInUp mt-3 bg-warning" data-wow-delay="300ms">
    <div id="googleMap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.972721837367!2d45.9512212514282!3d37.814107917568066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x401a616a2e570e45%3A0xce988b5a3c1d4573!2sAzarbaijan+Shahid+Madani+University!5e0!3m2!1sen!2s!4v1556099719030!5m2!1sen!2s"  frameborder="0" style="border:0; width: 100%; height: 100%" allowfullscreen></iframe>
        {{--<iframe src="https://www.google.com/maps/place/Azarbaijan+Shahid+Madani+University/@37.8141079,45.9512213,17z/data=!3m1!4b1!4m5!3m4!1s0x401a616a2e570e45:0xce988b5a3c1d4573!8m2!3d37.8141037!4d45.9534153" frameborder="1" style=" border-radius:15px;border:#c1190b " allowfullscreen id="map"></iframe>--}}

    </div>
</div>

<!-- ##### Contact Area Start ##### -->
<section class="contact-area">
    <div class="container " style="background: -webkit-linear-gradient(to right, #f8e131, #f8a51f);
background: linear-gradient(to right, #f8e131, #f8a51f)">
        <div class="row">
            <div class="col-12">
                <div class="contact-content" style="background-color: rgba(32,57,76,0.97)">
                    <div class="row">
                        <!-- Contact Information -->
                        <div class="col-12 col-lg-5">
                            <div class="contact-information wow fadeInUp" data-wow-delay="400ms">
                                <div class="section-heading text-left">

                                    <h3 class="text-white">Contact Us</h3>
                                 </div>
                                <!-- Single Contact Info -->
                                <div class="single-contact-info d-flex text-white">
                                    <div class="contact-icon mr-15">
                                        <i class="icon-placeholder"></i>
                                    </div>
                                    <p class="text-white" style="font-size: 1.1rem">I.R.Iran,Tabriz,Shahid Madani University</p>
                                </div>

                                <!-- Single Contact Info -->
                                <div class="single-contact-info d-flex">
                                    <div class="contact-icon mr-15">
                                        <i class="icon-telephone-1"></i>
                                    </div>
                                    <p class="text-white" style="font-size: 1.1rem">Main: +98-41-34327526  <br> Office: +98-41-34327526 </p>
                                </div>

                                <!-- Single Contact Info -->
                                <div class="single-contact-info d-flex">
                                    <div class="contact-icon mr-15">
                                        <i class="icon-contract"></i>
                                    </div>
                                    <p class="text-white" style="font-size: 1.1rem"> m.mehrangiz@azaruniv.ac.ir </p>
                                </div>
                            </div>
                        </div>
                        <!-- Contact Form Area -->
                        <div class="col-12 col-lg-7 ">
                            <div class="contact-form-area  wow fadeInUp" data-wow-delay="500ms">
                                <form action="#" method="post">
                                    <input type="text" class="form-control" id="name" placeholder="Name">
                                    <input type="email" class="form-control" id="email" placeholder="E-mail">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                    <div  id="fileInputsContainer">
                                    <div class="d-flex flex-row justify-content-between">
                                    <input type="file" id="documents"
                                           class="form-control-file" name="documents[]">
                                    <button class="btn btn-outline-warning text-dark " onclick="addDocumentInput()">Add New Document</button>
                                    </div>
                                    </div>
                                    <button class="btn academy-btn mt-30" type="submit">Send</button>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Contact Area End ##### -->

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
<!-- Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
<script src="js/google-map/map-active.js"></script>
<script>
  function addDocumentInput() {
    var referenceNode = document.getElementById('fileInputsContainer').lastChild;
    var newNode = document.createElement("DIV");
    newNode.className += 'mt-1'
    newNode.innerHTML = '<input type="file"  required=""\n' +
      '                       class="form-control-file" name="documents[]">'
    referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
  }
</script>
</body>

</html>
