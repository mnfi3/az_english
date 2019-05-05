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
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group row py-4">
                    <label class="col-md-3 col-form-label " style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Select Image :</label>
                    <div class="col-md-8 mr-auto">
                        <div  id="">
                            <div class="d-flex flex-row justify-content-between">
                                <input type="file" id=""
                                       class="form-control-file" name="documents[]">
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
        <div class="col-12 col-md-3">

                <div class="card1 card">
                    <div class="card_image1">
                        <img src="img/bg-img/library.jpg" />
                    </div>
                    <div class="card_title1" style="background-color: rgba(76,46,52,0.7); margin-top: -40px";>
                        <a href="" class="btn btn-danger" style="bottom: 40px"> <p class="text-white" style="font-size: 1.4rem">Copy Link</p>
                        </a>  </div>
                </div>

        </div>
        <div class="col-12 col-md-3">

            <div class="card1 card">
                <div class="card_image1">
                    <img src="img/bg-img/library.jpg" />
                </div>
                <div class="card_title1" style="background-color: rgba(76,46,52,0.7); margin-top: -40px";>
                    <a href="" class="btn btn-danger" style="bottom: 40px"> <p class="text-white" style="font-size: 1.4rem">Copy Link</p>
                    </a>  </div>
            </div>

        </div>
        <div class="col-12 col-md-3">

            <div class="card1 card">
                <div class="card_image1">
                    <img src="img/bg-img/library.jpg" />
                </div>
                <div class="card_title1" style="background-color: rgba(76,46,52,0.7); margin-top: -40px";>
                    <a href="" class="btn btn-danger" style="bottom: 40px"> <p class="text-white" style="font-size: 1.4rem">Copy Link</p>
                    </a>  </div>
            </div>

        </div>
        <div class="col-12 col-md-3">

            <div class="card1 card">
                <div class="card_image1">
                    <img src="img/bg-img/library.jpg" />
                </div>
                <div class="card_title1" style="background-color: rgba(76,46,52,0.7); margin-top: -40px";>
                    <a href="" class="btn btn-danger" style="bottom: 40px"> <p class="text-white" style="font-size: 1.4rem">Copy Link</p>
                    </a>  </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-3">

            <div class="card1 card">
                <div class="card_image1">
                    <img src="img/bg-img/library.jpg" />
                </div>
                <div class="card_title1" style="background-color: rgba(76,46,52,0.7); margin-top: -40px";>
                    <a href="" class="btn btn-danger" style="bottom: 40px"> <p class="text-white" style="font-size: 1.4rem">Copy Link</p>
                    </a>  </div>
            </div>

        </div>
        <div class="col-12 col-md-3">

            <div class="card1 card">
                <div class="card_image1">
                    <img src="img/bg-img/library.jpg" />
                </div>
                <div class="card_title1" style="background-color: rgba(76,46,52,0.7); margin-top: -40px";>
                    <a href="" class="btn btn-danger" style="bottom: 40px"> <p class="text-white" style="font-size: 1.4rem">Copy Link</p>
                    </a>  </div>
            </div>

        </div>
        <div class="col-12 col-md-3">

            <div class="card1 card">
                <div class="card_image1">
                    <img src="img/bg-img/library.jpg" />
                </div>
                <div class="card_title1" style="background-color: rgba(76,46,52,0.7); margin-top: -40px";>
                    <a href="" class="btn btn-danger" style="bottom: 40px"> <p class="text-white" style="font-size: 1.4rem">Copy Link</p>
                    </a>  </div>
            </div>

        </div>
        <div class="col-12 col-md-3">

            <div class="card1 card">
                <div class="card_image1">
                    <img src="img/bg-img/library.jpg" />
                </div>
                <div class="card_title1" style="background-color: rgba(76,46,52,0.7); margin-top: -40px";>
                    <a href="" class="btn btn-danger" style="bottom: 40px"> <p class="text-white" style="font-size: 1.4rem">Copy Link</p>
                    </a>  </div>
            </div>

        </div>
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
</script>
</html>