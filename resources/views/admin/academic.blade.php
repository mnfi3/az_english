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
        <h3 class="text-white"><a href="{{url('/admin-home')}}" class="text-white btn btn-lg btn-outline-warning" style="font-size: 20px"> <span><div class="fa fa-home"></div></span>  Back to home </a></h3>
        <h2 class=" text-white">Facultie Section</h2>
    </div>
<div class="container bg" style=" ">
    <div class="row mt-50 ">
        <div class="col-12 col-md-8 ">
            <form action="{{url('faculty-add')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row pt-4">
                    <label class="col-md-4 col-form-label " style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Faculty Name :</label>
                    <div class="col-md-8 mr-auto">
                        <input type="text" id="title" required=""
                               class="form-control" name="name" placeholder="Enter Name Here">
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <label class="col-md-4 col-form-label " style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Description text :</label>
                    <div class="col-md-8 mr-auto">
                            <textarea type="text" id="editor1" required=""
                                      class="form-control" name="description" placeholder="set content here">
                            </textarea>
                        <script>
                          CKEDITOR.replace( 'editor1' );
                        </script>
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <label class="col-md-4 col-form-label " style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Image for Facultie :</label>
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
                    {{--<button class="btn btn-danger " type="submit">Remove</button>--}}
                </div>
            </form>
        </div>
        <div class="col-12 col-md-4">
            <div class="d-flex justify-content-end">
                <h2 class="text-white">Descriptions</h2>
            </div>
            <div class="divider-red"></div>
            <ul class="nav-list d-flex flex-column p-0">
                @foreach($faculties as $faculty)
                <li class="d-flex flex-row justify-content-between bg-danger mt-4 p-1 " style="border-radius: 10px">
                    <a href="{{url('faculty', $faculty->id)}}" class="text-white mt-2" style="font-size: 1rem">{{$faculty->name}}</a>
                    <form class="align-self-center" action="{{url('faculty-remove')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$faculty->id}}">
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