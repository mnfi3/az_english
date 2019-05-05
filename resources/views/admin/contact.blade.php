<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!-- Title -->
    <title>Azarbayjan Shahid Madani University</title>
    <!-- Core Stylesheet -->

    @include('includeCss')

</head>

<body style="background-color: #002147; font-family: 'Times New Roman'">
<div class="container">
    <h3 class="text-white"><a href="{{url('/admin-home')}}" class="text-white btn btn-lg btn-outline-warning"
                              style="font-size: 20px"> <span><div class="fa fa-home"></div></span> Back to home </a>
    </h3>
    <h2 class=" text-white">Contact Us Section</h2>
</div>

<div class="container bg" >
    <div class="row mt-50 ">

        <div class="col-12 col-md-8 ">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group row pt-4">
                    <label class="col-md-4 col-form-label "
                           style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title" >Location :</label>
                    <div class="col-md-8 mr-auto">
                        <input type="text" id="title" required=""
                               class="form-control" name="name">
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <label class="col-md-4 col-form-label "
                           style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title" >Phone Number 1 :</label>
                    <div class="col-md-8 mr-auto">
                        <input type="text" id="title" required=""
                               class="form-control" name="name">
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <label class="col-md-4 col-form-label "
                           style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title" >Phone Number 2 :</label>
                    <div class="col-md-8 mr-auto">
                        <input type="text" id="title" required=""
                               class="form-control" name="name">
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <label class="col-md-4 col-form-label "
                           style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title" >Email :</label>
                    <div class="col-md-8 mr-auto">
                        <input type="text" id="title" required=""
                               class="form-control" name="name">
                    </div>
                </div>
                <div class="d-flex justify-content-center mb-3">
                    <button class="btn btn-success btn-lg mx-3" type="submit">Save</button>
                    <button class="btn btn-danger btn-lg mx-3" type="submit">Remove All</button>
                </div>
            </form>
        </div>

    </div>
    <br>
    <br>
</div>
<br>

<div class="container">
    <h2 class=" text-white">Usefull Links Section</h2>
</div>

<div class="container bg" >
    <div class="row mt-50 ">
        <div class="col-12 col-md-8 ">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group row pt-4">
                    <label class="col-md-4 col-form-label "
                           style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title" >Title :</label>
                    <div class="col-md-8 mr-auto">
                        <input type="text" id="title" required=""
                               class="form-control" name="name" placeholder="Enter Link Here">
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <label class="col-md-4 col-form-label "
                           style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title" >Link :</label>
                    <div class="col-md-8 mr-auto">
                        <input type="text" id="title" required=""
                               class="form-control" name="name" placeholder="Enter Link Here">
                    </div>
                </div>
                <div class="d-flex justify-content-center mb-3">
                    <button class="btn btn-success btn-lg mx-3" type="submit">Save</button>
                </div>
            </form>
        </div>
        <div class="col-12 col-md-4">
            <div class="d-flex justify-content-end">
                <h2 class="text-white">All Links</h2>
            </div>
            <div class="divider-red"></div>
            <ul class="nav-list d-flex flex-column p-0">
                <li class="d-flex flex-row justify-content-between bg-danger mt-4 p-1 " style="border-radius: 10px">
                    <a href="http://pcms.azaruniv.ac.ir/post/9" class="text-white mt-2" style="font-size: 1rem">TabrizUni.com</a>
                    <form class="align-self-center" action="" method="post">
                        <input type="submit" class="btn btn-success  " value="Delete">
                    </form>
                </li>
            </ul>
        </div>

    </div>
    <br>
    <br>
</div>



<div class="container mt-50 mb-50">

    <h2 class=" text-white">Received Message Section</h2>
</div>

<div class="container bg" >
    <table class="table table-striped">
        <thead class="thead-inverse text-white" style="background-color: #002147">
        <tr class="text-white">
            <th>#</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>date</th>
            <th>Message</th>
            <th>File</th>
        </tr>
        </thead>
        <tbody >
        <tr>
            <th scope="row">1</th>
            <td>Bahram Nouraie</td>
            <td>aliarabgary@gmail.com</td>
            <td >1397/01/29</td>
            <td><button class="btn bg-dark btn-outline-danger text-white" type="button" data-toggle="modal" data-target="#Modal">Observe</button></td>
            <td><a href="">download</a>  </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>farzade hassani</td>
            <td>farjamiiii@gmail.com</td>
            <td >1396/11/09</td>
            <td><button class="btn bg-dark btn-outline-danger text-white" type="button" data-toggle="modal" data-target="#Modal">Observe</button></td>
            <td><a href="">download</a>  </td>

        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Ali noori</td>
            <td>m.molaee@gmail.com</td>
            <td >1395/08/13</td>
             <td><button class="btn bg-dark btn-outline-danger text-white" type="button" data-toggle="modal" data-target="#Modal">Observe</button></td>
            <td><a href="">download</a> </td>

        </tr>
        </tbody>
    </table>
    <br>
    <br>
</div>

<!--MESSAGE MODAL-->
<div class="modal rtl" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title ml-auto" id="exampleModalLabel">Message Content : </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ">
                <p class="user-messages" style="font-family: 'Times New Roman'; alignment: left"  >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur doloremque et fuga illo inventore ipsam magni minima natus odio officia, omnis quaerat quas, reprehenderit repudiandae tempore unde veritatis! Beatae eum magni modi, quod saepe sit?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
<!-- Modal -->

{{--<div class="container">--}}
    {{--<h2>Large Modal</h2>--}}
    {{--<!-- Trigger the modal with a button -->--}}
    {{--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Large Modal</button>--}}

    {{--<!-- Modal -->--}}
    {{--<div class="modal " id="myModal" role="dialog">--}}
        {{--<div class="modal-dialog modal-lg">--}}
            {{--<div class="modal-content">--}}
                {{--<div class="modal-header">--}}
                    {{--<button type="button" class="close" data-dismiss="modal">&times;</button>--}}
                    {{--<h4 class="modal-title">Modal Header</h4>--}}
                {{--</div>--}}
                {{--<div class="modal-body">--}}
                    {{--<p>This is a large modal.</p>--}}
                {{--</div>--}}
                {{--<div class="modal-footer">--}}
                    {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

</body>
</html>