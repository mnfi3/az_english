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
    <h2 class=" text-white">Image Section</h2>
</div>
<div class="container bg" style="border-radius: 15px;">
    <div class="row mt-50 ">
        <div class="col-12 col-md-8 ">
            <form action="{{url('image-add')}}" method="post" enctype="multipart/form-data">
                @csrf
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
                <div class="d-flex justify-content-center mb-3">
                    <button class="btn btn-success mt-30 mx-3" type="submit">Upload</button>
                </div>
            </form>
        </div>
    </div>
    <br>
    <br>
</div>

<div class="container mt-50">
    <h2 class=" text-white">All Images</h2>
</div>
<div class="container-fluid mt-25 bg mb-100" style="">

    <div class="row">
        @foreach($images as $image)
        <div class="col-12 col-md-3">

                <div class="card1 card">
                    <div class="card_image1">
                        <img src="{{$image->path}}" />
                    </div>

                    <div class="card_title1" style="background-color: rgba(76,46,52,0.7); margin-top: -40px";>
                        <div>
                            <input cl type="url" id="copyInput{{$image->id}}"
                                    value="{{\Illuminate\Support\Facades\URL::to('/').'/' . $image->path}}" style="background : transparent; opacity : 0.0001;width: 0px; height: 0px";>
                            <button class="text-white btn btn-danger"  onclick="copyLink({{$image->id}})"  style="font-size: 1rem; bottom: 50px">Copy Link</button>
                        </div>
                    </div>


                </div>

        </div>
        @endforeach

    </div>


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

  function copyFunction(id) {
    /* Get the text field */
    var copyText = document.getElementById("myInput" + id);
    console.log(copyText);

    /* Select the text field */
    copyText.select();

    /* Copy the text inside the text field */
    document.execCommand("copy");

    /* Alert the copied text */
    alert("Copied the text: " + copyText.value);
  }

  function copyLink(id) {
    var copyText = document.getElementById("copyInput"+id);
    copyText.select();
    document.execCommand("copy");
    alert("Copied the text: " + copyText.value);
    console.log(copyText.value);

  }
</script>
</html>