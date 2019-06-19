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
    <h2 class=" text-white">Edit Research Info</h2>
</div>
<div class="container bg" style=" ">
    <div class="row mt-50 ">

        <div class="col-12 col-md-8 ">
            <form action="{{url('research-edit')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$research->id}}">

                <div class="form-group row pt-4">
                    <label class="col-md-4 col-form-label "
                           style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Research Type :</label>
                    <div class="col-md-8 mr-auto">
                        <input type="text" id="title" required=""
                               class="form-control " name="type" value="{{$research->type}}" disabled>
                    </div>
                </div>

                <div class="form-group row pt-4">
                    <label class="col-md-4 col-form-label "
                           style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Research Title :</label>
                    <div class="col-md-8 mr-auto">
                        <input type="text" id="title" required=""
                               class="form-control " name="title" value="{{$research->title}}">
                    </div>
                </div>

                <div class="form-group row pt-4">
                    <label class="col-md-4 col-form-label "
                           style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Research Description :</label>
                    <div class="col-md-8 mr-auto">
                            <textarea type="text" id="editor1" required=""
                                      class="form-control" name="description" placeholder="set content here">
                                @php
                                    echo $research->description;
                                @endphp
                            </textarea>
                        <script>
                          CKEDITOR.replace( 'editor1' );
                        </script>
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <label class="col-md-4 col-form-label " style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Image for Reserch :</label>
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
                    @foreach($research->images as $image)
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