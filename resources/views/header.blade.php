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
                        <h3 class=" text-white ml-3 mt-2">Azarbaijan Shahid Madani University</h3>
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
            <div class="container-fluid">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between " id="academyNav" style="border-radius: 5px">

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
                                <li><a href="{{url('/')}}" class="text-white" style="text-transform: uppercase">home</a></li>
                                <li><a href="#" class="text-white" style="text-transform: uppercase">About Us</a>
                                    <ul class="dropdown text-white" style="width:250px">
                                        <li><a href="{{url('/history')}}">History</a></li>
                                        <li><a href="{{url('/message')}}">Presiden's Message</a></li>
                                        <li><a href="#">Administration</a>
                                            <ul class="dropdown " style="width:430px ;margin-left: 28%;">
                                                <li class="dropdown2"><a href="{{url('/rectors/the Rector')}}" class="capitalize">the Rector</a></li>
                                                <li class="dropdown2"><a href="{{url('/rectors/Vice-Rector for Research & Technology')}}">Vice-Rector for Research & Technology</a></li>
                                                <li class="dropdown2"><a href="{{url('/rectors/Vice-Rector for Education')}}">Vice-Rector for Education</a></li>
                                                <li class="dropdown2"><a href="{{url('/rectors/Vice-Rector for Cultural Affairs')}}">Vice-Rector for Cultural Affairs</a></li>
                                                <li class="dropdown2"><a href="{{url('/rectors/Vice-Rector for Student Affairs')}}">Vice-Rector for Student Affairs</a></li>
                                                <li class="dropdown2"><a href="{{url('/rectors/Vice-Rector for Finance & Administrative Affairs')}}">Vice-Rector for Finance & Administrative Affairs</a></li>
                                            </ul>
                                        </li>
                                    </ul>

                                </li>
                                {{--<li><a href="#">ADMINISTRATION</a>--}}
                                {{--<ul class="dropdown" style="width:405px">--}}
                                {{--<li><a href="{{url('/mou')}}">Vice-rector for research</a></li>--}}
                                {{--<li><a href="{{url('/staff')}}">Vice-rector for Culture</a></li>--}}
                                {{--<li><a href="{{url('/staff')}}">Vice-rector for Students affairs</a></li>--}}
                                {{--<li><a href="{{url('/staff')}}">Vice-rector for Financial</a></li>--}}
                                {{--<li><a href="{{url('/staff')}}">Vice-rector for education</a></li>--}}
                                {{--</ul>--}}

                                {{--</li>--}}
                                <li><a href="#" class="text-white" style="text-transform: uppercase">Academics</a>
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

                                <li><a href="#" class="text-white" style="text-transform: uppercase">Research</a>
                                    <ul class="dropdown" style="width:300px">

                                        <li><a href="{{url('/research/libraries')}}" class="uppercase" >Libraries</a></li>
                                        <li><a href="#" >Faculty Labs</a>
                                            <ul class="dropdown " style="width:300px ;margin-left: 40%">
                                                <li class="dropdown1"><a href="{{url('/research/computer labs')}}">Computer Labs</a></li>
                                                <li class="dropdown1"><a href="{{url('/research/basic sciences labs')}}">Basic sciences Labs</a></li>
                                                <li class="dropdown1"><a href="{{url('/research/technical and engineering')}}">Technical and engineering</a></li>
                                                <li class="dropdown1"><a href="{{url('/research/Agriculture Lab')}}">Agriculture Labs</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Research Labs</a>
                                            <ul class="dropdown " style="width:390px ;margin-left: 40%">
                                                <li class="dropdown1"><a href="{{url('/research/Smart Distribution Network Research Lab')}}">Smart Distribution Network Research Lab</a></li>
                                                <li class="dropdown1"><a href="http://msl.azaruniv.ac.ir">Molecular Simulation Lab</a></li>
                                            </ul>
                                        </li>
                                        {{--<li><a href="{{url('/conferences')}}">Conferences/Workshops</a></li>--}}
                                        <li><a href="{{url('/research/innovation')}}">Innovation center</a></li>
                                        <li><a href="">Research centers</a>
                                            <ul class="dropdown " style="width:250px ;margin-left: 40%">
                                                <li class="dropdown1"><a href="">Institutes</a>
                                                    <ul class="dropdown " style="width:330px ;margin-left: 28%">
                                                        <li><a href="{{url('/research/Social and Mental Health')}}" >Social and Mental Health</a></li>
                                                        <li><a href="{{url('/research/Cognitive Sciences and Technology')}}">Cognitive Sciences and Technology</a></li>
                                                        <li><a href="{{url('/research/Applied Power System')}}">Applied Power System</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown1"><a href="">Research Groups</a>
                                                    <ul class="dropdown " style="width:250px ;margin-left: 28%">
                                                        <li><a href="{{url('/research/Halophyte Biotechnology')}}">Halophyte Biotechnology</a></li>
                                                        <li><a href="{{url('/research/Communication Process')}}">Communication Process</a></li>
                                                    </ul>
                                                </li>

                                            </ul>
                                        </li>
                                    </ul>
                                    {{--{{route('home')}}--}}
                                </li>


                                <li><a href="{{url('/campus-container')}}" class="text-white" style="text-transform: uppercase">Campus life</a>
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
                                            <li><a href="{{url('/campus-life/sports')}}">Sports Center</a></li>
                                        @endif
                                        @if(\App\CampusLife::where('name', 'like', 'dormitory')->first() != null)
                                            <li><a href="{{url('/campus-life/dormitory')}}">dormitory</a></li>
                                        @endif
                                        @if(\App\CampusLife::where('name', 'like', 'banks')->first() != null)
                                            <li><a href="{{url('/campus-life/banks')}}">Banks</a></li>
                                        @endif

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
                                    {{--{{route('home')}}--}}
                                </li>
                                <li><a href="#" class="text-white" style="text-transform: uppercase">Admission</a>
                                    <ul class="dropdown" style="width:250px">
                                        @if(\App\Admission::where('name', 'like', 'Departments & Courses')->first() != null)
                                            <li><a href="{{url('admission/Departments & Courses')}}">Departments & Courses</a></li>
                                        @endif
                                        @if(\App\Admission::where('name', 'like', 'How to apply')->first() != null)
                                            <li><a href="{{url('admission/How to apply')}}">How to apply</a></li>
                                        @endif
                                        {{--@if(\App\Admission::where('name', 'like', 'unknown')->first() != null)--}}
                                            {{--<li><a href="{{url('admission/unknown')}}">Unknown</a></li>--}}
                                        {{--@endif--}}


                                    </ul>
                                </li>
                                <li><a href="#" class="text-white" style="text-transform: uppercase">International Office</a>
                                    <ul class="dropdown" style="width:350px">
                                        <li><a href="#" >Office</a>
                                            <ul class="dropdown " style="width:250px ; margin-left: 48%">
                                                <li class="dropdown1"><a href="{{url('/staff')}}">staff</a></li>
                                                <li class="dropdown1"><a href="{{url('/cooperation')}}">cooperation</a></li>

                                            </ul>
                                        </li>
                                        {{--<li><a href="#" >students</a>--}}
                                            {{--<ul class="dropdown " style="width:250px; margin-left: 48%">--}}
                                                {{--@if(\App\Student::where('type', 'like', 'admission')->first() != null)--}}
                                                    {{--<li class="dropdown1" ><a href="{{url('/student/admission')}}">admission</a></li>--}}
                                                {{--@endif--}}
                                                {{--@if(\App\Student::where('type', 'like', 'scholarship')->first() != null)--}}
                                                    {{--<li class="dropdown1"><a href="{{url('/student/scholarship')}}">Scholarship</a></li>--}}
                                                {{--@endif--}}
                                                {{--@if(\App\Student::where('type', 'like', 'programs')->first() != null)--}}
                                                    {{--<li class="dropdown1"><a href="{{url('/student/programs')}}">Programs</a></li>--}}
                                                {{--@endif--}}

                                                {{--@if(\App\Student::where('type', 'like', 'cost and free')->first() != null)--}}
                                                    {{--<li class="dropdown1"> <a href="{{url('student/cost and free')}}">Costs and Frees</a></li>--}}
                                                {{--@endif--}}
                                                {{--@if(\App\Student::where('type', 'like', 'how to apply')->first() != null)--}}
                                                    {{--<li class="dropdown1"><a href="{{url('/student/how to apply')}}">How to apply</a></li>--}}
                                                {{--@endif--}}


                                                {{--<li class="dropdown1"><a href="{{url('/campus-container')}}">Campus Life</a></li>--}}

                                            {{--</ul>--}}
                                        {{--</li>--}}
                                        <li><a href="#" >Language Learning Center (LLC)</a>
                                            <ul class="dropdown " style="width:300px;margin-left: 48%">
                                                <li class="dropdown1"><a href="{{url('/forms')}}">Application forms</a></li>
                                                <li class="dropdown1"><a href="{{url('/courses')}}">Courses</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{url('/news')}}" class="text-white" style="text-transform: uppercase">News</a>
                                </li>
                                <li><a href="{{url('/contact-us')}}" class="text-white" style="text-transform: uppercase">Contact Us</a>
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


