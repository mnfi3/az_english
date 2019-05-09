<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>ASMU-Admin Section</title>

    <!-- Core Stylesheet -->
    @include('includeCss')

</head>

<body style="background-color: #002147; font-family: Vazir; color: #ffffff;">
<div class="row mt-50 ml-3">
    <div class="col-md-12">
        <div class="d-flex flex-row justify-content-between">
            <form action="{{url('logout')}}" method="post">
                @csrf
                <div class="ml-3">
                    <h5 class=" text-white" style="font-family: Vazir">
                        <input type="submit" class="btn btn-danger btn-sm" value="خروج">
                    </h5>
                </div>
            </form>

            <div class="mr-5">
                    <span class="text-white " style="font-family: Vazir;font-size: 0.9rem">
                         (توجه : ممکن است لحظاتی طول بکشد)
                    </span>
                <a href="" class="btn btn-danger btn-sm p-2">دریافت فایل پشتیبان</a>
            </div>
        </div>
    </div>
</div>
<section id="manage">
    <div class="container-fluid" style="border-radius: 2rem">

        <div class="d-flex flex-row justify-content-center mt-50">
            <h2 class=" text-white">  به پنل مدیریت خوش آمدید</h2>
        </div>
        <div class="row mt-50 mx-2">
            <div class="col-12 col-md-3 py-3">
                <div class="card text-center bg-one text-white">
                    <div class="card-body">
                        <h3 class="pb-3">News</h3>
                        <h1 class="display-3">
                            <i class="fa fa-newspaper-o"></i>
                        </h1>
                    </div>
                    <a href="{{url('/admin-news')}}" class="card-footer">Enter</a>
                </div>
            </div>
            <div class="col-12 col-md-3 py-3">
                <div class="card text-center bg-two text-white">
                    <div class="card-body">
                        <h3 class="pb-3">About</h3>
                        <h1 class="display-3">
                            <i class="fa fa-info-circle"></i>
                        </h1>
                    </div>
                    <a href="{{url('/admin-about')}}" class="card-footer">Enter</a>
                </div>

            </div>
            <div class="col-12 col-md-3 py-3">
                <div class="card text-center bg-three text-white">
                    <div class="card-body">
                        <h3 class="pb-3">Academics(faculties)</h3>
                        <h2 class="display-3">
                            <i class="fa fa-book"></i>
                        </h2>
                    </div>
                    <a href="{{url('/admin-academic')}}" class="card-footer">Enter</a>
                </div>
            </div>
            <div class=" col-12 col-md-3 py-3">
                <div class="card text-center bg-five text-white">
                    <div class="card-body">
                        <h3 class="pb-3">Research</h3>
                        <h1 class="display-3">
                            <i class="fa fa-search-plus"></i>
                        </h1>
                    </div>
                    <a href="{{url('/admin-research')}}" class="card-footer">Enter</a>
                </div>
            </div>
        </div>
        <div class="row mt-50 mx-2">
            <div class="col-12 col-md-3 py-3">
                <div class="card text-center bg-three text-white">
                    <div class="card-body">
                        <h3 class="pb-3">Campus Life</h3>
                        <h2 class="display-3">
                            <i class="fa fa-life-saver"></i>
                        </h2>
                    </div>
                    <a href="{{url('/admin-campus')}}" class="card-footer">Enter</a>
                </div>
            </div>
            <div class="col-12 col-md-3 py-3">
                <div class="card text-center bg-three text-white">
                    <div class="card-body">
                        <h3 class="pb-3">International Student</h3>
                        <h2 class="display-3">
                            <i class="fa fa-university"></i>
                        </h2>
                    </div>
                    <a href="{{url('/admin-student')}}" class="card-footer">Enter</a>
                </div>
            </div>
            <div class="col-12 col-md-3 py-3">
                <div class="card text-center bg-three text-white">
                    <div class="card-body">
                        <h3 class="pb-3">International Office</h3>
                        <h2 class="display-3">
                            <i class="fa fa-home"></i>
                        </h2>
                    </div>
                    <a href="{{url('/admin-office')}}" class="card-footer">Enter</a>
                </div>
            </div>
            <div class="col-12 col-md-3 py-3">
                <div class="card text-center bg-three text-white">
                    <div class="card-body">
                        <h3 class="pb-3">LLC</h3>
                        <h2 class="display-3">
                            <i class="fa fa-language"></i>
                        </h2>
                    </div>
                    <a href="{{url('/admin-llc')}}" class="card-footer">Enter</a>
                </div>
            </div>
        </div>
        <div class="row mt-50 mx-2">
            <div class="col-12 col-md-3 py-3">
                <div class="card text-center bg-three text-white">
                    <div class="card-body">
                        <h3 class="pb-3">Contact Us</h3>
                        <h2 class="display-3">
                            <i class="fa fa-envelope"></i>
                        </h2>
                    </div>
                    <a href="{{url('/admin-contact')}}" class="card-footer">Enter</a>
                </div>
            </div>
            <div class="col-12 col-md-3 py-3">
                <div class="card text-center bg-three text-white">
                    <div class="card-body">
                        <h3 class="pb-3">Academics(Deps)</h3>
                        <h2 class="display-3">
                            <i class="fa fa-book"></i>
                        </h2>
                    </div>
                    <a href="{{url('/admin-dep')}}" class="card-footer">Enter</a>
                </div>
            </div>
            <div class="col-12 col-md-3 py-3">
                <div class="card text-center bg-three text-white">
                    <div class="card-body">
                        <h3 class="pb-3">Slider</h3>
                        <h2 class="display-3">
                            <i class="fa fa-sliders"></i>
                        </h2>
                    </div>
                    <a href="{{url('/admin-slider')}}" class="card-footer">Enter</a>
                </div>
            </div>
            <div class="col-12 col-md-3 py-3">
                <div class="card text-center bg-three text-white">
                    <div class="card-body">
                        <h3 class="pb-3">Images</h3>
                        <h2 class="display-3">
                            <i class="fa fa-image"></i>
                        </h2>
                    </div>
                    <a href="{{url('/admin-image')}}" class="card-footer">Enter</a>
                </div>
            </div>
        </div>

    </div>
</section>
</body>
