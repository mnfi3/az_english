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
                        <form action="#" method="post">
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
                <nav class="classy-navbar justify-content-between " id="academyNav">

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
                                        <li><a href="#">Administration</a>
                                            <ul class="dropdown " style="width:420px ;margin-left: 28%;">
                                                <li class="dropdown2"><a href="{{url('/rectors')}}">the Rector</a></li>
                                                <li class="dropdown2"><a href="{{url('/rectors')}}">Vice-Rector for Research & Technology</a></li>
                                                <li class="dropdown2"><a href="{{url('/rectors')}}">Vice-Rector for Education</a></li>
                                                <li class="dropdown2"><a href="{{url('/rectors')}}">Vice-Rector for Cultural Affairs</a></li>
                                                <li class="dropdown2"><a href="{{url('/rectors')}}">Vice-Rector for Student Affairs</a></li>
                                                <li class="dropdown2"><a href="{{url('/rectors')}}">Vice-Rector for Finance & Administrative Affairs</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Academics</a>
                                    <ul class="dropdown" style="width:180px">
                                        <li class="edit-list"><a href="#">faculties</a>
                                            <ul class="dropdown" style="width:500px">
                                                <li><a href="{{url('/faculty')}}" style="">Agriculture</a></li>
                                                <li><a href="{{url('/faculty')}}" style="" >Basic Science</a></li>
                                                <li><a href="{{url('/faculty')}}" style="">Education and Psychology</a></li>
                                                <li><a href="{{url('/faculty')}}" style="">IT and Computer Engineering</a></li>
                                                <li><a href="{{url('/faculty')}}" style="">Literature and Humanities</a></li>
                                                <li><a href="{{url('/faculty')}}" style="">Technology and Engineering</a></li>
                                                <li><a href="{{url('/faculty')}}" style="">Theology and Islamic Science</a></li>

                                            </ul>
                                        </li>
                                    </ul>

                                </li>

                                <li><a href="#">Research</a>
                                    <ul class="dropdown" style="width:300px">

                                        <li><a href="{{url('/libraries')}}">Libraries</a></li>
                                        <li><a href="#">Lab</a>
                                            <ul class="dropdown " style="width:300px ;margin-left: 40%">
                                                <li class="dropdown1"><a href="{{url('/libraries')}}">Computer Labs</a></li>
                                                <li class="dropdown1"><a href="{{url('/libraries')}}">Basic sciences Labs</a></li>
                                                <li class="dropdown1"><a href="{{url('/libraries')}}">Technical and engineering</a></li>
                                                <li class="dropdown1"><a href="{{url('/libraries')}}">Agriculture Lab</a></li>
                                                <li class="dropdown1"><a href="{{url('/libraries')}}">Research Laboratories</a>
                                                    <ul class="dropdown " style="width:300px ;margin-left: 40%">
                                                        <li class="dropdown1"><a href="{{url('/libraries')}}">A</a></li>
                                                        <li class="dropdown1"><a href="{{url('/libraries')}}">B</a></li>


                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        {{--<li><a href="{{url('/conferences')}}">Conferences/Workshops</a></li>--}}
                                        <li><a href="about-us.html">Innovation Center</a></li>
                                        <li><a href="#">Research Centers</a>
                                            <ul class="dropdown " style="width:300px ;margin-left: 40%">
                                                <li class="dropdown1"><a href="#">Institutes</a>
                                                    <ul class="dropdown " style="width:300px ;margin-left: 40%">
                                                        <li class="dropdown1"><a href="{{url('/research-center-details')}}">A</a>
                                                        </li>
                                                        <li class="dropdown1"><a href="{{url('/research-center-details')}}">B</a></li>
                                                        <li class="dropdown1"><a href="{{url('/research-center-details')}}">C</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown1"><a href="#">Research Groups</a>
                                                    <ul class="dropdown " style="width:300px ;margin-left: 40%">
                                                        <li class="dropdown1"><a href="{{url('/research-center-details')}}">A</a>
                                                        </li>
                                                        <li class="dropdown1"><a href="{{url('/research-center-details')}}">B</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    {{--{{route('home')}}--}}
                                </li>


                                <li><a href="{{url('campus-container')}}">Campus life</a>
                                    <ul class="dropdown" style="width:250px">
                                        <li><a href="{{url('/campus')}}">Accomodation</a></li>
                                        <li><a href="{{url('/campus')}}">Transportation</a></li>
                                        <li><a href="{{url('/campus')}}">Restaurants</a></li>
                                        <li><a href="{{url('/campus')}}">Shopping Center</a></li>
                                        <li><a href="{{url('/campus')}}">Health Center</a></li>
                                        <li><a href="{{url('/campus')}}">Sports</a></li>
                                        <li><a href="{{url('/campus')}}">Banks</a></li>
                                        <li><a href="#">Other</a>
                                            <ul class="dropdown" style="width:250px ; margin-left: 28%">
                                                <li><a href="{{url('/staff')}}">kindergarten</a></li>
                                                <li><a href="{{url('/mou')}}">mosque</a></li>
                                                <li><a href="{{url('/projects')}}">Fruit shop</a></li>
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
                                                <li class="dropdown1" ><a href="{{url('/student')}}">admission</a></li>
                                                <li class="dropdown1"><a href="{{url('/student')}}">Scholarship</a></li>
                                                <li class="dropdown1"><a href="{{url('/student')}}">Programs</a></li>
                                                <li class="dropdown1"> <a href="{{url('student')}}">Costs and Fees</a></li>
                                                <li class="dropdown1"><a href="{{url('/student')}}">How to apply</a></li>
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


