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

<body style="background-color: #002147; font-family: FontAwesome">
<div class="container">
    <h3 class="text-white"><a href="{{url('/admin-home')}}" class="text-white btn btn-lg btn-outline-warning"
                              style="font-size: 20px"> <span><div class="fa fa-home"></div></span> Back to home </a>
    </h3>
    <h2 class=" text-white">Department Section</h2>
</div>
<div class="container bg" style=" border-radius: 15px;">
    <div class="row mt-50 ">
        <div class="col-12 col-md-8 ">
            <form action="{{url('department-add')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row pt-4">
                    <label class="col-md-4 col-form-label "
                           style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Faculty Name :</label>
                    <div class="col-md-8 mr-auto">
                        <select name="faculty_id" id="" class="form-control">
                            <option value="0"></option>
                            @foreach($faculties as $faculty)
                                <option value="{{$faculty->id}}">{{$faculty->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row py-4">
                    <label class="col-md-4 col-form-label "
                           style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Department Name
                        :</label>
                    <div class="col-md-8 mr-auto">
                        <input type="text" id="title" required=""
                               class="form-control" name="name" placeholder="Enter Name Here">
                    </div>
                </div>
                <div class="form-group row py-4">
                    <label class="col-md-4 col-form-label "
                           style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Department Head Name
                        :</label>
                    <div class="col-md-8 mr-auto">
                        <input type="text" id="title" required=""
                               class="form-control" name="head" placeholder="Enter Head Name Here">
                    </div>
                </div>
                <div class="d-flex justify-content-center mb-3">
                    <button class="btn btn-success mt-30 mx-3" type="submit">Save</button>
                </div>
            </form>
        </div>
        <div class="col-12 col-md-4">
            <div class="d-flex justify-content-end">
                <h2 class="text-white">All Department</h2>
            </div>
            <div class="divider-red"></div>
            <ul class="nav-list d-flex flex-column p-0">
                @foreach($departments as $department)
                <li class="d-flex flex-row justify-content-between bg-danger mt-1 p-1 " style="border-radius: 10px">
                    <a href="#" class="text-white mt-2" style="font-size: 1rem">{{$department->name}}</a>
                    <form class="align-self-center" action="{{url('department-remove')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$department->id}}">
                        <input type="submit" class="btn btn-success  " value="Delete">
                    </form>
                </li>
                @endforeach

            </ul>
        </div>
    </div>
    <br>
    <br>
</div>
<div class="container">
    <div class="d-flex flex-row justify-content-between mt-50">
    </div>
    {{--<h3 class="text-white"><a href="{{url('/admin-home')}}" class="text-white btn btn-lg btn-outline-warning" style="font-size: 20px"> <span><div class="fa fa-home"></div></span>  Back to home </a></h3>--}}
    <h2 class=" text-white">Add Member For Departments</h2>
</div>
<div class="container bg" style=" ">
    <div class="row mt-50 ">

        <div class="col-12 col-md-8 ">
            <form action="{{url('master-add')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row pt-4">
                    <label class="col-md-4 col-form-label "
                           style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Dempartment Name :</label>
                    <div class="col-md-8 mr-auto">
                        <select name="department_id" id="" class="form-control">
                            <option value="0"></option>
                            @foreach($departments as $department)
                            <option value="{{$department->id}}">{{$department->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <label class="col-md-4 col-form-label "
                           style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title" >Master's Name :</label>
                    <div class="col-md-8 mr-auto">
                            <input type="text" id="title" required=""
                                      class="form-control" name="name">
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <label class="col-md-4 col-form-label "
                           style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Master's Research Area :</label>
                    <div class="col-md-8 mr-auto">
                        <input type="text" id="title" required=""
                               class="form-control" name="speciality">
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <label class="col-md-4 col-form-label "
                           style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Master's Academic Rank :</label>
                    <div class="col-md-8 mr-auto">
                        <input type="text" id="title" required=""
                               class="form-control" name="rank">
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <label class="col-md-4 col-form-label "
                           style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Master's Email :</label>
                    <div class="col-md-8 mr-auto">
                        <input type="text" id="title" required=""
                               class="form-control" name="email">
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <label class="col-md-4 col-form-label "
                           style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Master's CV Link (if exist) :</label>
                    <div class="col-md-8 mr-auto">
                        <input type="text" id="title"
                               class="form-control" name="cv_link">
                    </div>
                </div>
                <div class="form-group row py-4">
                    <label class="col-md-3 col-form-label "
                           style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Image for Master :</label>
                    <div class="col-md-8 mr-auto">
                        <div id="fileInputsContainer">
                            <div class="d-flex flex-row justify-content-between">
                                <input type="file" id="documents"
                                       class="form-control-file" name="images[]">
                             </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row py-4">
                    <label class="col-md-3 col-form-label "
                           style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">CV for Master :</label>
                    <div class="col-md-8 mr-auto">
                        <div id="fileInputsContainer">
                            <div class="d-flex flex-row justify-content-between">
                                <input type="file" id="documents"
                                       class="form-control-file" name="documents[]">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center mb-3">
                    <button class="btn btn-success btn-lg mx-3" type="submit">Save</button>
                </div>
            </form>
        </div>
        <div class="col-12 col-md-4">
            <div class="d-flex justify-content-end">
                <h2 class="text-white">All Masters</h2>
            </div>
            <div class="divider-red"></div>
            <ul class="nav-list d-flex flex-column p-0">
                @foreach($masters as $master)
                <li class="d-flex flex-row justify-content-between bg-danger mt-1 p-1 " style="border-radius: 10px">
                    <a href="{{url('admin-master-edit', $master->id)}}" class="text-white mt-2" style="font-size: 1rem">{{$master->name}}</a>
                    <form class="align-self-center" action="{{url('master-add')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$master->id}}">
                        <input type="submit" class="btn btn-success  " value="Delete">
                    </form>
                </li>
                    @endforeach

            </ul>
        </div>
    </div>
    <br>
    <br>
</div>
<br>

</body>
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
</html>