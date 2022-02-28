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
                        @can('delegate_access')
                            <div class="col-md-12">
                                <div class="ms-panel">
                                    <div class="ms-panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Gender</th>
                                                        <th scope="col">Organisation</th>
                                                        <th scope="col">Designation</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Created At</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if (count($users) > 0)
                                                        @foreach ($users as $key => $user)
                                                            <tr>
                                                                <td class="ms-table-f-w">
                                                                    @if ($user->avatar)
                                                                        <img src="{{ $user->avatar->getUrl() }}"
                                                                            alt="Profile picture">
                                                                    @else
                                                                        <img src="{{ asset('img/avatar.png') }}" alt="...">
                                                                    @endif
                                                                    {{ $user->name ?? '' }}
                                                                </td>
                                                                <td>
                                                                    <a class="text-primary"
                                                                        href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        class="badge badge-info">{{ $user->gender ?? '' }}</span>
                                                                </td>
                                                                <td class="text-capitalize">
                                                                    {{ $user->organisation ?? '' }}
                                                                </td>
                                                                <td class="text-capitalize">
                                                                    {{ $user->designation ?? '' }}
                                                                </td>
                                                                <td>
                                                                    @if ($user->token === null)
                                                                        <span class="badge badge-info">
                                                                            Active
                                                                        </span>
                                                                    @else
                                                                        <span class="badge badge-warning">
                                                                            Inactive
                                                                        </span>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    {{ $user->created_at->diffForHumans() ?? '' }}
                                                                </td>
                                                                <td>
                                                                    @can('delegate_show')
                                                                        <a data-toggle="modal"
                                                                            data-target="#userDetailsModal{{ $user->id }}"
                                                                            class="text-info d-inline-block" data-toggle="tooltip"
                                                                            data-placement="top" title="View">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    @endcan
                                                                    {{-- @can('delegate_edit')
                                                                        <a href="" class="text-warning d-inline-block"
                                                                            data-toggle="tooltip" data-placement="top" title="Edit">
                                                                            <i class="fa fa-edit"></i>
                                                                        </a>
                                                                    @endcan --}}
                                                                    @can('delegate_delete')
                                                                        <a href="{{ route('admin.delete.delegate', $user->id) }}"
                                                                            class="text-danger d-inline-block" data-toggle="tooltip"
                                                                            data-placement="top" title="Delete">
                                                                            <i class="fa fa-trash"></i>
                                                                        </a>
                                                                    @endcan
                                                                </td>
                                                            </tr>
                                                            {{-- modal --}}
                                                            <div class="modal modalUserDetails fade events"
                                                                id="userDetailsModal{{ $user->id }}" tabindex="-1"
                                                                role="dialog"
                                                                aria-labelledby="userDetailsModal{{ $user->id }}">
                                                                <div class="modal-dialog modal-lg modal-min" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body profile-main">
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close"><span
                                                                                    aria-hidden="true">&times;</span></button>
                                                                            <div
                                                                                class="d-flex justify-content-start profile-start p-4">
                                                                                <div class="mr-3">
                                                                                    @if ($user->avatar)
                                                                                        <img src="{{ $user->avatar->getUrl() }}"
                                                                                            class="img-fluid rounded-start profile-img-modal"
                                                                                            alt="Profile picture">
                                                                                    @else
                                                                                        <img src="{{ asset('img/avatar.png') }}"
                                                                                            class="img-fluid rounded-start profile-img-modal"
                                                                                            alt="...">
                                                                                    @endif
                                                                                </div>
                                                                                <div class="mt-3">
                                                                                    @foreach ($user->roles as $key => $item)
                                                                                        <span
                                                                                            class="badge badge-warning text-capitalize">{{ $item->title }}</span>
                                                                                    @endforeach
                                                                                    <h1 class="text-white text-title">
                                                                                        {{ $user->name ?? '' }}</h1>
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
                                                    @else
                                                        <tr>
                                                            <td colspan="8" class="text-center">No Delegates</td>
                                                        </tr>
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endcan

                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
