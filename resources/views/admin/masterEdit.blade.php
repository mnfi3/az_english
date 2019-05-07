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

<body style="background-color: #002147; font-family: FontAwesome">
<div class="container">
    <h3 class="text-white"><a href="{{url('/admin-home')}}" class="text-white btn btn-lg btn-outline-warning" style="font-size: 20px"> <span><div class="fa fa-home"></div></span>  Back to home </a></h3>
    <h2 class=" text-white">Edite Master's Info</h2>
</div>
<div class="container bg" style=" ">
    <div class="row mt-50 ">

        <div class="col-12 col-md-8 ">
            <form action="{{url('admin-master-edit')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$master->id}}">
                <div class="form-group row pt-4">
                    <label class="col-md-4 col-form-label "
                           style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Dempartment Name :</label>
                    <div class="col-md-8 mr-auto">
                        <select name="department_id" id="" class="form-control">
                            <option value="0"></option>
                            @foreach($departments as $department)
                            <option value="{{$department->id}}" @if($master->department_id == $department->id) selected @endif >{{$department->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <label class="col-md-4 col-form-label "
                           style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title" >Master's Name :</label>
                    <div class="col-md-8 mr-auto">
                        <input type="text" id="title" required="" value="{{$master->name}}"
                               class="form-control" name="name">
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <label class="col-md-4 col-form-label "
                           style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Master's Specialty :</label>
                    <div class="col-md-8 mr-auto">
                        <input type="text" id="title" required="" value="{{$master->speciality}}"
                               class="form-control" name="speciality">
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <label class="col-md-4 col-form-label "
                           style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Master's Academic Rank :</label>
                    <div class="col-md-8 mr-auto">
                        <input type="text" id="title" required="" value="{{$master->rank}}"
                               class="form-control" name="rank">
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <label class="col-md-4 col-form-label "
                           style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Master's Email :</label>
                    <div class="col-md-8 mr-auto">
                        <input type="text" id="title" required="" value="{{$master->email}}"
                               class="form-control" name="email">
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <label class="col-md-4 col-form-label "
                           style="text-align: left ; font-size: 1.3rem; font-weight: 500" for="title">Master's CV Link (if exist) :</label>
                    <div class="col-md-8 mr-auto">
                        <input type="text" id="title" value="{{$master->cv_link}}"
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