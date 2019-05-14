



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
    <div class="breadcumb-area bg-img" style="background-image: url('img/bg-img/breadcumb.jpg');">
        {{--<div class="bradcumbContent" style="border-radius: 5px">--}}
            {{--<h2>Departments</h2>--}}
        {{--</div>--}}
    </div>
    <!-- ##### Breadcumb Area End ##### -->
    <div class="container mt-25 section-padding-100">

    <div id="accordion" role="tablist">
        <div class="card">
            <div class="card-header bg-warning" role="tab" id="headingOne"  data-toggle="collapse"   href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <h5 class="mb-0">
                    <a style="font-size: 1.2rem">
                        Department Of Biology
                    </a>
                </h5>
            </div>

            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
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

                        </tr>
                        </thead>
                        <tbody style="alignment: center" class="">
                        <tr>
                            <th scope="row">1</th>
                            <td>Hassan valizade</td>
                            <td>Engineer</td>
                            <td>Prof</td>
                            <td>valizade@azaruniv.ac.ir</td>
                            <td>
                                    <img src="{{asset('img/clients-img/person.jpg')}}" class="img-container mt-0" alt="">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Hassan valizade</td>
                            <td>Engineer</td>
                            <td>Prof</td>
                            <td>valizade@azaruniv.ac.ir</td>
                            <td>
                                <img src="{{asset('img/clients-img/person.jpg')}}" class="img-container mt-0" alt="">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Hassan valizade</td>
                            <td>Engineer</td>
                            <td>Prof</td>
                            <td>valizade@azaruniv.ac.ir</td>
                            <td>
                                <img src="{{asset('img/clients-img/person.jpg')}}" class="img-container mt-0" alt="">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <div class="card">
            <div class="card-header" style="background-color: #002147" role="tab" id="headingOne"  data-toggle="collapse"   href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <h5 class="mb-0 text-white">
                    <a class="collapsed text-white" style="font-size: 1.2rem" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Department of Chemistry
                    </a>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
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

                        </tr>
                        </thead>
                        <tbody style="alignment: center" class="">
                        <tr>
                            <th scope="row">1</th>
                            <td>Hassan valizade</td>
                            <td>Engineer</td>
                            <td>Prof</td>
                            <td>valizade@azaruniv.ac.ir</td>
                            <td>
                                <img src="{{asset('img/clients-img/person.jpg')}}" class="img-container mt-0" alt="">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Hassan valizade</td>
                            <td>Engineer</td>
                            <td>Prof</td>
                            <td>valizade@azaruniv.ac.ir</td>
                            <td>
                                <img src="{{asset('img/clients-img/person.jpg')}}" class="img-container mt-0" alt="">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Hassan valizade</td>
                            <td>Engineer</td>
                            <td>Prof</td>
                            <td>valizade@azaruniv.ac.ir</td>
                            <td>
                                <img src="{{asset('img/clients-img/person.jpg')}}" class="img-container mt-0" alt="">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header bg-warning" role="tab" id="headingThree"  data-toggle="collapse"   href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                <h5 class="mb-0">
                    <a style="font-size: 1.2rem">
                        Department Of Biology
                    </a>
                </h5>
            </div>

            <div id="collapseThree" class="collapse " role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
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

                        </tr>
                        </thead>
                        <tbody style="alignment: center" class="">
                        <tr>
                            <th scope="row">1</th>
                            <td>Hassan valizade</td>
                            <td>Engineer</td>
                            <td>Prof</td>
                            <td>valizade@azaruniv.ac.ir</td>
                            <td>
                                <img src="{{asset('img/clients-img/person.jpg')}}" class="img-container mt-0" alt="">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Hassan valizade</td>
                            <td>Engineer</td>
                            <td>Prof</td>
                            <td>valizade@azaruniv.ac.ir</td>
                            <td>
                                <img src="{{asset('img/clients-img/person.jpg')}}" class="img-container mt-0" alt="">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Hassan valizade</td>
                            <td>Engineer</td>
                            <td>Prof</td>
                            <td>valizade@azaruniv.ac.ir</td>
                            <td>
                                <img src="{{asset('img/clients-img/person.jpg')}}" class="img-container mt-0" alt="">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <div class="card">
            <div class="card-header" style="background-color: #002147" role="tab" id="headingFour"  data-toggle="collapse"   href="#collapsefour" aria-expanded="true" aria-controls="collapsefour">
                <h5 class="mb-0 text-white">
                    <a class="collapsed text-white" style="font-size: 1.2rem" data-toggle="collapse" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                        Department of Chemistry
                    </a>
                </h5>
            </div>
            <div id="collapsefour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
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

                        </tr>
                        </thead>
                        <tbody style="alignment: center" class="">
                        <tr>
                            <th scope="row">1</th>
                            <td>Hassan valizade</td>
                            <td>Engineer</td>
                            <td>Prof</td>
                            <td>valizade@azaruniv.ac.ir</td>
                            <td>
                                <img src="{{asset('img/clients-img/person.jpg')}}" class="img-container mt-0" alt="">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Hassan valizade</td>
                            <td>Engineer</td>
                            <td>Prof</td>
                            <td>valizade@azaruniv.ac.ir</td>
                            <td>
                                <img src="{{asset('img/clients-img/person.jpg')}}" class="img-container mt-0" alt="">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Hassan valizade</td>
                            <td>Engineer</td>
                            <td>Prof</td>
                            <td>valizade@azaruniv.ac.ir</td>
                            <td>
                                <img src="{{asset('img/clients-img/person.jpg')}}" class="img-container mt-0" alt="">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header bg-warning" role="tab" id="headingFive"  data-toggle="collapse"   href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                <h5 class="mb-0">
                    <a style="font-size: 1.2rem">
                        Department Of Biology
                    </a>
                </h5>
            </div>

            <div id="collapseFive" class="collapse " role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion">
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

                        </tr>
                        </thead>
                        <tbody style="alignment: center" class="">
                        <tr>
                            <th scope="row">1</th>
                            <td>Hassan valizade</td>
                            <td>Engineer</td>
                            <td>Prof</td>
                            <td>valizade@azaruniv.ac.ir</td>
                            <td>
                                <img src="{{asset('img/clients-img/person.jpg')}}" class="img-container mt-0" alt="">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Hassan valizade</td>
                            <td>Engineer</td>
                            <td>Prof</td>
                            <td>valizade@azaruniv.ac.ir</td>
                            <td>
                                <img src="{{asset('img/clients-img/person.jpg')}}" class="img-container mt-0" alt="">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Hassan valizade</td>
                            <td>Engineer</td>
                            <td>Prof</td>
                            <td>valizade@azaruniv.ac.ir</td>
                            <td>
                                <img src="{{asset('img/clients-img/person.jpg')}}" class="img-container mt-0" alt="">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <div class="card">
            <div class="card-header" style="background-color: #002147" role="tab" id="headingSix"  data-toggle="collapse"   href="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                <h5 class="mb-0 text-white">
                    <a class="collapsed text-white" style="font-size: 1.2rem" data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseTwo">
                        Department of Chemistry
                    </a>
                </h5>
            </div>
            <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix" data-parent="#accordion">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr >
                            <th scope="col">Row</th>
                            <th scope="col">Name</th>
                            <th scope="col">Specialty</th>
                            <th scope="col">Academic Rank </th>
                            <th scope="col">Email </th>
                            <th scope="col">Picture </th>

                        </tr>
                        </thead>
                        <tbody style="alignment: center" class="">
                        <tr>
                            <th scope="row">1</th>
                            <td>Hassan valizade</td>
                            <td>Engineer</td>
                            <td>Prof</td>
                            <td>valizade@azaruniv.ac.ir</td>
                            <td>
                                <img src="{{asset('img/clients-img/person.jpg')}}" class="img-container mt-0" alt="">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Hassan valizade</td>
                            <td>Engineer</td>
                            <td>Prof</td>
                            <td>valizade@azaruniv.ac.ir</td>
                            <td>
                                <img src="{{asset('img/clients-img/person.jpg')}}" class="img-container mt-0" alt="">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Hassan valizade</td>
                            <td>Engineer</td>
                            <td>Prof</td>
                            <td>valizade@azaruniv.ac.ir</td>
                            <td>
                                <img src="{{asset('img/clients-img/person.jpg')}}" class="img-container mt-0" alt="">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

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
      // (function wa() {
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