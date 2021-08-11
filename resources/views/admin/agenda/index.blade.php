@extends('layouts.main')

@section('title')
    Agenda
@endsection

@section('css')
    <style>
        .fa-calendar-alt {
            margin-left: 10px;
            font-size: 1.2rem;
        }

        .btn-calendar:hover {
            color: black !important
        }

    </style>
@endsection

@section('content')
    <div class="row">

        <!-- carousel -->
        <div class="col-md-12">
            <div class="ms-panel">
                <div class="">
                    <div id="arrowSlider" class="ms-arrow-slider carousel slide" data-ride="carousel" data-interval="4000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100"
                                    src="https://cdn.hubilo.com/banner/community_banner/1402283/1036/2386_8116_985594001623905692.jpeg"
                                    alt="First slide">
                            </div>
                            <div class="carousel-item ">
                                <img class="d-block w-100"
                                    src="https://cdn.hubilo.com/banner/community_banner/1402283/1036/4759_8987_148087001623905807.jpeg"
                                    alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                    src="https://cdn.hubilo.com/banner/community_banner/1402283/1036/3379_5134_573177001623920266.jpeg"
                                    alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                    src="https://cdn.hubilo.com/banner/community_banner/1402283/1036/1377_6527_058721001623905831.jpeg"
                                    alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                    src="https://cdn.hubilo.com/banner/community_banner/1402283/1036/4407_9624_156534001623905786.jpeg"
                                    alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#arrowSlider" role="button" data-slide="prev">
                            <span class="material-icons" aria-hidden="true">keyboard_arrow_left</span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#arrowSlider" role="button" data-slide="next">
                            <span class="material-icons" aria-hidden="true">keyboard_arrow_right</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <ul class="nav nav-tabs d-flex nav-justified " role="tablist">
                        <li role="presentation">
                            <a href="{{ route('admin.home') }}">
                                <i class="flaticon-browser"></i> <br>
                                Reception
                            </a>
                        </li>
                        <li role="presentation"><a class="active" href="{{ route('admin.view.agenda') }}"> <i
                                    class="flaticon-internet"></i> <br>Agenda </a></li>
                        <li role="presentation"><a href="{{ route('admin.view.event-feed') }}"> <i
                                    class="flaticon-chat"></i> <br>Event Feed </a></li>
                        <li role="presentation"><a href="{{ route('admin.view.speaker') }}"> <i class="flaticon-user"></i>
                                <br>Speakers </a></li>
                        <li role="presentation"><a href="{{ route('admin.companies.index') }}"> <i
                                    class="flaticon-user"></i> <br>Companies </a></li>
                        <li role="presentation"><a href="{{ route('admin.view.attendee') }}"> <i
                                    class="flaticon-user"></i> <br>Attendees </a></li>
                        <li role="presentation"><a href="{{ route('admin.view.meeting') }}"> <i
                                    class="flaticon-layers"></i> <br>Meetings </a></li>
                    </ul>
                </div>
            </div>

            <div class="tab-content">

                <div role="tabpanel" class="tab-pane active show fade in" id="tab23">

                    <div class="row">
                        <div class="col-xl-1 col-md-12">
                        </div>
                        <div class="col-xl-2 col-md-12">
                            <div class="ms-panel">
                                <div class="ms-panel-body">
                                    <ul class="event-date-shedule text-center">
                                        <h2>2021</h2>
                                        <li role="presentation"><a class="btn btn-theme p-3 btn-block" href="#tab16"
                                                aria-controls="tab16" class="active" role="tab" data-toggle="tab">JUN 23
                                                FRI</a></li>
                                        <li role="presentation"><a class="btn btn-theme p-3 btn-block" href="#tab17"
                                                aria-controls="tab17" role="tab" data-toggle="tab">JUN 24 FRI</a></li>
                                        <li role="presentation"><a class="btn btn-theme p-3 btn-block" href="#tab18"
                                                aria-controls="tab18" role="tab" data-toggle="tab">JUN 25 FRI</a></li>
                                        <li role="presentation"><a class="btn btn-theme p-3 btn-block" href="#tab18"
                                                aria-controls="tab18" role="tab" data-toggle="tab">JUN 25 FRI</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-md-12">
                            <div class="ms-panel">
                                <div class="ms-panel-header bg-dark">
                                    <div class="d-flex justify-content-start">
                                        <div>
                                            <button class="btn btn-calendar btn-block">10:30AM - 12:00PM <i
                                                    class="fa fa-calendar-alt"></i></button>
                                        </div>
                                        <div>
                                            <h1 class="text-white ml-4 mt-2">Exhibitor Pitch Session</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="ms-panel-header bg-darker">
                                    <button class="btn btn-chat btn-pill btn-sm"><i class="fa fa-play mr-1"></i> watch
                                        session</button>
                                </div>
                                <div class="ms-panel-body">
                                    <div class="about-agenda">
                                        <p>Lorem ipsum dolor sit, amet consectetur totam quisquam eligendi dicta consectetur
                                            libero eaque eius quaerat quibusdam laboriosam recusandae exercitationem iure.
                                            Velit a autem laudantium fugiat.</p>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between m-2">
                                        <div>
                                            <h2 class="text-theme">SPEAKERS</h2>
                                        </div>
                                        <div>
                                            <h4 data-toggle="modal" data-target="#viewAllSpeakers"
                                                class="text-theme view-all">VIEW ALL <i class="fa fa-chevron-right"></i>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start">
                                        <div>
                                            <img class="speaker-img"
                                                src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                alt="Speaker">
                                        </div>
                                        <div>
                                            <img class="speaker-img"
                                                src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                alt="Speaker">
                                        </div>
                                        <div>
                                            <img class="speaker-img"
                                                src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                alt="Speaker">
                                        </div>
                                        <div>
                                            <img class="speaker-img"
                                                src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                alt="Speaker">
                                        </div>
                                        <div>
                                            <img class="speaker-img"
                                                src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                alt="Speaker">
                                        </div>
                                    </div>
                                </div>

                                {{-- modal view all --}}
                                <div class="modal fade" id="viewAllSpeakers" tabindex="-1" role="dialog"
                                    aria-labelledby="viewAllSpeakers">
                                    <div class="modal-dialog modal-dialog-centered modal-max" role="document">
                                        <div class="modal-content">

                                            <div class="modal-body">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h1>Speakers</h1>
                                                <ul class="ms-list">
                                                    <li class="ms-list-item media">
                                                        <img class="speaker-img-modal"
                                                            src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                            alt="Speaker">
                                                        <div class="media-body">
                                                            <h4>Mark Mwenda</h4>
                                                            <p>Marketing Manager, FFOAB</p>
                                                        </div>
                                                    </li>
                                                    <li class="ms-list-item media">
                                                        <img class="speaker-img-modal"
                                                            src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                            alt="Speaker">
                                                        <div class="media-body">
                                                            <h4>Mark Mwenda</h4>
                                                            <p>Marketing Manager, FFOAB</p>
                                                        </div>
                                                    </li>
                                                    <li class="ms-list-item media">
                                                        <img class="speaker-img-modal"
                                                            src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                            alt="Speaker">
                                                        <div class="media-body">
                                                            <h4>Mark Mwenda</h4>
                                                            <p>Marketing Manager, FFOAB</p>
                                                        </div>
                                                    </li>
                                                    <li class="ms-list-item media">
                                                        <img class="speaker-img-modal"
                                                            src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                            alt="Speaker">
                                                        <div class="media-body">
                                                            <h4>Mark Mwenda</h4>
                                                            <p>Marketing Manager, FFOAB</p>
                                                        </div>
                                                    </li>
                                                    <li class="ms-list-item media">
                                                        <img class="speaker-img-modal"
                                                            src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                            alt="Speaker">
                                                        <div class="media-body">
                                                            <h4>Mark Mwenda</h4>
                                                            <p>Marketing Manager, FFOAB</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="ms-panel">
                                <div class="ms-panel-header bg-dark">
                                    <div class="d-flex justify-content-start">
                                        <div>
                                            <button class="btn btn-calendar btn-block">10:30AM - 12:00PM <i
                                                    class="fa fa-calendar-alt"></i></button>
                                        </div>
                                        <div>
                                            <h1 class="text-white ml-4 mt-2">Exhibitor Pitch Session</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="ms-panel-header bg-darker">
                                    <button class="btn btn-chat btn-pill btn-sm"><i class="fa fa-play mr-1"></i> watch
                                        session</button>
                                </div>
                                <div class="ms-panel-body">
                                    <div class="about-agenda">
                                        <p>Lorem ipsum dolor sit, amet consectetur totam quisquam eligendi dicta consectetur
                                            libero eaque eius quaerat quibusdam laboriosam recusandae exercitationem iure.
                                            Velit a autem laudantium fugiat.</p>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between m-2">
                                        <div>
                                            <h2 class="text-theme">SPEAKERS</h2>
                                        </div>
                                        <div>
                                            <h4 data-toggle="modal" data-target="#viewAllSpeakers"
                                                class="text-theme view-all">VIEW ALL <i class="fa fa-chevron-right"></i>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start">
                                        <div>
                                            <img class="speaker-img"
                                                src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                alt="Speaker">
                                        </div>
                                        <div>
                                            <img class="speaker-img"
                                                src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                alt="Speaker">
                                        </div>
                                        <div>
                                            <img class="speaker-img"
                                                src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                alt="Speaker">
                                        </div>
                                        <div>
                                            <img class="speaker-img"
                                                src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                alt="Speaker">
                                        </div>
                                        <div>
                                            <img class="speaker-img"
                                                src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                alt="Speaker">
                                        </div>
                                    </div>
                                </div>

                                {{-- modal view all --}}
                                <div class="modal fade" id="viewAllSpeakers" tabindex="-1" role="dialog"
                                    aria-labelledby="viewAllSpeakers">
                                    <div class="modal-dialog modal-dialog-centered modal-max" role="document">
                                        <div class="modal-content">

                                            <div class="modal-body">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h1>Speakers</h1>
                                                <ul class="ms-list">
                                                    <li class="ms-list-item media">
                                                        <img class="speaker-img-modal"
                                                            src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                            alt="Speaker">
                                                        <div class="media-body">
                                                            <h4>Mark Mwenda</h4>
                                                            <p>Marketing Manager, FFOAB</p>
                                                        </div>
                                                    </li>
                                                    <li class="ms-list-item media">
                                                        <img class="speaker-img-modal"
                                                            src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                            alt="Speaker">
                                                        <div class="media-body">
                                                            <h4>Mark Mwenda</h4>
                                                            <p>Marketing Manager, FFOAB</p>
                                                        </div>
                                                    </li>
                                                    <li class="ms-list-item media">
                                                        <img class="speaker-img-modal"
                                                            src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                            alt="Speaker">
                                                        <div class="media-body">
                                                            <h4>Mark Mwenda</h4>
                                                            <p>Marketing Manager, FFOAB</p>
                                                        </div>
                                                    </li>
                                                    <li class="ms-list-item media">
                                                        <img class="speaker-img-modal"
                                                            src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                            alt="Speaker">
                                                        <div class="media-body">
                                                            <h4>Mark Mwenda</h4>
                                                            <p>Marketing Manager, FFOAB</p>
                                                        </div>
                                                    </li>
                                                    <li class="ms-list-item media">
                                                        <img class="speaker-img-modal"
                                                            src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                            alt="Speaker">
                                                        <div class="media-body">
                                                            <h4>Mark Mwenda</h4>
                                                            <p>Marketing Manager, FFOAB</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="ms-panel">
                                <div class="ms-panel-header bg-dark">
                                    <div class="d-flex justify-content-start">
                                        <div>
                                            <button class="btn btn-calendar btn-block">10:30AM - 12:00PM <i
                                                    class="fa fa-calendar-alt"></i></button>
                                        </div>
                                        <div>
                                            <h1 class="text-white ml-4 mt-2">Exhibitor Pitch Session</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="ms-panel-header bg-darker">
                                    <button class="btn btn-chat btn-pill btn-sm"><i class="fa fa-play mr-1"></i> watch
                                        session</button>
                                </div>
                                <div class="ms-panel-body">
                                    <div class="about-agenda">
                                        <p>Lorem ipsum dolor sit, amet consectetur totam quisquam eligendi dicta consectetur
                                            libero eaque eius quaerat quibusdam laboriosam recusandae exercitationem iure.
                                            Velit a autem laudantium fugiat.</p>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between m-2">
                                        <div>
                                            <h2 class="text-theme">SPEAKERS</h2>
                                        </div>
                                        <div>
                                            <h4 data-toggle="modal" data-target="#viewAllSpeakers"
                                                class="text-theme view-all">VIEW ALL <i class="fa fa-chevron-right"></i>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start">
                                        <div>
                                            <img class="speaker-img"
                                                src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                alt="Speaker">
                                        </div>
                                        <div>
                                            <img class="speaker-img"
                                                src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                alt="Speaker">
                                        </div>
                                        <div>
                                            <img class="speaker-img"
                                                src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                alt="Speaker">
                                        </div>
                                        <div>
                                            <img class="speaker-img"
                                                src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                alt="Speaker">
                                        </div>
                                        <div>
                                            <img class="speaker-img"
                                                src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                alt="Speaker">
                                        </div>
                                    </div>
                                </div>

                                {{-- modal view all --}}
                                <div class="modal fade" id="viewAllSpeakers" tabindex="-1" role="dialog"
                                    aria-labelledby="viewAllSpeakers">
                                    <div class="modal-dialog modal-dialog-centered modal-max" role="document">
                                        <div class="modal-content">

                                            <div class="modal-body">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h1>Speakers</h1>
                                                <ul class="ms-list">
                                                    <li class="ms-list-item media">
                                                        <img class="speaker-img-modal"
                                                            src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                            alt="Speaker">
                                                        <div class="media-body">
                                                            <h4>Mark Mwenda</h4>
                                                            <p>Marketing Manager, FFOAB</p>
                                                        </div>
                                                    </li>
                                                    <li class="ms-list-item media">
                                                        <img class="speaker-img-modal"
                                                            src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                            alt="Speaker">
                                                        <div class="media-body">
                                                            <h4>Mark Mwenda</h4>
                                                            <p>Marketing Manager, FFOAB</p>
                                                        </div>
                                                    </li>
                                                    <li class="ms-list-item media">
                                                        <img class="speaker-img-modal"
                                                            src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                            alt="Speaker">
                                                        <div class="media-body">
                                                            <h4>Mark Mwenda</h4>
                                                            <p>Marketing Manager, FFOAB</p>
                                                        </div>
                                                    </li>
                                                    <li class="ms-list-item media">
                                                        <img class="speaker-img-modal"
                                                            src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                            alt="Speaker">
                                                        <div class="media-body">
                                                            <h4>Mark Mwenda</h4>
                                                            <p>Marketing Manager, FFOAB</p>
                                                        </div>
                                                    </li>
                                                    <li class="ms-list-item media">
                                                        <img class="speaker-img-modal"
                                                            src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                            alt="Speaker">
                                                        <div class="media-body">
                                                            <h4>Mark Mwenda</h4>
                                                            <p>Marketing Manager, FFOAB</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="ms-panel">
                                <div class="ms-panel-header bg-dark">
                                    <div class="d-flex justify-content-start">
                                        <div>
                                            <button class="btn btn-calendar btn-block">10:30AM - 12:00PM <i
                                                    class="fa fa-calendar-alt"></i></button>
                                        </div>
                                        <div>
                                            <h1 class="text-white ml-4 mt-2">Exhibitor Pitch Session</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="ms-panel-header bg-darker">
                                    <button class="btn btn-chat btn-pill btn-sm"><i class="fa fa-play mr-1"></i> watch
                                        session</button>
                                </div>
                                <div class="ms-panel-body">
                                    <div class="about-agenda">
                                        <p>Lorem ipsum dolor sit, amet consectetur totam quisquam eligendi dicta consectetur
                                            libero eaque eius quaerat quibusdam laboriosam recusandae exercitationem iure.
                                            Velit a autem laudantium fugiat.</p>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between m-2">
                                        <div>
                                            <h2 class="text-theme">SPEAKERS</h2>
                                        </div>
                                        <div>
                                            <h4 data-toggle="modal" data-target="#viewAllSpeakers"
                                                class="text-theme view-all">VIEW ALL <i class="fa fa-chevron-right"></i>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start">
                                        <div>
                                            <img class="speaker-img"
                                                src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                alt="Speaker">
                                        </div>
                                        <div>
                                            <img class="speaker-img"
                                                src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                alt="Speaker">
                                        </div>
                                        <div>
                                            <img class="speaker-img"
                                                src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                alt="Speaker">
                                        </div>
                                        <div>
                                            <img class="speaker-img"
                                                src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                alt="Speaker">
                                        </div>
                                        <div>
                                            <img class="speaker-img"
                                                src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                alt="Speaker">
                                        </div>
                                    </div>
                                </div>

                                {{-- modal view all --}}
                                <div class="modal fade" id="viewAllSpeakers" tabindex="-1" role="dialog"
                                    aria-labelledby="viewAllSpeakers">
                                    <div class="modal-dialog modal-dialog-centered modal-max" role="document">
                                        <div class="modal-content">

                                            <div class="modal-body">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h1>Speakers</h1>
                                                <ul class="ms-list">
                                                    <li class="ms-list-item media">
                                                        <img class="speaker-img-modal"
                                                            src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                            alt="Speaker">
                                                        <div class="media-body">
                                                            <h4>Mark Mwenda</h4>
                                                            <p>Marketing Manager, FFOAB</p>
                                                        </div>
                                                    </li>
                                                    <li class="ms-list-item media">
                                                        <img class="speaker-img-modal"
                                                            src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                            alt="Speaker">
                                                        <div class="media-body">
                                                            <h4>Mark Mwenda</h4>
                                                            <p>Marketing Manager, FFOAB</p>
                                                        </div>
                                                    </li>
                                                    <li class="ms-list-item media">
                                                        <img class="speaker-img-modal"
                                                            src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                            alt="Speaker">
                                                        <div class="media-body">
                                                            <h4>Mark Mwenda</h4>
                                                            <p>Marketing Manager, FFOAB</p>
                                                        </div>
                                                    </li>
                                                    <li class="ms-list-item media">
                                                        <img class="speaker-img-modal"
                                                            src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                            alt="Speaker">
                                                        <div class="media-body">
                                                            <h4>Mark Mwenda</h4>
                                                            <p>Marketing Manager, FFOAB</p>
                                                        </div>
                                                    </li>
                                                    <li class="ms-list-item media">
                                                        <img class="speaker-img-modal"
                                                            src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                            alt="Speaker">
                                                        <div class="media-body">
                                                            <h4>Mark Mwenda</h4>
                                                            <p>Marketing Manager, FFOAB</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="ms-panel">
                                <div class="ms-panel-header bg-dark">
                                    <div class="d-flex justify-content-start">
                                        <div>
                                            <button class="btn btn-calendar btn-block">10:30AM - 12:00PM <i
                                                    class="fa fa-calendar-alt"></i></button>
                                        </div>
                                        <div>
                                            <h1 class="text-white ml-4 mt-2">Exhibitor Pitch Session</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="ms-panel-header bg-darker">
                                    <button class="btn btn-chat btn-pill btn-sm"><i class="fa fa-play mr-1"></i> watch
                                        session</button>
                                </div>
                                <div class="ms-panel-body">
                                    <div class="about-agenda">
                                        <p>Lorem ipsum dolor sit, amet consectetur totam quisquam eligendi dicta consectetur
                                            libero eaque eius quaerat quibusdam laboriosam recusandae exercitationem iure.
                                            Velit a autem laudantium fugiat.</p>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between m-2">
                                        <div>
                                            <h2 class="text-theme">SPEAKERS</h2>
                                        </div>
                                        <div>
                                            <h4 data-toggle="modal" data-target="#viewAllSpeakers"
                                                class="text-theme view-all">VIEW ALL <i class="fa fa-chevron-right"></i>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start">
                                        <div>
                                            <img class="speaker-img"
                                                src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                alt="Speaker">
                                        </div>
                                        <div>
                                            <img class="speaker-img"
                                                src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                alt="Speaker">
                                        </div>
                                        <div>
                                            <img class="speaker-img"
                                                src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                alt="Speaker">
                                        </div>
                                        <div>
                                            <img class="speaker-img"
                                                src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                alt="Speaker">
                                        </div>
                                        <div>
                                            <img class="speaker-img"
                                                src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                alt="Speaker">
                                        </div>
                                    </div>
                                </div>

                                {{-- modal view all --}}
                                <div class="modal fade" id="viewAllSpeakers" tabindex="-1" role="dialog"
                                    aria-labelledby="viewAllSpeakers">
                                    <div class="modal-dialog modal-dialog-centered modal-max" role="document">
                                        <div class="modal-content">

                                            <div class="modal-body">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h1>Speakers</h1>
                                                <ul class="ms-list">
                                                    <li class="ms-list-item media">
                                                        <img class="speaker-img-modal"
                                                            src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                            alt="Speaker">
                                                        <div class="media-body">
                                                            <h4>Mark Mwenda</h4>
                                                            <p>Marketing Manager, FFOAB</p>
                                                        </div>
                                                    </li>
                                                    <li class="ms-list-item media">
                                                        <img class="speaker-img-modal"
                                                            src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                            alt="Speaker">
                                                        <div class="media-body">
                                                            <h4>Mark Mwenda</h4>
                                                            <p>Marketing Manager, FFOAB</p>
                                                        </div>
                                                    </li>
                                                    <li class="ms-list-item media">
                                                        <img class="speaker-img-modal"
                                                            src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                            alt="Speaker">
                                                        <div class="media-body">
                                                            <h4>Mark Mwenda</h4>
                                                            <p>Marketing Manager, FFOAB</p>
                                                        </div>
                                                    </li>
                                                    <li class="ms-list-item media">
                                                        <img class="speaker-img-modal"
                                                            src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                            alt="Speaker">
                                                        <div class="media-body">
                                                            <h4>Mark Mwenda</h4>
                                                            <p>Marketing Manager, FFOAB</p>
                                                        </div>
                                                    </li>
                                                    <li class="ms-list-item media">
                                                        <img class="speaker-img-modal"
                                                            src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                            alt="Speaker">
                                                        <div class="media-body">
                                                            <h4>Mark Mwenda</h4>
                                                            <p>Marketing Manager, FFOAB</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="ms-panel">
                                <div class="ms-panel-header bg-dark">
                                    <div class="d-flex justify-content-start">
                                        <div>
                                            <button class="btn btn-calendar btn-block">10:30AM - 12:00PM <i
                                                    class="fa fa-calendar-alt"></i></button>
                                        </div>
                                        <div>
                                            <h1 class="text-white ml-4 mt-2">Exhibitor Pitch Session</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="ms-panel-header bg-darker">
                                    <button class="btn btn-chat btn-pill btn-sm"><i class="fa fa-play mr-1"></i> watch
                                        session</button>
                                </div>
                                <div class="ms-panel-body">
                                    <div class="about-agenda">
                                        <p>Lorem ipsum dolor sit, amet consectetur totam quisquam eligendi dicta consectetur
                                            libero eaque eius quaerat quibusdam laboriosam recusandae exercitationem iure.
                                            Velit a autem laudantium fugiat.</p>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between m-2">
                                        <div>
                                            <h2 class="text-theme">SPEAKERS</h2>
                                        </div>
                                        <div>
                                            <h4 data-toggle="modal" data-target="#viewAllSpeakers"
                                                class="text-theme view-all">VIEW ALL <i class="fa fa-chevron-right"></i>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start">
                                        <div>
                                            <img class="speaker-img"
                                                src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                alt="Speaker">
                                        </div>
                                        <div>
                                            <img class="speaker-img"
                                                src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                alt="Speaker">
                                        </div>
                                        <div>
                                            <img class="speaker-img"
                                                src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                alt="Speaker">
                                        </div>
                                        <div>
                                            <img class="speaker-img"
                                                src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                alt="Speaker">
                                        </div>
                                        <div>
                                            <img class="speaker-img"
                                                src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                alt="Speaker">
                                        </div>
                                    </div>
                                </div>

                                {{-- modal view all --}}
                                <div class="modal fade" id="viewAllSpeakers" tabindex="-1" role="dialog"
                                    aria-labelledby="viewAllSpeakers">
                                    <div class="modal-dialog modal-dialog-centered modal-max" role="document">
                                        <div class="modal-content">

                                            <div class="modal-body">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h1>Speakers</h1>
                                                <ul class="ms-list">
                                                    <li class="ms-list-item media">
                                                        <img class="speaker-img-modal"
                                                            src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                            alt="Speaker">
                                                        <div class="media-body">
                                                            <h4>Mark Mwenda</h4>
                                                            <p>Marketing Manager, FFOAB</p>
                                                        </div>
                                                    </li>
                                                    <li class="ms-list-item media">
                                                        <img class="speaker-img-modal"
                                                            src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                            alt="Speaker">
                                                        <div class="media-body">
                                                            <h4>Mark Mwenda</h4>
                                                            <p>Marketing Manager, FFOAB</p>
                                                        </div>
                                                    </li>
                                                    <li class="ms-list-item media">
                                                        <img class="speaker-img-modal"
                                                            src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                            alt="Speaker">
                                                        <div class="media-body">
                                                            <h4>Mark Mwenda</h4>
                                                            <p>Marketing Manager, FFOAB</p>
                                                        </div>
                                                    </li>
                                                    <li class="ms-list-item media">
                                                        <img class="speaker-img-modal"
                                                            src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                            alt="Speaker">
                                                        <div class="media-body">
                                                            <h4>Mark Mwenda</h4>
                                                            <p>Marketing Manager, FFOAB</p>
                                                        </div>
                                                    </li>
                                                    <li class="ms-list-item media">
                                                        <img class="speaker-img-modal"
                                                            src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                            alt="Speaker">
                                                        <div class="media-body">
                                                            <h4>Mark Mwenda</h4>
                                                            <p>Marketing Manager, FFOAB</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="ms-panel">
                                <div class="ms-panel-header bg-dark">
                                    <div class="d-flex justify-content-start">
                                        <div>
                                            <button class="btn btn-calendar btn-block">10:30AM - 12:00PM <i
                                                    class="fa fa-calendar-alt"></i></button>
                                        </div>
                                        <div>
                                            <h1 class="text-white ml-4 mt-2">Exhibitor Pitch Session</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="ms-panel-header bg-darker">
                                    <button class="btn btn-chat btn-pill btn-sm"><i class="fa fa-play mr-1"></i> watch
                                        session</button>
                                </div>
                                <div class="ms-panel-body">
                                    <div class="about-agenda">
                                        <p>Lorem ipsum dolor sit, amet consectetur totam quisquam eligendi dicta consectetur
                                            libero eaque eius quaerat quibusdam laboriosam recusandae exercitationem iure.
                                            Velit a autem laudantium fugiat.</p>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between m-2">
                                        <div>
                                            <h2 class="text-theme">SPEAKERS</h2>
                                        </div>
                                        <div>
                                            <h4 data-toggle="modal" data-target="#viewAllSpeakers"
                                                class="text-theme view-all">VIEW ALL <i class="fa fa-chevron-right"></i>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start">
                                        <div>
                                            <img class="speaker-img"
                                                src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                alt="Speaker">
                                        </div>
                                        <div>
                                            <img class="speaker-img"
                                                src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                alt="Speaker">
                                        </div>
                                        <div>
                                            <img class="speaker-img"
                                                src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                alt="Speaker">
                                        </div>
                                        <div>
                                            <img class="speaker-img"
                                                src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                alt="Speaker">
                                        </div>
                                        <div>
                                            <img class="speaker-img"
                                                src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                alt="Speaker">
                                        </div>
                                    </div>
                                </div>

                                {{-- modal view all --}}
                                <div class="modal fade" id="viewAllSpeakers" tabindex="-1" role="dialog"
                                    aria-labelledby="viewAllSpeakers">
                                    <div class="modal-dialog modal-dialog-centered modal-max" role="document">
                                        <div class="modal-content">

                                            <div class="modal-body">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h1>Speakers</h1>
                                                <ul class="ms-list">
                                                    <li class="ms-list-item media">
                                                        <img class="speaker-img-modal"
                                                            src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                            alt="Speaker">
                                                        <div class="media-body">
                                                            <h4>Mark Mwenda</h4>
                                                            <p>Marketing Manager, FFOAB</p>
                                                        </div>
                                                    </li>
                                                    <li class="ms-list-item media">
                                                        <img class="speaker-img-modal"
                                                            src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                            alt="Speaker">
                                                        <div class="media-body">
                                                            <h4>Mark Mwenda</h4>
                                                            <p>Marketing Manager, FFOAB</p>
                                                        </div>
                                                    </li>
                                                    <li class="ms-list-item media">
                                                        <img class="speaker-img-modal"
                                                            src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                            alt="Speaker">
                                                        <div class="media-body">
                                                            <h4>Mark Mwenda</h4>
                                                            <p>Marketing Manager, FFOAB</p>
                                                        </div>
                                                    </li>
                                                    <li class="ms-list-item media">
                                                        <img class="speaker-img-modal"
                                                            src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                            alt="Speaker">
                                                        <div class="media-body">
                                                            <h4>Mark Mwenda</h4>
                                                            <p>Marketing Manager, FFOAB</p>
                                                        </div>
                                                    </li>
                                                    <li class="ms-list-item media">
                                                        <img class="speaker-img-modal"
                                                            src="https://cdn.hubilo.com/speaker/1402283/350/4810660743_1625916785889.jpeg"
                                                            alt="Speaker">
                                                        <div class="media-body">
                                                            <h4>Mark Mwenda</h4>
                                                            <p>Marketing Manager, FFOAB</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
