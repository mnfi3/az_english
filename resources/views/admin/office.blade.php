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

<body style="background-color: #002147; font-family: FontAwesome" >

<div class="container">
    <h3 class="text-white"><a href="{{url('/admin-home')}}" class="text-white btn btn-lg btn-outline-warning"
                              style="font-size: 20px"> <span><div class="fa fa-home"></div></span> Back to home </a>
    </h3>

</div>

<div class="container">
    <div class="d-flex flex-row justify-content-between mt-50">
    </div>
    {{--<h3 class="text-white"><a href="{{url('/admin-home')}}" class="text-white btn btn-lg btn-outline-warning" style="font-size: 20px"> <span><div class="fa fa-home"></div></span>  Back to home </a></h3>--}}
    <h2 class=" text-white">Staff Section</h2>
</div>


<div class="container bg" style="">
    <div class="row mt-50 ">

        <div class="col-12 col-md-8">
            <form action="{{url('staff-add')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row pt-4">
                    <label class="col-md-3 col-form-label "
                           style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Staff Type :</label>
                    <div class="col-md-8 mr-auto">
                        <select name="type" id="" class="form-control">
                            <option value="1"></option>
                            <option value="Assistant">Assistant</option>
                            <option value="Director">Director</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row py-4">
                    <label class="col-md-3 col-form-label " style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Full Name :</label>
                    <div class="col-md-8 mr-auto">
                            <input type="text" id="title" required=""
                                      class="form-control" name="full_name">
                    </div>
                </div>
                <div class="form-group row py-4">
                    <label class="col-md-3 col-form-label " style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Email :</label>
                    <div class="col-md-8 mr-auto">
                        <input type="text" id="title" required=""
                               class="form-control" name="email">
                    </div>
                </div>
                <div class="form-group row py-4">
                    <label class="col-md-3 col-form-label " style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Fax Number :</label>
                    <div class="col-md-8 mr-auto">
                        <input type="text" id="title" required=""
                               class="form-control" name="fax">
                    </div>
                </div>
                <div class="form-group row py-4">
                    <label class="col-md-3 col-form-label " style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Phone Number :</label>
                    <div class="col-md-8 mr-auto">
                        <input type="text" id="title" required=""
                               class="form-control" name="phone">
                    </div>
                </div>
                <div class="form-group row py-4">
                    <label class="col-md-3 col-form-label " style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Image :</label>
                    <div class="col-md-8 mr-auto">
                        <div  id="fileInputsContainer">
                            <div class="d-flex flex-row justify-content-between">
                                <input type="file" id="documents"
                                       class="form-control-file" name="images[]">
                                {{--<button class="btn btn-outline-success text-dark " onclick="">Add New Image</button>--}}
                            </div>
                        </div> </div>
                </div>

                <div class="d-flex justify-content-center mb-3">
                    <button class="btn btn-success mt-30 mx-3" type="submit">Save</button>
                </div>
            </form>
        </div>
        <div class="col-12 col-md-4">
            <div class="d-flex justify-content-end">
                <h2 class="text-white">All Staff</h2>
            </div>
            <div class="divider-red"></div>
            <ul class="nav-list d-flex flex-column p-0">

                @foreach($staffs as $staff)
                <li class="d-flex flex-row justify-content-between bg-danger mt-4 p-1 " style="border-radius: 10px">
                    <a href="http://pcms.azaruniv.ac.ir/post/9" class="text-white mt-2" style="font-size: 1rem">{{$staff->full_name}}</a>
                    <form class="align-self-center" action="{{url('staff-remove')}}" method="post">
                        @csrf
                        <input type="hidden" name="id"  value="{{$staff->id}}">
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
    <h2 class=" text-white">MOU Section</h2>
</div>


<div class="container bg mb-50" style="">
    <div class="row mt-50  ">

        <div class="col-12 col-md-8">
            <form action="{{url('mou-add')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row py-4">
                    <label class="col-md-3 col-form-label " style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">MOU Full Name :</label>
                    <div class="col-md-8 mr-auto">
                        <input type="text" id="title" required=""
                               class="form-control" name="full_name">
                    </div>
                </div>




                <div class="d-flex justify-content-center mb-3">
                    <button class="btn btn-success mt-30 mx-3" type="submit">Save</button>
                </div>
            </form>
        </div>
        <div class="col-12 col-md-4">
            <div class="d-flex justify-content-end">
                <h2 class="text-white">All MOU's</h2>
            </div>
            <div class="divider-red"></div>
            <ul class="nav-list d-flex flex-column p-0">

                @foreach($mous as $mou)
                <li class="d-flex flex-row justify-content-between bg-danger mt-4 p-1 " style="border-radius: 10px">
                    <a href="http://pcms.azaruniv.ac.ir/post/9" class="text-white mt-2" style="font-size: 1rem">{{$mou->full_name}}</a>
                    <form class="align-self-center" action="{{url('mou-remove')}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-success  " value="Delete">
                        <input type="hidden" name="id" value="{{$mou->id}}">
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
    <h2 class=" text-white">Project Section</h2>
