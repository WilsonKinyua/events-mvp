@extends('layouts.main')

@section('title')
    Speaker
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
                        <li role="presentation"><a href="{{ route('admin.view.agenda') }}"> <i
                                    class="flaticon-internet"></i> <br>Agenda </a></li>
                        <li role="presentation"><a class="active" href="{{ route('admin.view.event-feed') }}"> <i
                                    class="flaticon-chat"></i> <br>Event Feed </a></li>
                        <li role="presentation"><a href="{{ route('admin.view.speaker') }}"> <i class="flaticon-user"></i>
                                <br>Speakers </a></li>
                        <li role="presentation"><a href="{{ route('admin.companies.index') }}"> <i
                                    class="flaticon-user"></i> <br>Companies </a></li>
                        <li role="presentation"><a href="{{ route('admin.view.attendee') }}"> <i
                                    class="flaticon-user"></i> <br>Attendes </a></li>
                        <li role="presentation"><a href="{{ route('admin.view.meeting') }}"> <i
                                    class="flaticon-layers"></i> <br>Meetings </a></li>
                    </ul>
                </div>
            </div>

            <div class="tab-content">

                <div role="tabpanel" class="tab-pane active show fade in" id="tab23">

                    <div class="row">
                        <div class="col-xl-9 col-md-12">
                            <div class="row">
                                <div class="col-xl-12 col-md-12">
                                    <div class="ms-panel">
                                        <div class="ms-panel-body">
                                            <div class="row no-gutters">
                                                <div class="col-xl-1 col-md-12">
                                                    <img src="../../assets/img/people/people-12.jpg"
                                                        class="ms-img-round ms-img-small" alt="This is another feature">
                                                </div>
                                                <div class="col-xl-11 col-md-12">
                                                    <p>Have something on your mind? Share it with the community</p>
                                                    <form>
                                                        <div class="mb-1 mt-4">
                                                            <textarea name="post" id="post" cols="30" rows="10"
                                                                class="ckeditor form-control"
                                                                placeholder="write something......."></textarea>
                                                        </div>
                                                        <button
                                                            class="btn btn-chat btn-pill btn-sm float-right">publish</button>
                                                    </form>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-12">
                                    <div class="ms-panel ms-panel-fh">
                                        <div class="ms-panel-body p-0">
                                            <ul class="ms-list ms-feed ms-twitter-feed ms-recent-support-tickets">
                                                <li class="ms-list-item">
                                                    <a href="#" class="media clearfix">
                                                        <img src="../../assets/img/people/people-12.jpg"
                                                            class="ms-img-round ms-img-small" alt="This is another feature">
                                                        <div class="media-body">
                                                            <div class="d-flex justify-content-between">
                                                                <h4 class="ms-feed-user mb-0">Lorem ipsum dolor</h4>
                                                                <span class="badge badge-success"> Open </span>
                                                            </div>
                                                            <span class="my-2 d-block"> <i
                                                                    class="material-icons">date_range</i> February 24,
                                                                2020</span>
                                                            <p class="d-block"> Lorem ipsum dolor sit amet, consectetur
                                                                adipiscing elit. Nulla luctus lectus a facilisis bibendum.
                                                                Duis quis convallis sapien ... </p>
                                                            <div class="d-flex justify-content-between align-items-end">
                                                                <div class="ms-feed-controls">
                                                                    <span>
                                                                        <i class="fa fa-comments"></i>16</span>
                                                                    <span>
                                                                        <i class="fa fa-heart"></i> 3
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="ms-list-item">
                                                    <a href="#" class="media clearfix">
                                                        <img src="../../assets/img/people/people-10.jpg"
                                                            class="ms-img-round ms-img-small" alt="This is another feature">
                                                        <div class="media-body">
                                                            <div class="d-flex justify-content-between">
                                                                <h4 class="ms-feed-user mb-0">Lorem ipsum dolor</h4>
                                                                <span class="badge badge-success"> Open </span>
                                                            </div>
                                                            <span class="my-2 d-block"> <i
                                                                    class="material-icons">date_range</i> February 24,
                                                                2020</span>
                                                            <p class="d-block"> Lorem ipsum dolor sit amet, consectetur
                                                                adipiscing elit. Nulla luctus lectus a facilisis bibendum.
                                                                Duis quis convallis sapien ... </p>
                                                            <div class="d-flex justify-content-between align-items-end">
                                                                <div class="ms-feed-controls">
                                                                    <span>
                                                                        <i class="material-icons">chat</i> 11
                                                                    </span>
                                                                    <span>
                                                                        <i class="material-icons">attachment</i> 1
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="ms-list-item">
                                                    <a href="#" class="media clearfix">
                                                        <img src="../../assets/img/people/people-11.jpg"
                                                            class="ms-img-round ms-img-small" alt="This is another feature">
                                                        <div class="media-body">
                                                            <div class="d-flex justify-content-between">
                                                                <h4 class="ms-feed-user mb-0">Lorem ipsum dolor</h4>
                                                                <span class="badge badge-danger"> Closed </span>
                                                            </div>
                                                            <span class="my-2 d-block"> <i
                                                                    class="material-icons">date_range</i> February 24,
                                                                2020</span>
                                                            <p class="d-block"> Lorem ipsum dolor sit amet, consectetur
                                                                adipiscing elit. Nulla luctus lectus a facilisis bibendum.
                                                                Duis quis convallis sapien ... </p>
                                                            <div class="d-flex justify-content-between align-items-end">
                                                                <div class="ms-feed-controls">
                                                                    <span>
                                                                        <i class="material-icons">chat</i> 21
                                                                    </span>
                                                                    <span>
                                                                        <i class="material-icons">attachment</i> 5
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-xl-3 col-md-12">
                            <div class="ms-panel">
                                <div class="ms-panel-body text-center">
                                    <h2 class="text-danger">Coming Soon event feed!!</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
