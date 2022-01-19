<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>{{ $eventSetting->event_name ?? '' }} || Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css'>
    <link rel="stylesheet" href="{{ asset('landing/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('landing/css/responsive.css') }}" />
</head>

<body>

    <nav class="navbar navbar-default header header-navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu"
                    aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">
                    <h6 class="logo-text">WezaEms</h6>
                    <!-- <img src="img/logo.png" alt="Awesome Image" /> -->
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse  navbar-collapse" id="main-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#about">About</a></li>
                    <li>
                        <a href="#speakers">Speakers</a>
                    </li>
                    <li><a href="#sponsors">Sponsors</a></li>
                    <li><a href="#schedule">Schedule</a></li>
                    <li><a class="btn-primary" href="{{ route('login') }}">Login</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
    <section class="banner">
        <header>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="https://images.unsplash.com/photo-1519750157634-b6d493a0f77c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1374&q=80"
                        alt="images not found">
                    <div class="cover">
                        <div class="container">
                            <div class="header-content">
                                <div class="event-details-card">
                                    <h2>September 14, 2022</h2>
                                    <h1>Future of online events in the metaverse</h1>
                                    <p>12:30 PM - 2:00 PM ET</p>
                                    <div class="buttons-div mt-4">
                                        <a href="{{ route('login') }}" class="btn">Register Now</a>
                                        <a class="btn" href="#"><i class="fa fa-calendar-plus"></i> Add to
                                            calendar </a>
                                    </div>
                                    <h4 class="mt-4 text-white text-below">STREAMING AVAILABLE FROM 12:30PM, SEPTEMBER
                                        14</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="https://images.unsplash.com/photo-1551818255-e6e10975bc17?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1673&q=80"
                        alt="images not found">
                    <div class="cover">
                        <div class="container">
                            <div class="header-content">
                                <div class="event-details-card">
                                    <h2>September 14, 2022</h2>
                                    <h1>Future of online events in the metaverse</h1>
                                    <p>12:30 PM - 2:00 PM ET</p>
                                    <div class="buttons-div mt-4">
                                        <a href="{{ route('login') }}" class="btn">Register Now</a>
                                        <a class="btn" href="#"><i class="fa fa-calendar-plus"></i> Add to
                                            calendar </a>
                                    </div>
                                    <h4 class="mt-4 text-white text-below">STREAMING AVAILABLE FROM 12:30PM, SEPTEMBER
                                        14</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="https://images.unsplash.com/photo-1582192730841-2a682d7375f9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80"
                        alt="images not found">
                    <div class="cover">
                        <div class="container">
                            <div class="header-content">
                                <div class="event-details-card">
                                    <h2>September 14, 2022</h2>
                                    <h1>Future of online events in the metaverse</h1>
                                    <p>12:30 PM - 2:00 PM ET</p>
                                    <div class="buttons-div mt-4">
                                        <a href="{{ route('login') }}" class="btn">Register Now</a>
                                        <a class="btn" href="#"><i class="fa fa-calendar-plus"></i> Add to
                                            calendar </a>
                                    </div>
                                    <h4 class="mt-4 text-white text-below">STREAMING AVAILABLE FROM 12:30PM, SEPTEMBER
                                        14</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </section>
    <section id="about" class="about-section sec-pad">
        <div class="container">
            <div class="col-md-12">
                <br />
                <br />
                <hr>
                <h3 class="line-after headings">About</h3>
                <!-- <h3>Our Event<span>Name</span></h3> -->
                <br />
                <br>
                <p class="black">
                    Virtual solutions are perfect for one-way informative events in corporate environments, like product
                    launches and company presentations. They enable organizers to prepare a defined experience and
                    control their story during the event
                </p>
                <br />
                <br>
                <!-- <p class="black">How will subways, airlines and railways not only recover but thrive in a world of
     drastically changed travel behavior? From drones to infrastructure, we'll talk to industry leaders
     about the ideas and innovations shaping the way we travel from A to B.</p>
    <br /> -->
                <!-- <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incidi
     dunt ut labore et dolore magna aliqu enim ad minim veniam.</p>
    <br />
    <a href="#" class="btn">Buy Ticket</a> &emsp; <a href="#" class="btn btn-inverse">Read More</a> -->

            </div><!-- /.col-md-6 -->
            <!-- <div class="col-md-6">
    <img src="img/about-1.png" alt="Awesome Image" />
   </div> -->
            <!-- /.col-md-6 -->
        </div><!-- /.container -->
    </section><!-- /.about-section -->
    <!--
 <section class="counter-section has-overlay">
  <div class="container">
   <div class="col-md-3 text-center">
    <i class="fa fa-microphone"></i>
    <p>8 Speakers</p>
   </div>
   <div class="col-md-3 text-center">
    <i class="fa fa-flag"></i>
    <p>500 + Seats</p>
   </div>
   <div class="col-md-3 text-center">
    <i class="fa fa-ticket"></i>
    <p>300 Tickets</p>
   </div>
   <div class="col-md-3 text-center">
    <i class="fa fa-calendar"></i>
    <p>3 Days Event</p>
   </div>
  </div>
 </section> -->

    <section class="speaker-section sec-pad" id="speakers">
        <div class="container">
            <div class="headings-part">
                <hr>
                <h3 class="line-after headings" style="font-weight: 900 !important;">Speakers</h3>
                <br />
                <br>
            </div>
            <div class="team-carousel owl-theme">
                <div class="item">
                    <div class="single-speaker">
                        <div class="img-box">
                            <img src="https://informationcradle.com/wp-content/uploads/2019/05/MHUJj15g_400x400.jpeg"
                                alt="" />
                        </div><!-- /.img-box -->
                        <h3 class="team-name">Robert Kiyosaki</h3>
                        <p>Entrepreneur | Investor | Educator</p>
                        {{-- <p>The Future Of Transportation</p> --}}
                    </div><!-- /.single-speaker -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="single-speaker">
                        <div class="img-box">
                            <img src="https://pbs.twimg.com/profile_images/1257396956881498114/Fj13PSh-_400x400.jpg"
                                alt="" />
                        </div><!-- /.img-box -->
                        <h3 class="team-name">Tony Robbins</h3>
                        <p>Chairman</p>
                        <p>Tony Robbins Holdings, Inc.</p>
                    </div><!-- /.single-speaker -->
                </div><!-- /.item -->
                <!-- <div class="item">
     <div class="single-speaker">
      <div class="img-box">
       <img src="https://images.dowjones.com/wp-content/uploads/sites/262/2021/07/29210351/Aicha-Evans_headshot.jpg" alt="" />
      </div>
      <h3>Scott Kirby</h3>
      <p>CEO, United Airlines</p>
      <p>
       The Future Of Transportation
      </p>
     </div>
    </div> -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.speaker-section sec-pad -->


    <section class="sponsors-section sec-pad" id="sponsors">
        <div class="container">
            <div class="headings-part">
                <hr>
                <h3 class="line-after headings" style="font-weight: 900 !important;">Sponsor Participants</h3>
                <br />
                <br>
            </div>
            <div class="team-carousel owl-theme">
                <div class="item">
                    <div class="single-speaker">
                        <div class="img-box">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/3/34/Elon_Musk_Royal_Society_%28crop2%29.jpg"
                                alt="" />
                        </div><!-- /.img-box -->
                        <h3 class="team-name">Elon Reeve Musk</h3>
                        <p>CEO, Chief Engineer SpaceX</p>
                    </div><!-- /.single-speaker -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="single-speaker">
                        <div class="img-box">
                            <img src="https://www.biography.com/.image/t_share/MTY2NzA3ODE3OTgwMzcyMjYw/jeff-bezos-andrew-harrer_bloomberg-via-getty-images.jpg"
                                alt="" />
                        </div><!-- /.img-box -->
                        <h3 class="team-name">Jeffrey Preston</h3>
                        <p>CEO, Amazon</p>
                    </div><!-- /.single-speaker -->
                </div><!-- /.item -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.speaker-section sec-pad -->

    <section class="newsroom-section sec-pad" id="newsroom">
        <div class="container">
            <div class="headings-part">
                <hr>
                <h3 class="line-after headings" style="font-weight: 900 !important;">Newsroom Hosts</h3>
                <br />
                <br>
            </div>
            <div class="team-carousel owl-theme">
                <div class="item">
                    <div class="single-speaker">
                        <div class="img-box">
                            <img src="https://tvline.com/wp-content/uploads/2021/06/christiane-amanpour-cancer.jpeg"
                                alt="" />
                        </div><!-- /.img-box -->
                        <h3 class="team-name">Christiane Amanpour</h3>
                        <p>Chief International Anchor, CNN</p>
                    </div><!-- /.single-speaker -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="single-speaker">
                        <div class="img-box">
                            <img src="https://the1a.org/wp-content/uploads/sites/4/2021/09/GettyImages-1187282393-scaled.jpg"
                                alt="" />
                        </div><!-- /.img-box -->
                        <h3 class="team-name">Anderson Cooper</h3>
                        <p>American broadcast journalist</p>
                    </div><!-- /.single-speaker -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="single-speaker">
                        <div class="img-box">
                            <img src="https://www.chinadaily.com.cn/china/images/attachement/jpg/site1/20150331/00221910dbbd16842b1f24.jpg"
                                alt="" />
                        </div><!-- /.img-box -->
                        <h3 class="team-name">Hu Shuli</h3>
                        <p>Professor,Sun Yat-sen University</p>
                    </div><!-- /.single-speaker -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="single-speaker">
                        <div class="img-box">
                            <img src="https://www.uri.edu/news/wp-content/uploads/news/sites/16/2021/10/phillip2.jpg"
                                alt="" />
                        </div><!-- /.img-box -->
                        <h3 class="team-name">Abby Phillip</h3>
                        <p>American journalist </p>
                    </div><!-- /.single-speaker -->
                </div><!-- /.item -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.speaker-section sec-pad -->

    <section class="schedule-section sec-pad" id="schedule">
        <div class="container">
            <div class="headings-part">
                <hr>
                <h3 class="line-after headings" style="font-weight: 900 !important;">Agenda</h3>
                <br />
                <br>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="search-container">
                        <div class="search-box">
                            <input type="text" placeholder="Search by keyword......" class="form-control" />
                        </div>
                    </div>
                </div>
                <a href="">
                    <div class="col-md-12">
                        <div class="select-date-container">
                            <div class="select-date">
                                <h2><span>September 14,</span> <small>Tuesday</small></h2>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="col-md-12">
                    <div class="row schedule-time-container">
                        <div class="col-md-3">
                            <div class="schedule-time">
                                <h3>09:00 AM</h3>
                            </div>
                        </div>
                        <div class="col-md-9 schedule-content-div">
                            <div class="schedule-content">
                                <h5>12:30 PM - 12:35 PM</h5>
                                <h2>Sponsor Session: A Next Wave of Innovation for Transportation</h2>
                                <p>In conversation with: Willem Marx | Custom Programming Editor, Dow Jones</p>
                                <p>This is a sponsored session. The Wall Street Journal newsroom was not involved in the
                                    production of this session.</p>
                            </div>
                            <div class="schedule-speakers">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img class="schedule-speakers-img"
                                            src="https://images.dowjones.com/wp-content/uploads/sites/262/2021/08/10205244/Bushey_Hitachi-Global-SIB-headshot.docx.jpg"
                                            alt="">
                                    </div>
                                    <div class="col-md-10 schedule-speakers-content">
                                        <h3>Dean Bushey</h3>
                                        <p>
                                            Vice President, Hitachi’s <br> Global Social Innovation Business <br>
                                            Hitachi, Ltd.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row schedule-time-container">
                        <div class="col-md-3">
                            <div class="schedule-time">
                                <h3>09:00 AM</h3>
                            </div>
                        </div>
                        <div class="col-md-9 schedule-content-div">
                            <div class="schedule-content">
                                <h5>12:30 PM - 12:35 PM</h5>
                                <h2>Sponsor Session: A Next Wave of Innovation for Transportation</h2>
                                <p>In conversation with: Willem Marx | Custom Programming Editor, Dow Jones</p>
                                <p>This is a sponsored session. The Wall Street Journal newsroom was not involved in the
                                    production of this session.</p>
                            </div>
                            <div class="schedule-speakers">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img class="schedule-speakers-img"
                                            src="https://images.dowjones.com/wp-content/uploads/sites/262/2021/08/10205244/Bushey_Hitachi-Global-SIB-headshot.docx.jpg"
                                            alt="">
                                    </div>
                                    <div class="col-md-10 schedule-speakers-content">
                                        <h3>Dean Bushey</h3>
                                        <p>
                                            Vice President, Hitachi’s <br> Global Social Innovation Business <br>
                                            Hitachi, Ltd.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row schedule-time-container">
                        <div class="col-md-3">
                            <div class="schedule-time">
                                <h3>09:00 AM</h3>
                            </div>
                        </div>
                        <div class="col-md-9 schedule-content-div">
                            <div class="schedule-content">
                                <h5>12:30 PM - 12:35 PM</h5>
                                <h2>Sponsor Session: A Next Wave of Innovation for Transportation</h2>
                                <p>In conversation with: Willem Marx | Custom Programming Editor, Dow Jones</p>
                                <p>This is a sponsored session. The Wall Street Journal newsroom was not involved in the
                                    production of this session.</p>
                            </div>
                            <div class="schedule-speakers">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img class="schedule-speakers-img"
                                            src="https://images.dowjones.com/wp-content/uploads/sites/262/2021/08/10205244/Bushey_Hitachi-Global-SIB-headshot.docx.jpg"
                                            alt="">
                                    </div>
                                    <div class="col-md-10 schedule-speakers-content">
                                        <h3>Dean Bushey</h3>
                                        <p>
                                            Vice President, Hitachi’s <br> Global Social Innovation Business <br>
                                            Hitachi, Ltd.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.schedule-section sec-pad -->

    <section class="event-sponsor sec-pad" id="event-sponsors-logo">
        <div class="container">
            <div class="headings-part">
                <hr>
                <h3 class="line-after headings">Presenting Sponsors</h3>
                <br />
                <br>
            </div>
            <ul class="sponsor-img-list list-inline">
                <li>
                    <img src="https://images.dowjones.com/wp-content/uploads/sites/262/2021/05/25144218/HITACHI_INSPIRE_GRAY-sized-1.png"
                        alt="" />
                </li>
                <li>
                    <img src="https://images.dowjones.com/wp-content/uploads/sites/262/2021/06/24153016/RyderLogo_EverBetter_Black_RGB.png"
                        alt="" />
                </li>
            </ul>

        </div>
    </section>

    <section class="event-sponsor sec-pad" id="event-sponsors-logo">
        <div class="container">
            <div class="headings-part">
                <hr>
                <h3 class="line-after headings">Media Partners</h3>
                <br />
                <br>
            </div>
            <ul class="sponsor-img-list list-inline">
                <li>
                    <img src="https://images.dowjones.com/wp-content/uploads/sites/262/2021/07/26162508/ctaa_logo_transparent.png"
                        alt="" />
                </li>
                <li>
                    <img src="https://images.dowjones.com/wp-content/uploads/sites/262/2021/08/24204625/MassTransit_LogoTag2019.png"
                        alt="" />
                </li>
                <li>
                    <img src="https://images.dowjones.com/wp-content/uploads/sites/262/2021/08/26174704/WIT-logo-highres.jpg"
                        alt="" />
                </li>
                <li>
                    <img src="https://images.dowjones.com/wp-content/uploads/sites/262/2021/09/01193530/NPW-logo-colour.png"
                        alt="" />
                </li>
            </ul>

        </div>
    </section>

    <section class="footer-section p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h1>Questions?</h1>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-3">
                    <h1>read faqs <span> <i class="fa fa-arrow-right"></i></span></h1>
                </div>
                <div class="col-md-3">
                    <h1>Contact Us <span><i class="fa fa-arrow-right"></i></span></h1>
                </div>
            </div>
    </section>

    <footer>
        <div class="container">
            <div class="col-md-5">
                <div class="about-widget">
                    <a href="/">
                        <!-- <img src="img/logo.png" alt="" /> -->
                        <h6 class="logo-text">Logo</h6>
                    </a>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                        classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock a Latin
                        professor. at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words
                        consectetur.</p>
                </div><!-- /.about-widget -->
            </div><!-- /.col-md-5 -->
            <div class="col-md-4">
                <div class="link-widget">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="/"><i class="fa fa-angle-right"></i> Home</a></li>
                        <li><a href="#about"><i class="fa fa-angle-right"></i> About Us</a></li>
                        <li><a href="#speakers"><i class="fa fa-angle-right"></i> Speakers</a></li>
                        <li><a href="#sponsors"><i class="fa fa-angle-right"></i> Sponsors</a></li>
                        <li><a href="#schedule"><i class="fa fa-angle-right"></i> Schedule</a></li>
                    </ul>
                </div><!-- /.link-widget -->
            </div><!-- /.col-md-4 -->
            <div class="col-md-3">
                <div class="contact-widget">
                    <h3>contact us</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod.</p>
                    <ul>
                        <li>
                            Location: 1201 park street, <br /> &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;Nairobi Kenya,
                        </li>
                        <li>Phone: [254] 757 524 332</li>
                        <li>Email: info@event-name.com</li>
                    </ul>
                </div><!-- /.contact-widget -->
            </div><!-- /.col-md-3 -->
        </div><!-- /.container -->
    </footer>
    <section class="footer-bottom">
        <div class="container">
            <div class="left-text pull-left">
                <p>event-name &copy; 2021 All Right Reserved</p>
            </div><!-- /.left-text pull-left -->
            <div class="social pull-right">
                <ul class="list-inline">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                </ul><!-- /.list-inline -->
            </div><!-- /.social pull-right -->
        </div><!-- /.container -->
    </section><!-- /.footer-bottom -->
    <script src="{{ asset('landing/js/jquery-latest.min.js') }}"></script>
    <script src="{{ asset('landing/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('landing/js/countdown.min.js') }}"></script>
    <script src="{{ asset('landing/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('landing/js/jquery.fancybox.pack.js') }}"></script>
    <script src="{{ asset('landing/js/custom.js') }}"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            dots: false,
            nav: false,
            mouseDrag: false,
            autoplay: true,
            animateOut: 'slideOutUp',
            animateIn: 'slideInUp',
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });
    </script>
</body>

</html>