</div>
<div class="container bg" style="border-radius: 15px;">
    <div class="row mt-50 ">
        <div class="col-12 col-md-8 ">
            <form action="{{url('project-add')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row py-4">
                    <label class="col-md-3 col-form-label " style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Project Title :</label>
                    <div class="col-md-8 mr-auto">
                        <input type="text" id="title" required=""
                               class="form-control" name="title" placeholder="set title here">

                    </div>
                </div>

                <div class="form-group row py-4">
                    <label class="col-md-3 col-form-label " style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Project Content:</label>
                    <div class="col-md-8 mr-auto">
                              <textarea type="text" id="editor1" required=""
                                        class="form-control" name="content" placeholder="set content here">
                            </textarea>
                        <script>
                          CKEDITOR.replace( 'editor1' );
                        </script>
                    </div>
                </div>
                <div class="form-group row py-4">
                    <label class="col-md-3 col-form-label " style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Select Image :</label>
                    <div class="col-md-8 mr-auto">
                        <div  id="">
                            <div class="d-flex flex-row justify-content-between">
                                <input type="file" id=""
                                       class="form-control-file" name="images[]">
                            </div>
                        </div> </div>
                </div>
                <div class="form-group row py-4">
                    <label class="col-md-3 col-form-label " style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Document :</label>
                    <div class="col-md-8 mr-auto">
                        <div  id="fileInputsContainer2">
                            <div class="d-flex flex-row justify-content-between">
                                <input type="file" id="documents"
                                       class="form-control-file" name="documents[]">
                                <button class="btn btn-outline-success text-dark " onclick="addDocumentInput2()">Add New Doc</button>

                            </div>
                        </div> </div>
                </div>
                <div class="d-flex justify-content-center mb-3">
                    <button class="btn btn-success mt-30 mx-3" type="submit">Save</button>
                </div>
            </form>
        </div>
        <div class="col-12 col-md-4">
            <div class="d-flex justify-content-end">
                <h2 class="text-white">All Project</h2>
            </div>
            <div class="divider-red"></div>
            <ul class="nav-list d-flex flex-column p-0">
                @foreach($projects as $project)
                <li class="d-flex flex-row justify-content-between bg-danger mt-4 p-1 " style="border-radius: 10px">
                    <a href="http://pcms.azaruniv.ac.ir/post/9" class="text-white mt-2" style="font-size: 1rem">{{$project->title}}</a>
                    <form class="align-self-center" action="{{url('project-remove')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$project->id}}">
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
    <h2 class=" text-white">Conferences Section</h2>
</div>
<div class="container bg" style="">
    <div class="row mt-50 ">

        <div class="col-12 col-md-8 ">
            <form action="{{url('conference-add')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row py-4">
                    <label class="col-md-4 col-form-label " style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Conference Title :</label>
                    <div class="col-md-8 mr-auto">
                        <input type="text" id="title" required=""
                               class="form-control" name="title" placeholder="set title here">

                    </div>
                </div>

                <div class="form-group row py-4">
                    <label class="col-md-4 col-form-label " style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Conference Content:</label>
                    <div class="col-md-8 mr-auto">
                            <textarea type="text" id="editor2" required=""
                                      class="form-control" name="content" placeholder="set content here">
                            </textarea>
                        <script>
                          CKEDITOR.replace( 'editor2' );
                        </script>
                    </div>
                </div>
                <div class="form-group row py-4">
                    <label class="col-md-4 col-form-label " style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Conference Image :</label>
                    <div class="col-md-8 mr-auto">
                        <div  id="">
                            <div class="d-flex flex-row justify-content-between">
                                <input type="file" id=""
                                       class="form-control-file" name="images[]">
                            </div>
                        </div> </div>
                </div>
                <div class="form-group row py-4">
                    <label class="col-md-3 col-form-label " style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Document :</label>
                    <div class="col-md-8 mr-auto">
                        <div  id="fileInputsContainer3">
                            <div class="d-flex flex-row justify-content-between">
                                <input type="file" id="documents"
                                       class="form-control-file" name="documents[]">
                                <button class="btn btn-outline-success text-dark " onclick="addDocumentInput3()">Add New Doc</button>

                            </div>
                        </div> </div>
                </div>
                <div class="d-flex justify-content-center mb-3">
                    <button class="btn btn-success mt-30 mx-3" type="submit">Save</button>
                </div>
            </form>
        </div>
        <div class="col-12 col-md-4">
            <div class="d-flex justify-content-end">
                <h2 class="text-white">All Conference </h2>
            </div>
            <div class="divider-red"></div>
            <ul class="nav-list d-flex flex-column p-0">
                @foreach($conferences as $conference)
                <li class="d-flex flex-row justify-content-between bg-danger mt-4 p-1 " style="border-radius: 10px">
                    <a href="http://pcms.azaruniv.ac.ir/post/9" class="text-white mt-2" style="font-size: 1rem">{{$conference->title}}</a>
                    <form class="align-self-center" action="{{url('conference-remove')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$conference->id}}">
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
    <h2 class=" text-white">Partnership Section</h2>
