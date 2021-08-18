@extends('layouts.main')

@section('title')
    Meeting
@endsection
@section('css')
<style>
    .fa-exclamation-triangle {
        font-size: 70px;
        color: #17a2b8;
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
                                    src="{{ asset('sliders/1.png')}}"
                                    alt="First slide">
                            </div>
                            <div class="carousel-item ">
                                <img class="d-block w-100"
                                    src="{{ asset('sliders/2.png')}}"
                                    alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                    src="{{ asset('sliders/3.png')}}"
                                    alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                    src="{{ asset('sliders/4.png')}}"
                                    alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                    src="{{ asset('sliders/5.png')}}"
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
                        <img class="pattern" src="{{ asset('img/pattern.png')}}" alt="Pattern" >
                        <li role="presentation">
                            <a href="{{ route('admin.home')}}">
                                <i class="flaticon-browser"></i> <br>
                                Reception
                            </a>
                        </li>
                        <li role="presentation"><a href="{{ route('admin.view.agenda')}}"> <i
                                    class="flaticon-internet"></i> <br>Agenda </a></li>
                        <li role="presentation"><a href="{{ route('admin.view.event-feed')}}"> <i
                                    class="flaticon-chat"></i> <br>Event Feed </a></li>
                        <li role="presentation"><a href="{{ route('admin.view.speaker')}}"> <i
                                    class="flaticon-user"></i> <br>Speakers </a></li>
                        <li role="presentation"><a href="{{ route('admin.companies.index')}}"> <i
                                    class="flaticon-user"></i> <br>Companies </a></li>
                        <li role="presentation"><a href="{{ route('admin.view.attendee') }}"> <i
                                    class="flaticon-user"></i> <br>Attendees </a></li>
                        <li role="presentation"><a href="{{ route('admin.view.meeting') }}"> <i class="flaticon-layers"></i>
                                <br>Meetings </a></li>
                        <li role="presentation"><a class="active" href="{{ route('admin.view.newsroom') }}"> <i
                            class="flaticon-reader"></i><br>Newsroom</a></li>
                    </ul>
                </div>
            </div>

            <div class="tab-content">

                <div role="tabpanel" class="tab-pane active show fade in" id="tab23">

                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <div class="ms-panel">
                                <div class="ms-panel-body text-center">
                                    <i class="fa fa-exclamation-triangle mb-3"></i>
                                    <h2 class="text-info">Coming Soon!!</h2>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
