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
    <h2 class=" text-white">Research Section</h2>
</div>


<div class="container bg" style="">
    <div class="row mt-50 ">

        <div class="col-12 ">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group row pt-4">
                    <label class="col-md-3 col-form-label "
                           style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Type :</label>
                    <div class="col-md-8 mr-auto">
                        <select name="fac-id" id="" class="form-control">
                            <option value="1"></option>
                            <option value="2">library</option>
                            <option value="3">computer lab</option>
                            <option value="4">basic sciences lab</option>
                            <option value="5">Technical and engineering</option>
                            <option value="5">Innovation</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row py-4">
                    <label class="col-md-3 col-form-label " style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">description text :</label>
                    <div class="col-md-8 mr-auto">
                             <textarea type="text" id="editor2" required=""
                                       class="form-control" name="editor2" placeholder="set content here">
                            </textarea>
                        <script>
                          CKEDITOR.replace( 'editor2' );
                        </script>
                    </div>
                </div>
                <div class="form-group row py-4">
                    <label class="col-md-3 col-form-label " style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Image :</label>
                    <div class="col-md-8 mr-auto">
                        <div  id="fileInputsContainer">
                            <div class="d-flex flex-row justify-content-between">
                                <input type="file" id="documents"
                                       class="form-control-file" name="documents[]">
                                {{--<button class="btn btn-outline-success text-dark " onclick="">Add New Image</button>--}}
                            </div>
                        </div> </div>
                </div>
                <div class="d-flex justify-content-center mb-3">
                    <button class="btn btn-success mt-30 mx-3" type="submit">Save</button>
                    <button class="btn btn-danger mt-30" type="submit">Remove</button>
                </div>
            </form>
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
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group row py-4">
                    <label class="col-md-4 col-form-label " style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Conference Title :</label>
                    <div class="col-md-8 mr-auto">
                        <input type="text" id="title" required=""
                               class="form-control" name="name" placeholder="set title here">

                    </div>
                </div>

                <div class="form-group row py-4">
                    <label class="col-md-4 col-form-label " style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Conference Content:</label>
                    <div class="col-md-8 mr-auto">
                            <textarea type="text" id="editor1" required=""
                                      class="form-control" name="editor1" placeholder="set content here">
                            </textarea>
                        <script>
                          CKEDITOR.replace( 'editor1' );
                        </script>
                    </div>
                </div>
                <div class="form-group row py-4">
                    <label class="col-md-4 col-form-label " style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Conference Image :</label>
                    <div class="col-md-8 mr-auto">
                        <div  id="">
                            <div class="d-flex flex-row justify-content-between">
                                <input type="file" id=""
                                       class="form-control-file" name="documents[]">
                            </div>
                        </div> </div>
                </div>
                <div class="form-group row py-4">
                    <label class="col-md-3 col-form-label " style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Document :</label>
                    <div class="col-md-8 mr-auto">
                        <div  id="fileInputsContainer">
                            <div class="d-flex flex-row justify-content-between">
                                <input type="file" id="documents"
                                       class="form-control-file" name="documents[]">
                                <button class="btn btn-outline-success text-dark " onclick="addDocumentInput()">Add New Doc</button>

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
                <li class="d-flex flex-row justify-content-between bg-danger mt-4 p-1 " style="border-radius: 10px">
                    <a href="http://pcms.azaruniv.ac.ir/post/9" class="text-white mt-2" style="font-size: 1rem">Latest Conference  in ASMU</a>
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