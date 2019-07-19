
<!-- ##### Footer Area Start ##### -->
<footer class="footer-area">
    <div class="main-footer-area section-padding-100-0">
        <div class="container">
            <div class="row">

                @php
                use App\About;
                use App\Contact;
                use App\Link;
                $images = null;
                $history = About::orderBy('id', 'desc')->where('type', '=', 'HISTORY')->first();
                if($history != null) {
                  $images = $history->images()->orderBy('id', 'desc')->take(9)->get();
                }
                $links = Link::all();
                $contact = Contact::orderBy('id', 'desc')->first();
                @endphp
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget mb-100">
                        <div class="widget-title">
                            <h6>Usefull Links</h6>
                        </div>
                        <nav>
                            <ul class="useful-links">
                                @foreach($links as $link)
                                    <li><a href="{{$link->link}}">{{$link->title}}</a></li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget mb-100">
                        <div class="widget-title">
                            <h6>Gallery</h6>
                        </div>
                        <div class="gallery-list d-flex justify-content-between flex-wrap">
                            @if($images != null)
                            @foreach($images as $image)
                                <a href="{{asset($image->path)}}" class="gallery-img" title="Gallery Image 1"><img src="{{asset($image->path)}}" alt=""></a>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget mb-100">
                        <div class="widget-title">
                            <h6>Contact</h6>
                        </div>
                        @if($contact != null)
                        <div class="single-contact d-flex mb-30">
                            <i class="icon-placeholder"></i>
                            <p>{{$contact->address}}</p>
                        </div>
                        <div class="single-contact d-flex mb-30">
                            <i class="icon-telephone-1"></i>
                            <p>Main:  {{$contact->phone1}} <br>Office: {{$contact->phone2}}</p>
                        </div>
                        <div class="single-contact d-flex">
                            <i class="icon-contract"></i>
                            <p>{{$contact->email}}</p>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget mb-100">
                        <div class="widget-title">
                            <h6>Quick Links</h6>
                        </div>
                        <nav>
                            @php($quick_links = \App\QuickLink::all())
                            <ul class="useful-links">
                                @foreach($quick_links as $link)
                                    <li><a href="{{$link->url}}">{{$link->title}}</a></li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="bottom-footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p ><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved for Azarbaijan Shahid Madani University | Designed by <a href="http://www.ezitech.ir/" target="_blank">EziTech</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area Start ##### -->