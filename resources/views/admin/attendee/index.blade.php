@extends('layouts.main')

@section('title')
    Attendees
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

                <div role="tabpanel" class="tab-pane active show fade in" id="tab23">

                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            @can('user_create')
                                <div style="margin-bottom: 10px;" class="row">
                                    <div class="col-lg-12">
                                        {{-- <a class="btn btn-success" href="{{ route('admin.users.create') }}">
                                            {{ trans('global.add') }} {{ trans('cruds.attendee.title_singular') }}
                                        </a> --}}
                                        <button class="btn btn-success" data-toggle="modal" data-target="#addUserModal">
                                            {{ trans('global.add') }} {{ trans('cruds.attendee.title_singular') }}
                                        </button>
                                        @include('modal.add-users')

                                        <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                                            {{ trans('global.app_csvImport') }}
                                        </button>
                                        @include('csvImport.modal', ['model' => 'User', 'route' =>
                                        'admin.users.parseCsvImport'])
                                    </div>
                                </div>
                            @endcan

                        </div>

                        @foreach ($users as $key => $user)
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="card mb-3">
                                    <div class="row g-0 no-gutters">
                                        <div class="col-md-4">
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
                                                <h4 class="card-title">{{ $user->name ?? '' }}
                                                    {{-- @can('user_edit')
                                                        @foreach ($user->roles as $key => $item)
                                                            <span
                                                                class="badge badge-warning text-capitalize">{{ $item->title }}</span>
                                                        @endforeach
                                                    @endcan --}}
                                                </h4>
                                                <p class="card-text">
                                                    {{ Str::limit($user->designation ?? '', 20, '...') }}</p>
                                                <p class="card-text"><small
                                                        class="text-muted">{{ Str::limit($user->organisation ?? '', 20, '...') }}</small>
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                    {{-- @if (Auth::user()->id == $user->id)
                                        <div class="d-flex justify-content-around m-4">
                                        </div>
                                    @else --}}
                                    <div class="d-flex justify-content-around mb-2">
                                        <div>
                                            <button class="btn btn-chat btn-pill btn-sm">Meet</button>
                                        </div>
                                        <div>
                                            <button class="btn btn-chat btn-pill btn-sm">chat</button>
                                        </div>
                                    </div>
                                    {{-- @endif --}}

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
                                                    <h1 class="text-white text-title">{{ $user->name ?? '' }}</h1>
                                                    <h3 class="text-gray"><small>{{ $user->organisation ?? '' }}</small>
                                                    </h3> <br>
                                                    <h4 class="text-white">
                                                        {{ $user->designation ?? '' }}
                                                    </h4>
                                                    <div class="d-flex justify-content-around mb-2 mt-4">
                                                        <div>
                                                            <button class="btn btn-chat btn-pill btn-sm">Meet</button>
                                                        </div>
                                                        <div>
                                                            <button class="btn btn-chat btn-pill btn-sm">chat</button>
                                                        </div>
                                                    </div>
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
                                            <div class="similar-profiles p-3">
                                                <h5 class="text-white text-capitalize">SIMILAR PROFILES</h5>
                                                <div class="d-flex justify-content-start">
                                                    <div>
                                                        <img src="https://cdn.hubilo.com/profile/5594995783_1624079343023.jpeg"
                                                            alt="">
                                                    </div>
                                                    <div>
                                                        <img src="https://cdn.hubilo.com/profile/5594995783_1624079343023.jpeg"
                                                            alt="">
                                                    </div>
                                                    <div>
                                                        <img src="https://cdn.hubilo.com/profile/5594995783_1624079343023.jpeg"
                                                            alt="">
                                                    </div>
                                                    <div>
                                                        <img src="https://cdn.hubilo.com/profile/5594995783_1624079343023.jpeg"
                                                            alt="">
                                                    </div>
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
@section('scripts')
    <script>
        Dropzone.options.avatarDropzone = {
            url: '{{ route('admin.users.storeMedia') }}',
            maxFilesize: 5, // MB
            acceptedFiles: '.jpeg,.jpg,.png,.gif',
            maxFiles: 1,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 5,
                width: 4096,
                height: 4096
            },
            success: function(file, response) {
                $('form').find('input[name="avatar"]').remove()
                $('form').append('<input type="hidden" name="avatar" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="avatar"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (isset($user) && $user->avatar)
                    var file = {!! json_encode($user->avatar) !!}
                    this.options.addedfile.call(this, file)
                    this.options.thumbnail.call(this, file, file.preview)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="avatar" value="' + file.file_name + '">')
                    this.options.maxFiles = this.options.maxFiles - 1
                @endif
            },
            error: function(file, response) {
                if ($.type(response) === 'string') {
                    var message = response //dropzone sends it's own error messages in string
                } else {
                    var message = response.errors.file
                }
                file.previewElement.classList.add('dz-error')
                _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
                _results = []
                for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                    node = _ref[_i]
                    _results.push(node.textContent = message)
                }

                return _results
            }
        }
    </script>
@endsection
