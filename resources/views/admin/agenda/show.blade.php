@extends('layouts.main')

@section('title')
    {{-- Agenda({{ $eventSchedules->agenda_date }}) --}}
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
                                <img class="d-block w-100" src="{{ asset('sliders/1.png') }}" alt="First slide">
                            </div>
                            <div class="carousel-item ">
                                <img class="d-block w-100" src="{{ asset('sliders/2.png') }}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('sliders/3.png') }}" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('sliders/4.png') }}" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('sliders/5.png') }}" alt="Third slide">
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
                        @include('partials.center-navabar')
                    </ul>
                </div>
            </div>

            <div class="tab-content">
                <ul class="nav nav-tabs d-flex tabs-round has-gap nav-justified mb-4 event-shedule" role="tablist">
                    @if (count($event_program_dates) > 0)
                        @foreach ($event_program_dates as $dates)
                            <li role="presentation"><a class="mt-3"
                                    href="{{ route('admin.show.agenda-schedule', $dates->id) }}">{{ $dates->agenda_date->toFormattedDateString() }}</a>
                            </li>
                        @endforeach
                    @else
                        <li role="presentation"><a href="{{ route('admin.agenda') }}">No agenda dates available!!</a>
                        </li>
                    @endif
                    @can('event_schedule_access')
                        {{-- adding the shedule --}}
                        @can('event_setting_create')
                            <a class="edit-button" title="Edit Event Agenda Shedule" data-toggle="modal"
                                data-target="#eventSheduleModal"> <i class="fa fa-edit"></i></a>
                            @include('modal.agenda-shedule-modal')
                        @endcan
                    @endcan
                </ul>

                <div class="tab-content agenda-cards">

                    {{-- add agenda --}}
                    @can('event_schedule_access')
                        <button class="btn btn-info btn-sm mb-4" data-toggle="modal" data-target="#addAgendaShedule"><i
                                class="fa fa-plus"></i> Add Agenda</button>
                        @include('modal.add-agenda-shedule')
                    @endcan
                    {{-- tabs --}}
                    <div role="tabpanel" class="tab-pane active  show fade in" id="tab17">
                        <div class="row">
                            @if (count($eventSchedules) > 0)
                                @foreach ($eventSchedules as $key => $eventSchedule)
                                    <div class="col-xl-6 col-md-12">
                                        <div class="ms-panel">
                                            <div class="ms-panel-header bg-dark">
                                                <div class="d-flex justify-content-start">
                                                    <div>
                                                        <button
                                                            class="btn btn-calendar btn-block">{{ $eventSchedule->time_start ?? '' }}
                                                            - {{ $eventSchedule->time_end ?? '' }} <i
                                                                class="fa fa-calendar-alt"></i></button>
                                                    </div>
                                                    <div>
                                                        <h1 class="text-white ml-4 mt-2">
                                                            {{ $eventSchedule->topic ?? '' }}</h1>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ms-panel-header bg-darker">
                                                <button class="btn btn-chat btn-pill btn-sm"><i class="fa fa-play mr-1"></i>
                                                    watch
                                                    session</button>
                                            </div>
                                            <div class="ms-panel-body">
                                                <div class="about-agenda">
                                                    <p>{{ $eventSchedule->description ?? '' }}</p>
                                                </div>
                                                <hr>
                                                <div class="d-flex justify-content-between m-2">
                                                    <div>
                                                        <h2 class="text-theme">SPEAKERS</h2>
                                                    </div>
                                                    <div>
                                                        <h4 data-toggle="modal"
                                                            data-target="#viewAllSpeakers{{ $eventSchedule->id ?? 'default' }}"
                                                            class="text-theme view-all">VIEW ALL <i
                                                                class="fa fa-chevron-right"></i>
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-start">
                                                    @foreach ($eventSchedule->speakers as $key => $item)
                                                        <div>
                                                            @if ($item->avatar)
                                                                {{-- <img src="{{ $user->avatar->getUrl() }}"> --}}
                                                                <img class="speaker-img"
                                                                    src="{{ $item->avatar->getUrl() }}" alt="Speaker">

                                                            @endif

                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>

                                            {{-- modal view all --}}
                                            <div class="modal fade"
                                                id="viewAllSpeakers{{ $eventSchedule->id ?? 'default' }}" tabindex="-1"
                                                role="dialog" aria-labelledby="viewAllSpeakers">
                                                <div class="modal-dialog modal-dialog-centered modal-max" role="document">
                                                    <div class="modal-content">

                                                        <div class="modal-body">
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">&times;</span></button>
                                                            <h1>Speakers</h1>
                                                            <ul class="ms-list">
                                                                @foreach ($eventSchedule->speakers as $key => $item)
                                                                    <li class="ms-list-item media">
                                                                        @if ($item->avatar)
                                                                            <img class="speaker-img-modal"
                                                                                src="{{ $item->avatar->getUrl() }}"
                                                                                alt="Speaker">
                                                                        @endif
                                                                        <div class="media-body">
                                                                            <h4>{{ $item->name ?? '' }}</h4>
                                                                            <p>{{ $item->designation ?? '' }} </p>
                                                                        </div>
                                                                    </li>
                                                                @endforeach

                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="col-xl-12 col-md-12">
                                    <div class="ms-panel">
                                        <div class="ms-panel-body text-center">
                                            <h2 class="text-danger text-uppercase">No agenda for the selected date!</h2>
                                        </div>
                                    </div>
                                </div>
                            @endif


                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