</div>
<div class="container bg" style="border-radius: 15px;">
    <div class="row mt-50 ">
        <div class="col-12 col-md-8 ">
            <form action="{{url('partnership-add')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row py-4">
                    <label class="col-md-3 col-form-label " style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title"> Title :</label>
                    <div class="col-md-8 mr-auto">
                        <input type="text" id="title" required=""
                               class="form-control" name="title" placeholder="set title here">

                    </div>
                </div>

                <div class="form-group row py-4">
                    <label class="col-md-3 col-form-label " style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title"> Content:</label>
                    <div class="col-md-8 mr-auto">
                            <textarea type="text" id="editor3" required=""
                                      class="form-control" name="content" placeholder="set content here">
                            </textarea>
                        <script>
                          CKEDITOR.replace( 'editor3' );
                        </script>
                    </div>
                </div>
                <div class="form-group row py-4">
                    <label class="col-md-3 col-form-label " style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Select Image :</label>
                    <div class="col-md-8 mr-auto">
                        <div  id="">
                            <div class="d-flex flex-row justify-content-between">
                                <input type="file" id=""
                                       class="form-control-file" name="images[]">
                            </div>
                        </div> </div>
                </div>
                <div class="form-group row py-4">
                    <label class="col-md-3 col-form-label " style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Document :</label>
                    <div class="col-md-8 mr-auto">
                        <div  id="fileInputsContainer4">
                            <div class="d-flex flex-row justify-content-between">
                                <input type="file" id="documents"
                                       class="form-control-file" name="documents[]">
                                <button class="btn btn-outline-success text-dark " onclick="addDocumentInput4()">Add New Doc</button>

                            </div>
                        </div> </div>
                </div>
                <div class="d-flex justify-content-center mb-3">
                    <button class="btn btn-success mt-30 mx-3" type="submit">Save</button>
                </div>
            </form>
        </div>
        <div class="col-12 col-md-4">
            <div class="d-flex justify-content-end">
                <h2 class="text-white">All Partnership</h2>
            </div>
            <div class="divider-red"></div>
            <ul class="nav-list d-flex flex-column p-0">
                @foreach($partnerships as $partnership)
                <li class="d-flex flex-row justify-content-between bg-danger mt-4 p-1 " style="border-radius: 10px">
                    <a href="http://pcms.azaruniv.ac.ir/post/9" class="text-white mt-2" style="font-size: 1rem">{{$partnership->title}}</a>
                    <form class="align-self-center" action="{{url('partnership-remove')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$partnership->id}}">
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

</body>
<script>
  function addDocumentInput1() {
    var referenceNode = document.getElementById('fileInputsContainer1').lastChild;
    var newNode = document.createElement("DIV");
    newNode.className += 'mt-1'
    newNode.innerHTML = '<input type="file"  required=""\n' +
      '                       class="form-control-file" name="documents[]">'
    referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
  }
  function addDocumentInput2() {
    var referenceNode = document.getElementById('fileInputsContainer2').lastChild;
    var newNode = document.createElement("DIV");
    newNode.className += 'mt-1'
    newNode.innerHTML = '<input type="file"  required=""\n' +
      '                       class="form-control-file" name="documents[]">'
    referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
  }
  function addDocumentInput3() {
    var referenceNode = document.getElementById('fileInputsContainer3').lastChild;
    var newNode = document.createElement("DIV");
    newNode.className += 'mt-1'
    newNode.innerHTML = '<input type="file"  required=""\n' +
      '                       class="form-control-file" name="documents[]">'
    referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
  }
  function addDocumentInput4() {
    var referenceNode = document.getElementById('fileInputsContainer4').lastChild;
    var newNode = document.createElement("DIV");
    newNode.className += 'mt-1'
    newNode.innerHTML = '<input type="file"  required=""\n' +
      '                       class="form-control-file" name="documents[]">'
    referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
  }
</script>
</html>