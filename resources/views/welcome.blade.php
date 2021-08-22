<!DOCTYPE html>

<html lang="en" class="no-js">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,300italic,700,400,300' rel='stylesheet'>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        {{ $eventSetting->event_name ?? '' }} || Welcome
    </title>
    <meta name="description" content="">
    <link rel="icon" type="image/png" sizes="32x32" href="https://ems.wezadevelopment.com/asset/img/favicon.ico">
    <link href="{{ 'landing/css/bootstrap.min.css' }}" rel="stylesheet">
    <link href="{{ 'landing/css/font-awesome.min.css' }}" rel="stylesheet">
    <link href="{{ 'landing/css/owl.carousel.css' }}" rel="stylesheet">
    <link href="{{ 'landing/css/main.css' }}" rel="stylesheet">
</head>

<body>
    <main>
        <!--Hero section-->
        <header class="hero-section">

            <video autoplay loop muted id="bgvid"
                poster="https://cdn.pixabay.com/photo/2014/05/05/20/29/conference-room-338563_960_720.jpg">
                <source src="{{ asset('video/homepage.mp4') }}" type="video/mp4">
                {{-- <source src="{{ asset('video/newmac.mp4') }}" type="video/mp4"> --}}
                <source src="{{ asset('landing/video/vb.webm') }}" type="video/webm">
            </video>

            <div class="overlay"></div>

            <!--nav-->

            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span
                                class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                        </button>
                        <a href="/" class="logo-brand">
                            {{-- <img src="img/logo.png" data-at2x="img/logo@2x.png"
                                alt="site name" class="logo-head">
                                <img src="img/logo-nav.png"
                                data-at2x="img/logo-nav@2x.png" alt="site name" class="logo-nav"> --}}
                            {{-- <h3 class="text-uppercase">Logo</h3> --}}
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            {{-- <li><a href="#schedule">Schedule</a></li> --}}
                            <li><a href="#speaker">Speakers</a></li>
                            <li><a href="#sponsors">Sponsors</a></li>
                            <li><a href="/login" class="bttn" target="_blank">Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!--nav end-->

            <div class="container text-center">
                <div class="row">
                    <div class="col-md-12">
                        <div class="welcome-message">
                            <h1>{{ $eventSetting->event_name ?? '' }}</h1>
                            @if ($eventSetting->event_start === null)
                                Start Date @else {!! $eventSetting->event_start->toFormattedDateString() !!} @endif - @if ($eventSetting->event_end === null)
                                End Date @else {!! $eventSetting->event_end->toFormattedDateString() !!} @endif
                                {{-- <p>New York, USA</p> --}}
                        </div>
                        <div class="action-btn"> <a href="#counter" class="bttn">About Event</a></div>
                    </div>
                </div>
            </div>
        </header>
        <!--Hero section end-->

        <!--counter-->
        <div class="counter text-center" id="counter">
            <!--container-->
            <div class="container">
                <div class="row text-center">
                    {{-- <div class="col-sm-1 col-xs-6">
                    </div> --}}
                    <div class="col-sm-3 col-xs-6"> <i class="fa fa-user fa-3x"></i>
                        <h3 class="total-number-1">{{ count($speakers) }}</h3>
                        <p>Speakers</p>
                    </div>
                    <div class="col-sm-3 col-xs-6"> <i class="fa fa-graduation-cap fa-3x"></i>
                        <h3 class="total-number-2">{{ count($users) }}</h3>
                        <p>Attending</p>
                    </div>
                    <div class="col-sm-3 col-xs-6"> <i class="fa fa-clock-o fa-3x"></i>
                        <h3 class="total-number-3">{{ $days }}</h3>
                        <p>Days</p>
                    </div>
                    {{-- <div class="col-sm-3 col-xs-6"> <i class="fa fa-exclamation-triangle fa-3x"></i>
                        <h3 class="total-number-4">0</h3>
                        <p>Tickets Left</p>
                    </div> --}}
                </div>
            </div>
            <!--container end-->
        </div>
        <!--counter end-->

        <!--about-->
        <section class="about section-spacing">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        {{-- <img src="{{ asset($eventSetting->logo)}}" alt="logo" data-no-retina> --}}
                        @if ($eventSetting->event_logo)
                            <img src="{{ $eventSetting->event_logo->getUrl() }}" class="img-fluid rounded-start"
                                alt="logo" data-no-retina>
                        @else
                            <img src="{{ asset('img/logo-placeholder.jpg') }}" class="img-fluid rounded-start"
                                alt="logo" data-no-retina>
                        @endif
                    </div>
                    <div class="col-md-8">
                        <h2>About Event</h2>
                        {!! $eventSetting->about ?? '' !!}
                    </div>
                </div>
            </div>
        </section>
        <!--about end-->

        <!--schedule-->
        {{-- <section class="schedule section-spacing" id="schedule">
            <div class="container">
                <header class="text-center">
                    <h2>The Schedule</h2>
                    <h3>Timing and agenda of event</h3>
                </header>
                <div class="row">
                    <div class="col-md-12">
                        <div role="tabpanel" id="schedule-days">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs content-tabs" role="tablist">
                                @foreach ($event_program_dates as $dates)
                                    <li role="presentation">
                                        <a href="{{ route('day.agendas', $dates->id)}}">
                                            <i class="fa fa-calendar"></i>
                                            Friday 11
                                            <span>th</span>
                                            June
                                        </a>
                                    </li>
                                @endforeach
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- Day 1 -->
                                <div role="tabpanel" class="tab-pane fade in active" id="day-1">
                                    <ul class="timeline">

                                        <!-- event schedule 1 -->
                                        <li class="event">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p>8:00 am</p>
                                                    <h4>Check In</h4>
                                                </div>
                                            </div>
                                        </li>
                                        <!--event schedule 1 end-->

                                        <!--event schedule 2-->
                                        <li class="event">
                                            <div class="row">
                                                <div class="col-md-3 text-center"><img
                                                        src="img/speaker/schedule-speaker-1.jpg" alt="schedule-speaker"
                                                        data-no-retina></div>
                                                <div class="col-md-9">
                                                    <p>9:00 am</p>
                                                    <h4>CSS3 Animation</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque,
                                                        aperiam, voluptate
                                                        perspiciatis ex consequuntur at. Lorem ipsum dolor sit amet,
                                                        consectetur adipisicing elit.
                                                        Eaque, aperiam, voluptate perspiciatis ex consequuntur at.</p>
                                                    <p class="event-speaker">- By John Doe</p>
                                                </div>
                                            </div>
                                        </li>
                                        <!--event schedule 2 end-->

                                        <!--event schedule 3-->
                                        <li class="event">
                                            <div class="row">
                                                <div class="col-md-3 col-md-push-9 text-center"><img
                                                        src="img/speaker/schedule-speaker-2.jpg" alt="schedule-speaker"
                                                        data-no-retina></div>
                                                <div class="col-md-9 col-md-pull-3">
                                                    <p>11:00 am</p>
                                                    <h4>Functional JavaScript</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque,
                                                        aperiam, voluptate
                                                        perspiciatis ex consequuntur at. Lorem ipsum dolor sit amet,
                                                        consectetur adipisicing elit.
                                                        Eaque, aperiam, voluptate perspiciatis ex consequuntur at.</p>
                                                    <p class="event-speaker">- By Betty Doe</p>
                                                </div>
                                            </div>
                                        </li>
                                        <!--event schedule 3 end-->

                                        <!--event schedule 4-->
                                        <li class="event">
                                            <p>1:00 pm</p>
                                            <h4>Lunch And Refreshments</h4>
                                        </li>
                                        <!--event schedule 4 end-->

                                        <!--event schedule 5-->
                                        <li class="event">
                                            <div class="row">
                                                <div class="col-md-3 text-center"><img
                                                        src="img/speaker/schedule-speaker-3.jpg" alt="schedule-speaker"
                                                        data-no-retina></div>
                                                <div class="col-md-8">
                                                    <p>3:00 pm</p>
                                                    <h4>Responsive Web Design </h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque,
                                                        aperiam, voluptate
                                                        perspiciatis ex consequuntur at. Lorem ipsum dolor sit amet,
                                                        consectetur adipisicing elit.
                                                        Eaque, aperiam, voluptate perspiciatis ex consequuntur at.</p>
                                                    <p class="event-speaker">- By Jasmine Doe</p>
                                                </div>
                                            </div>
                                        </li>
                                        <!--event schedule 5 end-->

                                        <!--event schedule 6-->
                                        <li class="event">
                                            <p>5:00 pm</p>
                                            <h4>Meetup And Party</h4>
                                        </li>
                                        <!--event schedule 6 end-->

                                    </ul>
                                </div>
                                <!-- Day 1 end -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!--schedule end-->

        <!--speaker-->
        <section class="speaker section-spacing text-center" id="speaker">
            <div class="container">
                <header>
                    <h2>The Speakers</h2>
                    <h3>Experts who will be speaking at the event</h3>
                </header>
                <div class="row">
                    <div class="speaker-slider">
                        @foreach ($speakers as $speaker)
                            <div class="item">
                                <div class="event-speaker">
                                    <figure>
                                        @if ($speaker->avatar)
                                            <img src="{{ $speaker->avatar->getUrl() }}" alt="event-speaker"
                                                data-no-retina>
                                        @else
                                            <img src="https://st.depositphotos.com/1779253/5140/v/600/depositphotos_51405259-stock-illustration-male-avatar-profile-picture-use.jpg"
                                                alt="event-speaker" data-no-retina>
                                        @endif
                                        <figcaption>
                                            <h4>{{ $speaker->name ?? '' }}</h4>
                                            <p>{{ $speaker->designation ?? '' }}</p>
                                            <ul class="social">
                                                <li>
                                                    <a href="{{ $speaker->twitter ?? '' }}" target="_blank">
                                                        <i class="fa fa-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="{{ $speaker->linkedin ?? '' }}" target="_blank">
                                                        <i class="fa fa-linkedin"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>
        <!--speaker end-->

        <!-- sponsors -->
        <section class="speaker section-spacing text-center" id="sponsors">
            <div class="container">
                <header>
                    <h2 class="text-uppercase">The SPONSORS</h2>
                    <h3>Experts who will be speaking at the event</h3>
                </header>
                <div class="row">
                    <div class="sponsors-slider">
                        @foreach ($companies as $key => $company)
                            <div class="item">
                                <div class="event-sponsors">
                                    <figure>
                                        @if ($company->logo)
                                            <img src="{{ $company->logo->getUrl() }}" title="{{ $company->name }}"
                                                alt="sponsor" data-no-retina>
                                        @else
                                            <img title="{{ $company->name }}"
                                                src="https://www.latermicamalaga.com/book/files/uploads/logo-placeholder@2x.png"
                                                alt="sponsor" data-no-retina>
                                        @endif
                                    </figure>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>
        <!-- sponsors -->

        {{-- <!--sponsor-->
        <section class="sponsor section-spacing text-center">
            <div class="container">
                <header>
                    <h2>The Sponsor</h2>
                    <h3>Wonderful sponsors for this year's event</h3>
                </header>
                <div class="row">
                    <div class="col-md-12">
                        @foreach ($companies as $key => $company)
                            <figure>
                                @if ($company->logo)
                                    <img src="{{ $company->logo->getUrl() }}"  alt="sponsor">
                                @else
                                    <img src="https://www.latermicamalaga.com/book/files/uploads/logo-placeholder@2x.png"  alt="sponsor">
                                @endif
                            </figure>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!--sponsor end--> --}}

        <!--site-footer-->
        <footer class="site-footer section-spacing text-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">

                    </div>
                    {{-- <div class="col-sm-4">
                        <figure>
                            <img src="img/logo-nav.png" data-at2x="img/logo-nav@2x.png" alt="site name">
                        </figure>
                        <small>&copy; 2021 {{ $eventSetting->event_name ?? '' }}. All rights reserved.</small>
                    </div> --}}
                    <div class="col-sm-4">
                        <p class="footer-contact-us">Contact Us</p>
                        <!--social-->
                        <ul class="social">
                            <li>
                                <a href="#" data-toggle="modal" data-target="#modal-contact-form">
                                    <i class="fa fa-envelope-o"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/" target="_blank">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                        </ul>
                        <!--social end-->
                    </div>
                </div>
            </div>
        </footer>
        <!--site-footer end-->

    </main>


    <div>
        <a href="#0" class="cd-speaker-bio-close">Close</a>
    </div>
    <!--speaker bio end-->
    <!--scroll top-->
    <p class="scroll-top"><a href="#"><i class="fa fa-chevron-up"></i></a></p>
    <!--end scroll top-->

    <script src="{{ asset('landing/js/jquery-2.1.3.min.js') }}"></script>
    <script src="{{ asset('landing/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('landing/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('landing/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('landing/js/waypoints-sticky.min.js') }}"></script>
    <script src="{{ asset('landing/js/retina.min.js') }}"></script>
    <script src="{{ asset('landing/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('landing/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('landing/js/jquery.form.min.js') }}"></script>
    <script src="{{ asset('landing/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('landing/js/main.js') }}"></script>
</body>

</html>
