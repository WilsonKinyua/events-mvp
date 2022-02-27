@extends('layouts.main')

@section('title')
    Delegates
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

            {{-- carousel panel --}}
            @include('partials.sliders')

            <div class="tab-content">

                <div role="tabpanel" class="tab-pane active show fade in" id="tab23">

                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            @can('user_create')
                                <div style="margin-bottom: 10px;" class="row">
                                    <div class="col-lg-12">
                                        <button class="btn btn-success" data-toggle="modal" data-target="#addUserModal">
                                            <i class="fa fa-plus-circle"></i> Add Delegate
                                        </button>
                                        @include('modal.add-users')
                                    </div>
                                </div>
                            @endcan
                        </div>
                        @foreach ($users as $key => $user)
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="ms-panel mb-3 ">
                                    <div class="row g-0 no-gutters">
                                        <div class="col-md-4 mb-2 mt-2">
                                            @if ($user->avatar)
                                                <img src="{{ $user->avatar->getUrl() }}"
                                                    class="img-fluid profile-img rounded-start" alt="Profile picture">
                                            @else
                                                <img src="{{ asset('img/avatar.png') }}"
                                                    class="img-fluid profile-img rounded-start" alt="...">
                                            @endif
                                        </div>
                                        <div class="col-md-8 user-details">
                                            <div class="card-body ml-2">
                                                <h4 class="card-title" data-toggle="modal"
                                                    data-target="#userDetailsModal{{ $user->id }}">
                                                    {{ $user->name ?? '' }}</h4>
                                                @if ($user->designation != null)
                                                    <p class="card-text">
                                                        {{ Str::limit($user->designation ?? '', 20, '...') }}</p>
                                                @endif
                                                @if ($user->organisation != null)
                                                    <p class="card-text"><small
                                                            class="text-muted">{{ Str::limit($user->organisation ?? '', 20, '...') }}</small>
                                                    </p>
                                                @endif
                                                <ul class="speaker-social-media">
                                                    @if ($user->twitter != null)
                                                        <li class="speaker-social">
                                                            <a href="{{ $user->twitter }}" target="_blank">
                                                                <i class="fa fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                    @endif
                                                    @if ($user->facebook != null)
                                                        <li class="speaker-social">
                                                            <a href="{{ $user->facebook }}" target="_blank">
                                                                <i class="fa fa-facebook"></i>
                                                            </a>
                                                        </li>
                                                    @endif
                                                </ul>
                                                @can('user_edit')
                                                    @foreach ($user->roles as $key => $item)
                                                        <span
                                                            class="badge badge-warning text-capitalize">{{ $item->title }}</span>
                                                    @endforeach
                                                @endcan
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
                                                        <img src="{{ asset('img/avatar.png') }}"
                                                            class="img-fluid rounded-start profile-img-modal" alt="...">
                                                    @endif
                                                </div>
                                                <div class="mt-3">
                                                    @foreach ($user->roles as $key => $item)
                                                        <span
                                                            class="badge badge-warning text-capitalize">{{ $item->title }}</span>
                                                    @endforeach
                                                    <h1 class="text-white text-title">{{ $user->name ?? '' }}</h1>
                                                    @if ($user->organisation != null)
                                                        <h3 class="text-gray">
                                                            <small>{{ $user->organisation ?? '' }}</small>
                                                        </h3>
                                                    @endif
                                                    <br>
                                                    @if ($user->designation != null)
                                                        <h4 class="text-white">
                                                            {{ $user->designation ?? '' }}
                                                        </h4>
                                                    @endif

                                                </div>
                                            </div>
                                            @if (count($user->interests) > 0)
                                                <div class="interests p-3">
                                                    <hr>
                                                    <h2>Interests</h2>
                                                    @foreach ($user->interests as $key => $item)
                                                        <button type="button"
                                                            class="btn btn-pill btn-sm btn-gradient-light">{{ $item->name }}</button>
                                                    @endforeach

                                                </div>
                                            @endif
                                            @if ($user->about != null)
                                                <div class="profile-about p-3 mb-2">
                                                    <h2>About</h2>
                                                    <p>{!! $user->about ?? '' !!}</p>
                                                </div>
                                            @endif
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
