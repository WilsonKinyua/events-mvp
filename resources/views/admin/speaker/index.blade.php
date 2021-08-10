@extends('layouts.main')

@section('title')
    Speaker
@endsection
@section('css')
    <style>
        .ms-panel-body {
            padding: 0
        }

        .modal-body {
            padding: 1rem !important;
        }

        .modalUserDetails .modal-body {
            padding: 0rem !important;
        }

        .fa-facebook {
            color: #3b5997;
        }

        .fa-twitter {
            color: #3da4f1;
        }

        .fa-linkedin {
            color: #0177b5;
        }

        .fa-instagram {
            color: #9a2ebc;
        }

        .fa-google-plus-g {
            color: #dc4e41;
        }

        .user-details {
            height: 150px;
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
                        <li role="presentation"><a href="{{ route('admin.view.agenda') }}"> <i
                                    class="flaticon-internet"></i> <br>Agenda </a></li>
                        <li role="presentation"><a href="{{ route('admin.view.event-feed') }}"> <i
                                    class="flaticon-chat"></i> <br>Event Feed </a></li>
                        <li role="presentation"><a class="active" href="{{ route('admin.view.speaker') }}"> <i
                                    class="flaticon-user"></i> <br>Speakers </a></li>
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
                        <div class="col-xl-12 col-md-12">
                            @can('user_create')
                                <div style="margin-bottom: 10px;" class="row">
                                    <div class="col-lg-12">
                                        <button class="btn btn-success" data-toggle="modal" data-target="#addUserModal">
                                            Add Speaker
                                        </button>
                                        @include('modal.add-users')
                                    </div>
                                </div>
                            @endcan

                        </div>

                        @foreach ($users as $key => $user)
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="card mb-3 ">
                                    <div class="row g-0 no-gutters">
                                        <div class="col-md-4 mb-2 mt-2">
                                            @if ($user->avatar)
                                                <img src="{{ $user->avatar->getUrl() }}"
                                                    class="img-fluid profile-img rounded-start" alt="Profile picture">
                                            @else
                                                <img src="https://st.depositphotos.com/1779253/5140/v/600/depositphotos_51405259-stock-illustration-male-avatar-profile-picture-use.jpg"
                                                    class="img-fluid profile-img rounded-start" alt="...">
                                            @endif
                                        </div>
                                        <div class="col-md-8 user-details" data-toggle="modal"
                                            data-target="#userDetailsModal{{ $user->id }}">
                                            <div class="card-body">
                                                <h4 class="card-title">{{ $user->name ?? '' }}</h4>
                                                <p class="card-text">
                                                    {{ Str::limit($user->designation ?? '', 20, '...') }}</p>
                                                <p class="card-text"><small
                                                        class="text-muted">{{ Str::limit($user->organisation ?? '', 30, '...') }}</small>
                                                </p>
                                                <ul class="speaker-social-media text-center">
                                                    <li class="speaker-social">
                                                        <a target="_blank" href="{{ $user->facebook }}"><i
                                                                class="fab fa-facebook"></i></a>
                                                    </li>
                                                    <li class="speaker-social">
                                                        <a target="_blank" href="{{ $user->twitter }}"><i
                                                                class="fab fa-twitter"></i></a>
                                                    </li>
                                                    <li class="speaker-social">
                                                        <a target="_blank" href="{{ $user->linkedin }}"><i
                                                                class="fab fa-linkedin-in"></i></a>
                                                    </li>
                                                    <li class="speaker-social">
                                                        <a target="_blank" href="{{ $user->instagram }}"><i
                                                                class="fab fa-instagram"></i></a>
                                                    </li>
                                                    <li class="speaker-social">
                                                        <a href="malto:{{ $user->email }}"><i
                                                                class="fab fa-google-plus-g"></i></a>
                                                    </li>
                                                </ul>
                                                {{-- @can('user_edit')
                                                    @foreach ($user->roles as $key => $item)
                                                        <span
                                                            class="badge badge-warning text-capitalize">{{ $item->title }}</span>
                                                    @endforeach
                                                @endcan --}}
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            {{-- single user details modal --}}
                            <div class="modal modalUserDetails fade events" id="userDetailsModal{{ $user->id }}"
                                tabindex="-1" role="dialog" aria-labelledby="userDetailsModal{{ $user->id }}">
                                <div class="modal-dialog modal-lg modal-min" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body profile-main">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <div class="d-flex justify-content-start profile-start p-4">
                                                <div class="mr-3">
                                                    @if ($user->avatar)
                                                        <img src="{{ $user->avatar->getUrl() }}"
                                                            class="img-fluid rounded-start profile-img-modal"
                                                            alt="Profile picture">
                                                    @else
                                                        <img src="https://st.depositphotos.com/1779253/5140/v/600/depositphotos_51405259-stock-illustration-male-avatar-profile-picture-use.jpg"
                                                            class="img-fluid rounded-start profile-img-modal" alt="...">
                                                    @endif
                                                </div>
                                                <div class="mt-3">
                                                    @foreach ($user->roles as $key => $item)
                                                        <span
                                                            class="badge badge-warning text-capitalize">{{ $item->title }}</span>
                                                    @endforeach
                                                    <h1 class="text-white text-title">{{ $user->name ?? '' }}</h1>
                                                    <h3 class="text-gray"><small>{{ $user->organisation ?? '' }}</small>
                                                    </h3> <br>
                                                    <h4 class="text-white">
                                                        {{ $user->designation ?? '' }}
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="profile-about p-3 mb-2">
                                                <h2>About</h2>
                                                <p>{!! $user->about ?? '' !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
