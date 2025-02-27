@extends('layouts.main')

@section('title')
    Welcome Back
@endsection

@section('content')
    <div class="row">
        <!-- carousel -->
        <div class="col-md-12">
            {{-- carousel panel --}}
            @include('partials.sliders')

            <div class="tab-content">

                <div role="tabpanel" class="tab-pane active show fade in" id="tab1">
                    <div class="row">

                        <div class="col-xl-8 col-md-12">
                            <div class="ms-panel">
                                <div class="ms-panel-body">
                                    <h2 class="section-title">About
                                        @can('event_setting_create')
                                            <a class="edit-button" title="Edit About" data-toggle="modal"
                                                data-target="#modal-10"> <i class="fa fa-edit"></i></a>
                                        </h2>
                                        {{-- events settings modal(insert) --}}
                                        <div class="modal fade events" id="modal-10" tabindex="-1" role="dialog"
                                            aria-labelledby="modal-10">
                                            <div class="modal-dialog modal-dialog-centered modal-lg modal-min" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <form method="POST"
                                                            action="{{ route('admin.event-settings.update', [$eventSetting->id]) }}"
                                                            enctype="multipart/form-data">
                                                            @method('PUT')
                                                            @csrf
                                                            <h2>Create Event Details</h2>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="event_start">Start Date<span
                                                                                class="text-danger">*</span></label>
                                                                        <input id="date"
                                                                            class="form-control {{ $errors->has('event_start') ? 'is-invalid' : '' }}"
                                                                            type="date" name="event_start" id="event_start"
                                                                            value="{{ old('event_start', $eventSetting->event_start) }}">
                                                                        @if ($errors->has('event_start'))
                                                                            <div class="invalid-event_start">
                                                                                {{ $errors->first('event_start') }}
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="event_end">End Date<span
                                                                                class="text-danger">*</span></label>
                                                                        <input id="date"
                                                                            class="form-control {{ $errors->has('event_end') ? 'is-invalid' : '' }}"
                                                                            type="date" name="event_end" id="date"
                                                                            value="{{ old('event_date', $eventSetting->event_end) }}">
                                                                        @if ($errors->has('event_end'))
                                                                            <div class="invalid-event_end">
                                                                                {{ $errors->first('event_end') }}
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group mt-4">
                                                                <label class="required"
                                                                    for="about">{{ trans('cruds.eventSetting.fields.about') }}</label>
                                                                <textarea
                                                                    class="form-control ckeditor {{ $errors->has('about') ? 'is-invalid' : '' }}"
                                                                    name="about" id="about"
                                                                    required>{{ old('about', $eventSetting->about) }}</textarea>
                                                                @if ($errors->has('about'))
                                                                    <div class="invalid-feedback">
                                                                        {{ $errors->first('about') }}
                                                                    </div>
                                                                @endif
                                                                <span
                                                                    class="help-block">{{ trans('cruds.eventSetting.fields.about_helper') }}</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="required"
                                                                    for="event_logo">{{ trans('cruds.eventSetting.fields.event_logo') }}</label>
                                                                <div class="needsclick dropzone {{ $errors->has('event_logo') ? 'is-invalid' : '' }}"
                                                                    id="event_logo-dropzone">
                                                                </div>
                                                                @if ($errors->has('event_logo'))
                                                                    <div class="invalid-feedback">
                                                                        {{ $errors->first('event_logo') }}
                                                                    </div>
                                                                @endif
                                                                <span
                                                                    class="help-block">{{ trans('cruds.eventSetting.fields.event_logo_helper') }}</span>
                                                            </div>
                                                            <button type="submit"
                                                                class="btn btn-primary shadow-none">Save</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endcan
                                    <div class="row">
                                        <div class="col-xl-3 col-md-3">
                                            <div class="company-logo">
                                                @if ($eventSetting->event_logo)
                                                    <img src="{{ $eventSetting->event_logo->getUrl() }}"
                                                        class="img-fluid rounded-start" alt="Company Logo">
                                                @else
                                                    <img src="{{ asset('img/logo-placeholder.jpg') }}"
                                                        class="img-fluid rounded-start" alt="Company Logo">
                                                @endif
                                            </div>
                                            <h5 class="text-bold text-center mt-3">
                                                @if ($eventSetting->event_start === null)
                                                    Event Start Date
                                                @else
                                                    {!! $eventSetting->event_start->toFormattedDateString() !!}
                                                    @endif - @if ($eventSetting->event_end === null)
                                                        Event
                                                        End Date
                                                    @else
                                                        {!! $eventSetting->event_end->toFormattedDateString() !!}
                                                    @endif
                                            </h5>
                                        </div>
                                        <div class="col-xl-8 col-md-12">

                                            @if ($eventSetting->about === '')
                                                <p>
                                                    About the event here!!
                                                </p>
                                            @else
                                                {!! $eventSetting->about !!}
                                            @endif
                                        </div>
                                    </div>

                                    <div class="ms-profile-skills">
                                        <h2 class="section-title">Social Media
                                            @can('event_setting_create')
                                                <a class="edit-button-social m-3" title="Edit About" data-toggle="modal"
                                                    data-target="#socialmedialinks"> <i class="fa fa-edit"></i></a>
                                            @endcan
                                        </h2>
                                        @can('event_setting_create')
                                            {{-- social media links edit --}}
                                            <div class="modal fade events" id="socialmedialinks" tabindex="-1" role="dialog"
                                                aria-labelledby="socialmedialinks">
                                                <div class="modal-dialog modal-min" role="document">
                                                    <div class="modal-content">

                                                        <div class="modal-body">
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">&times;</span></button>
                                                            <form method="POST"
                                                                action="{{ route('admin.event-settings.update', [$eventSetting->id]) }}"
                                                                enctype="multipart/form-data">
                                                                @method('PUT')
                                                                @csrf
                                                                <div class="form-group">
                                                                    <label
                                                                        for="facebook">{{ trans('cruds.eventSetting.fields.facebook') }}</label>
                                                                    <input
                                                                        class="form-control {{ $errors->has('facebook') ? 'is-invalid' : '' }}"
                                                                        type="url" name="facebook" id="facebook"
                                                                        value="{{ old('facebook', $eventSetting->facebook) }}"
                                                                        placeholder="https://facebook.com/Wezasmp">
                                                                    @if ($errors->has('facebook'))
                                                                        <div class="invalid-feedback">
                                                                            {{ $errors->first('facebook') }}
                                                                        </div>
                                                                    @endif
                                                                    <span
                                                                        class="help-block">{{ trans('cruds.eventSetting.fields.facebook_helper') }}</span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label
                                                                        for="twitter">{{ trans('cruds.eventSetting.fields.twitter') }}</label>
                                                                    <input
                                                                        class="form-control {{ $errors->has('twitter') ? 'is-invalid' : '' }}"
                                                                        type="url" name="twitter" id="twitter"
                                                                        value="{{ old('twitter', $eventSetting->twitter) }}"
                                                                        placeholder="https://twitter.com/Wezasmp">
                                                                    @if ($errors->has('twitter'))
                                                                        <div class="invalid-feedback">
                                                                            {{ $errors->first('twitter') }}
                                                                        </div>
                                                                    @endif
                                                                    <span
                                                                        class="help-block">{{ trans('cruds.eventSetting.fields.twitter_helper') }}</span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label
                                                                        for="linkedin">{{ trans('cruds.eventSetting.fields.linkedin') }}</label>
                                                                    <input
                                                                        class="form-control {{ $errors->has('linkedin') ? 'is-invalid' : '' }}"
                                                                        type="url" name="linkedin" id="linkedin"
                                                                        value="{{ old('linkedin', $eventSetting->linkedin) }}"
                                                                        placeholder="https://linkedin.com/in/Wezasmp">
                                                                    @if ($errors->has('linkedin'))
                                                                        <div class="invalid-feedback">
                                                                            {{ $errors->first('linkedin') }}
                                                                        </div>
                                                                    @endif
                                                                    <span
                                                                        class="help-block">{{ trans('cruds.eventSetting.fields.linkedin_helper') }}</span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label
                                                                        for="instagram">{{ trans('cruds.eventSetting.fields.instagram') }}</label>
                                                                    <input
                                                                        class="form-control {{ $errors->has('instagram') ? 'is-invalid' : '' }}"
                                                                        type="url" name="instagram" id="instagram"
                                                                        value="{{ old('instagram', $eventSetting->instagram) }}"
                                                                        placeholder="https://instagram.com/Wezasmp">
                                                                    @if ($errors->has('instagram'))
                                                                        <div class="invalid-feedback">
                                                                            {{ $errors->first('instagram') }}
                                                                        </div>
                                                                    @endif
                                                                    <span
                                                                        class="help-block">{{ trans('cruds.eventSetting.fields.instagram_helper') }}</span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label
                                                                        for="youtube">{{ trans('cruds.eventSetting.fields.youtube') }}</label>
                                                                    <input
                                                                        class="form-control {{ $errors->has('youtube') ? 'is-invalid' : '' }}"
                                                                        type="url" name="youtube" id="youtube"
                                                                        value="{{ old('youtube', $eventSetting->youtube) }}"
                                                                        placeholder="https://youtube.com/Wezasmp">
                                                                    @if ($errors->has('youtube'))
                                                                        <div class="invalid-feedback">
                                                                            {{ $errors->first('youtube') }}
                                                                        </div>
                                                                    @endif
                                                                    <span
                                                                        class="help-block">{{ trans('cruds.eventSetting.fields.youtube_helper') }}</span>
                                                                </div>
                                                                <button type="submit"
                                                                    class="btn btn-primary float right shadow-none">Save</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endcan
                                        <ul class="ms-skill-list">
                                            @if ($eventSetting->facebook)
                                                <li class="ms-skill"><a href="{{ $eventSetting->facebook }}"><i
                                                            class="fab fa-facebook"></i></a>
                                                </li>
                                            @endif
                                            @if ($eventSetting->twitter)
                                                <li class="ms-skill"><a href="{{ $eventSetting->twitter }}"><i
                                                            class="fab fa-twitter"></i></a>
                                                </li>
                                            @endif
                                            @if ($eventSetting->instagram)
                                                <li class="ms-skill"><a href="{{ $eventSetting->instagram }}"><i
                                                            class="fab fa-instagram"></i></a>
                                                </li>
                                            @endif
                                            @if ($eventSetting->youtube)
                                                <li class="ms-skill"><a href="{{ $eventSetting->youtube }}"><i
                                                            class="fab fa-youtube"></i></a>
                                                </li>
                                            @endif
                                            @if ($eventSetting->linkedin)
                                                <li class="ms-skill"><a href="{{ $eventSetting->linkedin }}"><i
                                                            class="fab fa-linkedin"></i></a>
                                                </li>
                                            @endif

                                        </ul>

                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="col-xl-4 col-md-12">

                            <div class="ms-panel ">
                                <div class="ms-panel-body">
                                    <div class="card">
                                        <div class="card-image">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe width="560" height="315"
                                                    src="https://www.youtube.com/embed/e-tb-AvwhBs"
                                                    allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="ms-panel">
                                <div class="ms-panel-header">
                                    <h6>Post Event</h6>
                                </div>
                                <div class="ms-panel-body">
                                    <ul class="ms-activity-log">
                                        <li>
                                            <div class="ms-btn-icon btn-pill icon btn-success">
                                                <i class="flaticon-tick-inside-circle"></i>
                                            </div>
                                            <h6>Lorem ipsum dolor sit</h6>
                                            <span> <i class="material-icons">event</i>1 January, 2018</span>
                                            <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit.
                                                Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
                                        </li>
                                        <li>
                                            <div class="ms-btn-icon btn-pill icon btn-danger">
                                                <i class="flaticon-alert-1"></i>
                                            </div>
                                            <h6>Lorem ipsum dolor sit</h6>
                                            <span> <i class="material-icons">event</i>1 March, 2020</span>
                                            <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit.
                                                Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
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
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            function SimpleUploadAdapter(editor) {
                editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
                    return {
                        upload: function() {
                            return loader.file
                                .then(function(file) {
                                    return new Promise(function(resolve, reject) {
                                        // Init request
                                        var xhr = new XMLHttpRequest();
                                        xhr.open('POST',
                                            '{{ route('admin.companies.storeCKEditorImages') }}',
                                            true);
                                        xhr.setRequestHeader('x-csrf-token', window._token);
                                        xhr.setRequestHeader('Accept', 'application/json');
                                        xhr.responseType = 'json';

                                        // Init listeners
                                        var genericErrorText =
                                            `Couldn't upload file: ${ file.name }.`;
                                        xhr.addEventListener('error', function() {
                                            reject(genericErrorText)
                                        });
                                        xhr.addEventListener('abort', function() {
                                            reject()
                                        });
                                        xhr.addEventListener('load', function() {
                                            var response = xhr.response;

                                            if (!response || xhr.status !== 201) {
                                                return reject(response && response
                                                    .message ?
                                                    `${genericErrorText}\n${xhr.status} ${response.message}` :
                                                    `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`
                                                );
                                            }

                                            $('form').append(
                                                '<input type="hidden" name="ck-media[]" value="' +
                                                response.id + '">');

                                            resolve({
                                                default: response.url
                                            });
                                        });

                                        if (xhr.upload) {
                                            xhr.upload.addEventListener('progress', function(
                                                e) {
                                                if (e.lengthComputable) {
                                                    loader.uploadTotal = e.total;
                                                    loader.uploaded = e.loaded;
                                                }
                                            });
                                        }

                                        // Send request
                                        var data = new FormData();
                                        data.append('upload', file);
                                        data.append('crud_id', '{{ $company->id ?? 0 }}');
                                        xhr.send(data);
                                    });
                                })
                        }
                    };
                }
            }

            var allEditors = document.querySelectorAll('.ckeditor');
            for (var i = 0; i < allEditors.length; ++i) {
                ClassicEditor.create(
                    allEditors[i], {
                        extraPlugins: [SimpleUploadAdapter]
                    }
                );
            }
        });
    </script>

    <script>
        Dropzone.options.eventLogoDropzone = {
            url: '{{ route('admin.event-settings.storeMedia') }}',
            maxFilesize: 2, // MB
            acceptedFiles: '.jpeg,.jpg,.png,.gif',
            maxFiles: 1,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 2,
                width: 4096,
                height: 4096
            },
            success: function(file, response) {
                $('form').find('input[name="event_logo"]').remove()
                $('form').append('<input type="hidden" name="event_logo" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="event_logo"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (isset($eventSetting) && $eventSetting->event_logo)
                    var file = {!! json_encode($eventSetting->event_logo) !!}
                    this.options.addedfile.call(this, file)
                    this.options.thumbnail.call(this, file, file.preview)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="event_logo" value="' + file.file_name + '">')
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
    <script>
        var uploadedSlidersMap = {}
        Dropzone.options.slidersDropzone = {
            url: '{{ route('admin.event-settings.storeMedia') }}',
            maxFilesize: 20, // MB
            acceptedFiles: '.jpeg,.jpg,.png,.gif',
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 20,
                width: 4096,
                height: 4096
            },
            success: function(file, response) {
                $('form').append('<input type="hidden" name="sliders[]" value="' + response.name + '">')
                uploadedSlidersMap[file.name] = response.name
            },
            removedfile: function(file) {
                console.log(file)
                file.previewElement.remove()
                var name = ''
                if (typeof file.file_name !== 'undefined') {
                    name = file.file_name
                } else {
                    name = uploadedSlidersMap[file.name]
                }
                $('form').find('input[name="sliders[]"][value="' + name + '"]').remove()
            },
            init: function() {
                @if (isset($eventSetting) && $eventSetting->sliders)
                    var files = {!! json_encode($eventSetting->sliders) !!}
                    for (var i in files) {
                    var file = files[i]
                    this.options.addedfile.call(this, file)
                    this.options.thumbnail.call(this, file, file.preview)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="sliders[]" value="' + file.file_name + '">')
                    }
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
