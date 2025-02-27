@extends('layouts.main')

@section('title')
    Companies
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
                        {{-- add company --}}
                        <div class="col-xl-12 col-md-12">
                            <div class="add-company">
                                @can('company_access')
                                    @can('company_create')
                                        <button class="btn btn-info btn-sm mb-4" data-toggle="modal"
                                            data-target="#addCompanyModal"><i class="fa fa-plus"></i> Add Partners</button>
                                        {{-- <button class="btn btn-warning btn-sm mb-4" data-toggle="modal"
                                                data-target="#csvImportModal">
                                                <i class="fa fa-copy"></i> {{ trans('global.app_csvImport') }}
                                            </button> --}}
                                    @endcan
                                    @include('csvImport.modal', ['model' => 'Company', 'route' =>
                                    'admin.companies.parseCsvImport'])
                                    {{-- add company modal --}}
                                    <div class="modal fade events" id="addCompanyModal" tabindex="-1" role="dialog"
                                        aria-labelledby="addCompanyModal">
                                        <div class="modal-dialog modal-dialog-centered modal-lg modal-min" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <form method="POST" action="{{ route('admin.companies.store') }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h2>Add Partners</h2>
                                                                <p class="text-italic">The field labels marked with * are
                                                                    required input fields.</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="required"
                                                                        for="name">{{ trans('cruds.company.fields.name') }}</label>
                                                                    <input
                                                                        class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                                                        type="text" name="name" id="name"
                                                                        value="{{ old('name', '') }}" required>
                                                                    @if ($errors->has('name'))
                                                                        <div class="invalid-feedback">
                                                                            {{ $errors->first('name') }}
                                                                        </div>
                                                                    @endif
                                                                    <span
                                                                        class="help-block">{{ trans('cruds.company.fields.name_helper') }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="website" class="required">Category</label>
                                                                    <select name="category" id="category" class="form-control"
                                                                        required>
                                                                        <option value="partner" selected>Partners</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="email">Admin
                                                                        {{ trans('cruds.company.fields.email') }} <span
                                                                            class="text-danger">*</span> <span>(To set
                                                                            Account
                                                                            Password)</span></label>
                                                                    <input
                                                                        class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                                                        type="text" name="email" id="email"
                                                                        value="{{ old('email', '') }}" required>
                                                                    @if ($errors->has('email'))
                                                                        <div class="invalid-feedback">
                                                                            {{ $errors->first('email') }}
                                                                        </div>
                                                                    @endif

                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label
                                                                        for="phone">{{ trans('cruds.company.fields.phone') }}</label>
                                                                    <input
                                                                        class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}"
                                                                        type="text" name="phone" id="phone"
                                                                        value="{{ old('phone', '') }}">
                                                                    @if ($errors->has('phone'))
                                                                        <div class="invalid-feedback">
                                                                            {{ $errors->first('phone') }}
                                                                        </div>
                                                                    @endif
                                                                    <span
                                                                        class="help-block">{{ trans('cruds.company.fields.phone_helper') }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label
                                                                        for="website">{{ trans('cruds.company.fields.website') }}</label>
                                                                    <input
                                                                        class="form-control {{ $errors->has('website') ? 'is-invalid' : '' }}"
                                                                        type="url" name="website" id="website"
                                                                        value="{{ old('website', '') }}">
                                                                    @if ($errors->has('website'))
                                                                        <div class="invalid-feedback">
                                                                            {{ $errors->first('website') }}
                                                                        </div>
                                                                    @endif
                                                                    <span
                                                                        class="help-block">{{ trans('cruds.company.fields.website_helper') }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label
                                                                        for="headquarters">{{ trans('cruds.company.fields.headquarters') }}</label>
                                                                    <input
                                                                        class="form-control {{ $errors->has('headquarters') ? 'is-invalid' : '' }}"
                                                                        type="text" name="headquarters" id="headquarters"
                                                                        value="{{ old('headquarters', '') }}">
                                                                    @if ($errors->has('headquarters'))
                                                                        <div class="invalid-feedback">
                                                                            {{ $errors->first('headquarters') }}
                                                                        </div>
                                                                    @endif
                                                                    <span
                                                                        class="help-block">{{ trans('cruds.company.fields.headquarters_helper') }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label
                                                                        for="type">{{ trans('cruds.company.fields.type') }}</label>
                                                                    <input
                                                                        class="form-control {{ $errors->has('type') ? 'is-invalid' : '' }}"
                                                                        type="text" name="type" id="type"
                                                                        value="{{ old('type', '') }}">
                                                                    @if ($errors->has('type'))
                                                                        <div class="invalid-feedback">
                                                                            {{ $errors->first('type') }}
                                                                        </div>
                                                                    @endif
                                                                    <span
                                                                        class="help-block">{{ trans('cruds.company.fields.type_helper') }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label
                                                                        for="industry">{{ trans('cruds.company.fields.industry') }}</label>
                                                                    <input
                                                                        class="form-control {{ $errors->has('industry') ? 'is-invalid' : '' }}"
                                                                        type="text" name="industry" id="industry"
                                                                        value="{{ old('industry', '') }}">
                                                                    @if ($errors->has('industry'))
                                                                        <div class="invalid-feedback">
                                                                            {{ $errors->first('industry') }}
                                                                        </div>
                                                                    @endif
                                                                    <span
                                                                        class="help-block">{{ trans('cruds.company.fields.industry_helper') }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label
                                                                        for="facebook">{{ trans('cruds.company.fields.facebook') }}</label>
                                                                    <input
                                                                        class="form-control {{ $errors->has('facebook') ? 'is-invalid' : '' }}"
                                                                        type="text" name="facebook" id="facebook"
                                                                        value="{{ old('facebook', '') }}">
                                                                    @if ($errors->has('facebook'))
                                                                        <div class="invalid-feedback">
                                                                            {{ $errors->first('facebook') }}
                                                                        </div>
                                                                    @endif
                                                                    <span
                                                                        class="help-block">{{ trans('cruds.company.fields.facebook_helper') }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label
                                                                        for="twitter">{{ trans('cruds.company.fields.twitter') }}</label>
                                                                    <input
                                                                        class="form-control {{ $errors->has('twitter') ? 'is-invalid' : '' }}"
                                                                        type="text" name="twitter" id="twitter"
                                                                        value="{{ old('twitter', '') }}">
                                                                    @if ($errors->has('twitter'))
                                                                        <div class="invalid-feedback">
                                                                            {{ $errors->first('twitter') }}
                                                                        </div>
                                                                    @endif
                                                                    <span
                                                                        class="help-block">{{ trans('cruds.company.fields.twitter_helper') }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label
                                                                        for="instagram">{{ trans('cruds.company.fields.instagram') }}</label>
                                                                    <input
                                                                        class="form-control {{ $errors->has('instagram') ? 'is-invalid' : '' }}"
                                                                        type="text" name="instagram" id="instagram"
                                                                        value="{{ old('instagram', '') }}">
                                                                    @if ($errors->has('instagram'))
                                                                        <div class="invalid-feedback">
                                                                            {{ $errors->first('instagram') }}
                                                                        </div>
                                                                    @endif
                                                                    <span
                                                                        class="help-block">{{ trans('cruds.company.fields.instagram_helper') }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label
                                                                        for="linkedin">{{ trans('cruds.company.fields.linkedin') }}</label>
                                                                    <input
                                                                        class="form-control {{ $errors->has('linkedin') ? 'is-invalid' : '' }}"
                                                                        type="text" name="linkedin" id="linkedin"
                                                                        value="{{ old('linkedin', '') }}">
                                                                    @if ($errors->has('linkedin'))
                                                                        <div class="invalid-feedback">
                                                                            {{ $errors->first('linkedin') }}
                                                                        </div>
                                                                    @endif
                                                                    <span
                                                                        class="help-block">{{ trans('cruds.company.fields.linkedin_helper') }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label
                                                                        for="youtube">{{ trans('cruds.company.fields.youtube') }}</label>
                                                                    <input
                                                                        class="form-control {{ $errors->has('youtube') ? 'is-invalid' : '' }}"
                                                                        type="text" name="youtube" id="youtube"
                                                                        value="{{ old('youtube', '') }}">
                                                                    @if ($errors->has('youtube'))
                                                                        <div class="invalid-feedback">
                                                                            {{ $errors->first('youtube') }}
                                                                        </div>
                                                                    @endif
                                                                    <span
                                                                        class="help-block">{{ trans('cruds.company.fields.youtube_helper') }}</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="about">Description</label>
                                                            <textarea
                                                                class="form-control ckeditor {{ $errors->has('about') ? 'is-invalid' : '' }}"
                                                                name="about" id="about">{!! old('about') !!}</textarea>
                                                            @if ($errors->has('about'))
                                                                <div class="invalid-feedback">
                                                                    {{ $errors->first('about') }}
                                                                </div>
                                                            @endif
                                                            <span
                                                                class="help-block">{{ trans('cruds.company.fields.about_helper') }}</span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label
                                                                for="logo">{{ trans('cruds.company.fields.logo') }}</label>
                                                            <div class="needsclick dropzone {{ $errors->has('logo') ? 'is-invalid' : '' }}"
                                                                id="logo-dropzone">
                                                            </div>
                                                            @if ($errors->has('logo'))
                                                                <div class="invalid-feedback">
                                                                    {{ $errors->first('logo') }}
                                                                </div>
                                                            @endif
                                                            <span
                                                                class="help-block">{{ trans('cruds.company.fields.logo_helper') }}</span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label
                                                                for="cover_image">{{ trans('cruds.company.fields.cover_image') }}</label>
                                                            <div class="needsclick dropzone {{ $errors->has('cover_image') ? 'is-invalid' : '' }}"
                                                                id="cover_image-dropzone">
                                                            </div>
                                                            @if ($errors->has('cover_image'))
                                                                <div class="invalid-feedback">
                                                                    {{ $errors->first('cover_image') }}
                                                                </div>
                                                            @endif
                                                            <span
                                                                class="help-block">{{ trans('cruds.company.fields.cover_image_helper') }}</span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label
                                                                for="downloads">{{ trans('cruds.company.fields.downloads') }}</label>
                                                            <div class="needsclick dropzone {{ $errors->has('downloads') ? 'is-invalid' : '' }}"
                                                                id="downloads-dropzone">
                                                            </div>
                                                            @if ($errors->has('downloads'))
                                                                <div class="invalid-feedback">
                                                                    {{ $errors->first('downloads') }}
                                                                </div>
                                                            @endif
                                                            <span
                                                                class="help-block">{{ trans('cruds.company.fields.downloads_helper') }}</span>
                                                        </div>
                                                        <div class="form-group">
                                                            <button class="btn btn-info" type="submit">
                                                                {{ trans('global.save') }}
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endcan
                            </div>
                        </div>

                        @if (count($partners) > 0)
                            <div class="col-xl-2 col-md-2">
                                <hr>
                            </div>
                            <div class="col-xl-10 col-md-10"></div>
                            {{-- companies list --}}
                            @foreach ($partners as $key => $company)
                                <div class="col-xl-2 col-md-2">
                                    <div class="ms-panel">
                                        <div class="ms-panel-body">
                                            <a href="{{ route('admin.companies.show', $company->id) }}">
                                                <div class="campany-card-logo text-center">
                                                    @if ($company->logo)
                                                        <img src="{{ $company->logo->getUrl() }}"
                                                            class="card-img-top company-display-logo">
                                                    @else
                                                        <img src="{{ asset('img/avatar.png') }}"
                                                            class="card-img-top company-display-logo">
                                                    @endif
                                                </div>
                                                <h5 class="card-text text-center">
                                                    {{-- {!! Str::limit($company->about, 140, '...') !!} --}}
                                                    {{ $company->name }}
                                                </h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection

@section('scripts')
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

    {{-- create company --}}
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

            //   var allEditors = document.querySelectorAll('.ckeditor');
            //   for (var i = 0; i < allEditors.length; ++i) {
            //     ClassicEditor.create(
            //       allEditors[i], {
            //         extraPlugins: [SimpleUploadAdapter]
            //       }
            //     );
            //   }
        });
    </script>

    <script>
        Dropzone.options.logoDropzone = {
            url: '{{ route('admin.companies.storeMedia') }}',
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
                $('form').find('input[name="logo"]').remove()
                $('form').append('<input type="hidden" name="logo" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="logo"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            //     init: function () {
            @if (isset($company) && $company->logo)
                // var file = {!! json_encode($company->logo) !!}
                // this.options.addedfile.call(this, file)
                // this.options.thumbnail.call(this, file, file.preview)
                // file.previewElement.classList.add('dz-complete')
                // $('form').append('<input type="hidden" name="logo" value="' + file.file_name + '">')
                // this.options.maxFiles = this.options.maxFiles - 1
                //
            @endif
            //     },
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
        Dropzone.options.coverImageDropzone = {
            url: '{{ route('admin.companies.storeMedia') }}',
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
                $('form').find('input[name="cover_image"]').remove()
                $('form').append('<input type="hidden" name="cover_image" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="cover_image"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (isset($company) && $company->cover_image)
                    var file = {!! json_encode($company->cover_image) !!}
                    this.options.addedfile.call(this, file)
                    this.options.thumbnail.call(this, file, file.preview)
                    // file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="cover_image" value="' + file.file_name + '">')
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
        var uploadedDownloadsMap = {}
        Dropzone.options.downloadsDropzone = {
            url: '{{ route('admin.companies.storeMedia') }}',
            maxFilesize: 50, // MB
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 50
            },
            success: function(file, response) {
                $('form').append('<input type="hidden" name="downloads[]" value="' + response.name + '">')
                uploadedDownloadsMap[file.name] = response.name
            },
            removedfile: function(file) {
                file.previewElement.remove()
                var name = ''
                if (typeof file.file_name !== 'undefined') {
                    name = file.file_name
                } else {
                    name = uploadedDownloadsMap[file.name]
                }
                $('form').find('input[name="downloads[]"][value="' + name + '"]').remove()
            },
            init: function() {
                @if (isset($company) && $company->downloads)
                    var files =
                    {!! json_encode($company->downloads) !!}
                    for (var i in files) {
                    var file = files[i]
                    this.options.addedfile.call(this, file)
                    // file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="downloads[]" value="' + file.file_name + '">')
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
