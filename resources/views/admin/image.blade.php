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

    <div class="row mb-50">
        <div class="col-12 col-md-3">

            <div class="card1 card">
                <div class="card_image1">
                    <img src="img/bg-img/library.jpg" />
                </div>
                <div class="card_title1" style="background-color: rgba(76,46,52,0.7); margin-top: -40px";>
                    <button class="text-white bg-danger p-3" style="font-size: 1.4rem ; border-radius: 5px" type="button"  data-toggle="modal" data-target="#Modal">Copy Link</button>
                </div>
            </div>

        </div>
        <div class="col-12 col-md-3">

            <div class="card1 card">
                <div class="card_image1">
                    <img src="img/bg-img/library.jpg" />
                </div>
                <div class="card_title1" style="background-color: rgba(76,46,52,0.7); margin-top: -40px";>
                    <button class="text-white bg-danger p-3" style="font-size: 1.4rem ; border-radius: 5px" type="button"  data-toggle="modal" data-target="#Modal">Copy Link</button>
                </div>
            </div>

        </div>
        <div class="col-12 col-md-3">

            <div class="card1 card">
                <div class="card_image1">
                    <img src="img/bg-img/library.jpg" />
                </div>
                <div class="card_title1" style="background-color: rgba(76,46,52,0.7); margin-top: -40px";>
                    <button class="text-white bg-danger p-3" style="font-size: 1.4rem ; border-radius: 5px" type="button"  data-toggle="modal" data-target="#Modal">Copy Link</button>
                </div>
            </div>

        </div>
        <div class="col-12 col-md-3">

            <div class="card1 card">
                <div class="card_image1">
                    <img src="img/bg-img/library.jpg" />
                </div>
                <div class="card_title1" style="background-color: rgba(76,46,52,0.7); margin-top: -40px";>
                    <button class="text-white bg-danger p-3" style="font-size: 1.4rem ; border-radius: 5px" type="button"  data-toggle="modal" data-target="#Modal">Copy Link</button>
                </div>
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
                    <button class="text-white bg-danger p-3" style="font-size: 1.4rem ; border-radius: 5px" type="button"  data-toggle="modal" data-target="#Modal">Copy Link</button>
                </div>
            </div>

        </div>
        <div class="col-12 col-md-3">

            <div class="card1 card">
                <div class="card_image1">
                    <img src="img/bg-img/library.jpg" />
                </div>
                <div class="card_title1" style="background-color: rgba(76,46,52,0.7); margin-top: -40px";>
                    <button class="text-white bg-danger p-3" style="font-size: 1.4rem ; border-radius: 5px" type="button"  data-toggle="modal" data-target="#Modal">Copy Link</button>
                </div>
            </div>

        </div>
        <div class="col-12 col-md-3">

            <div class="card1 card">
                <div class="card_image1">
                    <img src="img/bg-img/library.jpg" />
                </div>
                <div class="card_title1" style="background-color: rgba(76,46,52,0.7); margin-top: -40px";>
                    <button class="text-white bg-danger p-3" style="font-size: 1.4rem ; border-radius: 5px" type="button"  data-toggle="modal" data-target="#Modal">Copy Link</button>
                </div>
            </div>

        </div>
        <div class="col-12 col-md-3">

            <div class="card1 card">
                <div class="card_image1">
                    <img src="img/bg-img/library.jpg" />
                </div>
                <div class="card_title1" style="background-color: rgba(76,46,52,0.7); margin-top: -40px";>
                  <button class="text-white bg-danger p-3" style="font-size: 1.4rem ; border-radius: 5px" type="button"  data-toggle="modal" data-target="#Modal">Copy Link</button>
                      </div>
            </div>

        </div>
    </div>

</div>
<!--MESSAGE MODAL-->
<div class="modal rtl" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title ml-auto" id="exampleModalLabel">Link : </h5>
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

</body>
<script>
    function cipyLink(id) {
        var copyText = document.getElementById("copyInput"+id);
        copyText.select();
        document.execCommand("copy");
        alert("Copied the text: " + copyText.value);

    }
</script>
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