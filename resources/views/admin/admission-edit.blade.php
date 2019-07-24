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
    <h3 class="text-white"><a href="{{url('/admin-home')}}" class="text-white btn btn-lg btn-outline-warning" style="font-size: 20px"> <span><div class="fa fa-home"></div></span>  Back to home </a></h3>
    <h2 class=" text-white">Edit admission</h2>
</div>
<div class="container bg" style=" ">
    <div class="row mt-50 ">

        <div class="col-12 col-md-8 ">
            <form action="{{url('admin-admission-edit')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$admission->id}}">


                <div class="form-group row pt-4">
                    <label class="col-md-3 col-form-label "
                           style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Name :</label>
                    <div class="col-md-8 mr-auto">
                        <select name="name" id="" class="form-control">
                            <option value="1"></option>
                            <option value="Departments & Courses" @if($admission->name == 'Departments & Courses') selected @endif>Departments & Courses</option>
                            <option value="How to apply" @if($admission->name == 'How to apply') selected @endif>How to apply</option>
                            {{--<option value="unknown"  @if($admission->name == 'unknown') selected @endif>unknown</option>--}}

                        </select>
                    </div>
                </div>


                <div class="form-group row pt-4">
                    <label class="col-md-4 col-form-label "
                           style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">admission Description :</label>
                    <div class="col-md-8 mr-auto">
                            <textarea type="text" id="editor1" required=""
                                      class="form-control" name="description" placeholder="set content here">

                                @php echo $admission->description @endphp

                            </textarea>
                        <script>
                          CKEDITOR.replace( 'editor1' );
                        </script>
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <label class="col-md-4 col-form-label " style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Image for admission :</label>
                    <div class="col-md-8 mr-auto">
                        <div  id="fileInputsContainer">
                            <div class="d-flex flex-row justify-content-between">
                                <input type="file" id="images"
                                       class="form-control-file" name="images[]">
                                <button class="btn btn-outline-success text-dark " onclick="addDocumentInput()">Add New Image</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center mb-3">
                    <button class="btn btn-success btn-lg mx-3" type="submit">Save</button>
                </div>
            </form>



            <div class="form-group row pt-4">
                <label class="col-md-4 col-form-label " style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">All Images :</label>
                <div class="row">
                    @foreach($admission->images as $image)
                        <div class="col-12 col-md-4">

                            <div class="card1 card">
                                <div class="card_image1">
                                    <img src={{asset($image->path)}} />
                                </div>

                                <div class="card_title1" style="background-color: rgba(76,46,52,0.7); margin-top: -40px";>
                                    <div>
                                        <form action="{{url('admin-remove-image')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$image->id}}">
                                            <button class="text-white btn btn-danger" type="submit" onclick=""  style="font-size: 1rem; bottom: 50px" >remove</button>
                                        </form>
                                    </div>
                                </div>


                            </div>

                        </div>


                    @endforeach

                </div>
            </div>


            <div class="form-group row pt-4"></div>
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
      '                       class="form-control-file" name="images[]">'
    referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
  }
</script>
</html>