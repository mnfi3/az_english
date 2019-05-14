<!-- ##### Header Area Start ##### -->
<header class="header-area">
    <!-- Top Header Area -->
    <div class="top-header ">
        <div class="container h-100">
            <div class="d-flex flex-row justify-content-between h-100">
                <div class="d-none d-md-block h-100 ">
                    <div class="header-content h-100  d-flex align-items-center justify-content-start" >
                        <div >
                            <a href="{{url('/')}}"><img src="{{asset('img/bg-img/logo.png')}}" alt="" style="max-height: 101px;" class="py-3"></a>
                        </div>
                        <h3 class=" text-white ml-3">Azarbaijan Shahid Madani University</h3>
                        <div class="login-content ">
                            <!--<a href="#" class="text-white">Register / Login</a>-->
                        </div>
                    </div>
                </div>
                <div class=" h-100  m-auto">
                    <div class="blog-post-search-widget mt-4 ml-4 ">
                        <form action="{{url('search')}}" method="get">
                            @csrf
                            <input type="search" name="search" id="Search" placeholder="Search">
                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Area -->
    <div class="academy-main-menu ">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between " id="academyNav" style="border-radius: 10px">

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler" >
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu" style="">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul class="text-white">
                                <li><a href="{{url('/')}}">home</a></li>
                                <li><a href="#">About</a>
                                    <ul class="dropdown" style="width:250px">
                                        <li><a href="{{url('/history')}}">History</a></li>
                                        <li><a href="{{url('/message')}}">Presiden's Message</a></li>
                                    </ul>

                                </li>
                                {{--<li><a href="#">ADMINISTRATION</a>--}}
                                {{--<ul class="dropdown" style="width:400px">--}}
                                {{--<li><a href="{{url('/mou')}}">Vice-rector for research</a></li>--}}
                                {{--<li><a href="{{url('/staff')}}">Vice-rector for Culture</a></li>--}}
                                {{--<li><a href="{{url('/staff')}}">Vice-rector for Students affairs</a></li>--}}
                                {{--<li><a href="{{url('/staff')}}">Vice-rector for Financial</a></li>--}}
                                {{--<li><a href="{{url('/staff')}}">Vice-rector for education</a></li>--}}
                                {{--</ul>--}}

                                {{--</li>--}}
                                <li><a href="#">Academics</a>
                                    <ul class="dropdown" style="width:180px">
                                        <li class="edit-list"><a href="#">faculties</a>
                                            @php
                                                $faculties = \App\Faculty::all();
                                            @endphp
                                            <ul class="dropdown" style="width:500px">
                                                @foreach($faculties as $faculty)
                                                    <li><a href="{{url('/faculty', $faculty->id)}}" style="">{{$faculty->name}}</a></li>
                                                @endforeach

                                            </ul>
                                        </li>
                                    </ul>

                                </li>

                                <li><a href="#">Research</a>
                                    <ul class="dropdown" style="width:300px">

                                        <li><a href="{{url('/research/libraries')}}">Libraries</a></li>
                                        <li><a href="#">Lab</a>
                                            <ul class="dropdown " style="width:300px ;margin-left: 40%">
                                                <li class="dropdown1"><a href="{{url('/research/computer labs')}}">Computer Labs</a></li>
                                                <li class="dropdown1"><a href="{{url('/research/basic sciences labs')}}">Basic sciences Labs</a></li>
                                                <li class="dropdown1"><a href="{{url('/research/technical and engineering')}}">Technical and engineering</a></li>
                                            </ul>
                                        </li>
                                        {{--<li><a href="{{url('/conferences')}}">Conferences/Workshops</a></li>--}}
                                        <li><a href="{{url('/research/innovation')}}">Innovation</a></li>
                                    </ul>
                                    {{--{{route('home')}}--}}
                                </li>


                                <li><a href="#">Campus life</a>
                                    <ul class="dropdown" style="width:250px">
                                        @if(\App\CampusLife::where('name', 'like', 'accommodation')->first() != null)
                                            <li><a href="{{url('/campus-life/accommodation')}}">accomodation</a></li>
                                        @endif
                                        @if(\App\CampusLife::where('name', 'like', 'transport')->first() != null)
                                            <li><a href="{{url('/campus-life/transport')}}">transportation</a></li>
                                        @endif
                                        @if(\App\CampusLife::where('name', 'like', 'restaurants')->first() != null)
                                            <li><a href="{{url('/campus-life/restaurants')}}">Restaurants</a></li>
                                        @endif
                                        @if(\App\CampusLife::where('name', 'like', 'shopping center')->first() != null)
                                            <li><a href="{{url('/campus-life/shopping center')}}">Shopping Center</a></li>
                                        @endif

                                        @if(\App\CampusLife::where('name', 'like', 'sports')->first() != null)
                                            <li><a href="{{url('/campus-life/sports')}}">Sports</a></li>
                                        @endif
                                        @if(\App\CampusLife::where('name', 'like', 'dormitory')->first() != null)
                                            <li><a href="{{url('/campus-life/dormitory')}}">dormitory</a></li>
                                        @endif
                                        @if(\App\CampusLife::where('name', 'like', 'banks')->first() != null)
                                            <li><a href="{{url('/campus-life/banks')}}">Banks</a></li>
                                        @endif
                                        <li><a href="#">Other</a>
                                            <ul class="dropdown" style="width:250px ; margin-left: 28%">
                                                @if(\App\CampusLife::where('name', 'like', 'health center')->first() != null)
                                                    <li><a href="{{url('/campus-life/health center')}}">Health Center</a></li>
                                                @endif
                                                @if(\App\CampusLife::where('name', 'like', 'nursery')->first() != null)
                                                    <li><a href="{{url('/campus-life/nursery')}}">nursery</a></li>
                                                @endif
                                                @if(\App\CampusLife::where('name', 'like', 'mosque')->first() != null)
                                                    <li><a href="{{url('/campus-life/mosque')}}">mosque</a></li>
                                                @endif
                                                @if(\App\CampusLife::where('name', 'like', 'fruit shop')->first() != null)
                                                    <li><a href="{{url('/campus-life/fruit shop')}}">Fruit shop</a></li>
                                                @endif
                                                    @if(\App\CampusLife::where('name', 'like', 'grocery')->first() != null)
                                                        <li><a href="{{url('/campus-life/grocery')}}">Grocery</a></li>
                                                    @endif

                                                    @if(\App\CampusLife::where('name', 'like', 'post office')->first() != null)
                                                        <li><a href="{{url('/campus-life/post office')}}">Post Office</a></li>
                                                    @endif
                                            </ul>
                                        </li>
                                    </ul>
                                    {{--{{route('home')}}--}}
                                </li>
                                <li><a href="#">International </a>
                                    <ul class="dropdown" style="width:350px">
                                        <li><a href="#" >Office</a>
                                            <ul class="dropdown " style="width:250px ; margin-left: 48%">
                                                <li class="dropdown1"><a href="{{url('/staff')}}">staff</a></li>
                                                <li class="dropdown1"><a href="{{url('/cooperation')}}">cooperation</a></li>

                                            </ul>
                                        </li>
                                        <li><a href="#" >students</a>
                                            <ul class="dropdown " style="width:250px; margin-left: 48%">
                                                @if(\App\Student::where('type', 'like', 'admission')->first() != null)
                                                    <li class="dropdown1" ><a href="{{url('/student/admission')}}">admission</a></li>
                                                @endif
                                                @if(\App\Student::where('type', 'like', 'scholarship')->first() != null)
                                                    <li class="dropdown1"><a href="{{url('/student/scholarship')}}">Scholarship</a></li>
                                                @endif
                                                @if(\App\Student::where('type', 'like', 'programs')->first() != null)
                                                    <li class="dropdown1"><a href="{{url('/student/programs')}}">Programs</a></li>
                                                @endif

                                                @if(\App\Student::where('type', 'like', 'cost and free')->first() != null)
                                                    <li class="dropdown1"> <a href="{{url('student/cost and free')}}">Costs and Frees</a></li>
                                                @endif
                                                @if(\App\Student::where('type', 'like', 'how to apply')->first() != null)
                                                    <li class="dropdown1"><a href="{{url('/student/how to apply')}}">How to apply</a></li>
                                                @endif


                                                <li class="dropdown1"><a href="{{url('/campus-container')}}">Campus Life</a></li>

                                            </ul>
                                        </li>
                                        <li><a href="#" >Language Learning Center(LLC)</a>
                                            <ul class="dropdown " style="width:300px;margin-left: 48%">
                                                <li class="dropdown1"><a href="{{url('/forms')}}">Application forms</a></li>
                                                <li class="dropdown1"><a href="{{url('/courses')}}">Courses</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{url('/news')}}">News</a>
                                </li>
                                <li><a href="{{url('/contact-us')}}">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>

                    <!-- Calling Info -->

                </nav>
            </div>
        </div>
    </div>
</header>


