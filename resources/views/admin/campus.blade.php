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
    <h2 class=" text-white">Campus Section</h2>
</div>
<div class="container" style="  background: -webkit-linear-gradient(to left, #f8e131, #f8a51f);
  background: linear-gradient(to left, #f8e131, #f8a51f); border-radius: 15px;">
    <div class="row mt-50 ">

        <div class="col-12 col-md-8">
            <form action="{{url('campus-add')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row pt-4">
                    <label class="col-md-3 col-form-label "
                           style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Name :</label>
                    <div class="col-md-8 mr-auto">
                        <select name="name" id="" class="form-control">
                            <option value="1"></option>
                            <option value="accommodation">accommodation</option>
                            <option value="transport">transport</option>
                            <option value="restaurants">restaurants</option>
                            <option value="shopping center">Shopping Center</option>
                            <option value="banks">banks</option>
                            <option value="sports">sports</option>
                            <option value="dormitory">dormitory</option>
                            <option value="health center">health center</option>
							<option value="kindergarten">kindergarten</option>
							<option value="mosque">mosque</option>
							<option value="fruit shop">fruit shop</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row py-4">
                    <label class="col-md-3 col-form-label " style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title"> text :</label>
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
                    <label class="col-md-3 col-form-label " style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Image :</label>
                    <div class="col-md-8 mr-auto">
                        <div  id="fileInputsContainer">
                            <div class="d-flex flex-row justify-content-between">
                                <input type="file" id="documents"
                                       class="form-control-file" name="images[]">
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
                <h2 class="text-white">All Campus parts</h2>
            </div>
            <div class="divider-red"></div>
            <ul class="nav-list d-flex flex-column p-0">
                @foreach($campuses as $campus)
                <li class="d-flex flex-row justify-content-between bg-danger mt-4 p-1 " style="border-radius: 10px">
                    <a href="" class="text-white mt-2" style="font-size: 1rem">{{$campus->name}}</a>
                    <form class="align-self-center" action="{{url('campus-remove')}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-success  " value="Delete">
                        <input type="hidden" name="id"  value="{{$campus->id}}">
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