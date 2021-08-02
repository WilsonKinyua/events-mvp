@extends('layouts.main')

@section('title')
    Welcome Back
@endsection
@section("content")
@can('event_setting_access')
    <a class="edit-button m-3" title="Edit Company Media files" data-toggle="modal" data-target="#companyMedia"> <i class="fa fa-edit"></i></a>
    {{-- Edit company media files --}}
    <div class="modal fade events" id="companyMedia" tabindex="-1" role="dialog" aria-labelledby="companyMedia">
        <div class="modal-dialog modal-dialog-centered modal-min" role="document">
        <div class="modal-content">
            <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h2 class="modal-title">Edit Company Media Files</h2>
            <p class="text-italic">The field labels marked with * are required input fields.</p>
            <form method="POST" action="{{ route("admin.companies.update", [$company->id]) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label class="required" for="name">{{ trans('cruds.company.fields.name') }}</label>
                    <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $company->name) }}" required>
                    @if($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.company.fields.name_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="logo">{{ trans('cruds.company.fields.logo') }}</label>
                    <div class="needsclick dropzone {{ $errors->has('logo') ? 'is-invalid' : '' }}" id="logo-dropzone">
                    </div>
                    @if($errors->has('logo'))
                        <div class="invalid-feedback">
                            {{ $errors->first('logo') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.company.fields.logo_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="cover_image">{{ trans('cruds.company.fields.cover_image') }}</label>
                    <div class="needsclick dropzone {{ $errors->has('cover_image') ? 'is-invalid' : '' }}" id="cover_image-dropzone">
                    </div>
                    @if($errors->has('cover_image'))
                        <div class="invalid-feedback">
                            {{ $errors->first('cover_image') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.company.fields.cover_image_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="downloads">{{ trans('cruds.company.fields.downloads') }}</label>
                    <div class="needsclick dropzone {{ $errors->has('downloads') ? 'is-invalid' : '' }}" id="downloads-dropzone">
                    </div>
                    @if($errors->has('downloads'))
                        <div class="invalid-feedback">
                            {{ $errors->first('downloads') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.company.fields.downloads_helper') }}</span>
                </div>
                <div class="form-group">
                    <button class="btn btn-info" type="submit">
                        Update Company
                    </button>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>
@endcan
<div class="ms-profile-overview">
    <div style="background-image: url({{ asset($company->cover_image ? $company->cover_image->getUrl() : 'https://acorns.ie/wp-content/uploads/2019/01/cover-imgae-placeholder.jpg' )}});" class="ms-profile-cover">
            @if($company->logo)
                <img class="ms-profile-img" src="{{ $company->logo->getUrl() }}" alt="Company Logo">
            @else
                <img class="ms-profile-img" src="http://socialimpact.com/wp-content/uploads/2021/03/logo-placeholder.jpg" alt="Company Logo">
            @endif
        <div class="ms-profile-user-info">
            <h1 class="ms-profile-username">{{ $company->name ?? '' }}</h1>
            <h2 class="ms-profile-role">Headquarters:{{ $company->headquarters ?? '' }}</h2>
        </div>

    </div>
</div>
<div class="row">

    <div class="col-xl-8 col-md-12">
        <div class="ms-panel ms-panel-fh">
            <div class="ms-panel-body">
                <h1 class="section-title company-name"> About Us
                    @can('event_setting_access')
                    <a class="edit-button m-3" title="Edit Company Details" data-toggle="modal" data-target="#aboutSectionModal"> <i class="fa fa-edit"></i></a></h1>
                        {{-- Edit company About --}}
                        <div class="modal fade events" id="aboutSectionModal" tabindex="-1" role="dialog" aria-labelledby="aboutSectionModal">
                            <div class="modal-dialog modal-dialog-centered modal-min" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h2 class="modal-title">Edit Company Media Files</h2>
                                <p class="text-italic">The field labels marked with * are required input fields.</p>
                                <form method="POST" action="{{ route("admin.companies.update", [$company->id]) }}" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group">
                                        <label for="about">{{ trans('cruds.company.fields.about') }}</label>
                                        <textarea class="form-control ckeditor {{ $errors->has('about') ? 'is-invalid' : '' }}" name="about" id="about">{!! old('about', $company->about) !!}</textarea>
                                        @if($errors->has('about'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('about') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.company.fields.about_helper') }}</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="website">{{ trans('cruds.company.fields.website') }}</label>
                                        <input class="form-control {{ $errors->has('website') ? 'is-invalid' : '' }}" type="url" name="website" id="website" value="{{ old('website', $company->website) }}">
                                        @if($errors->has('website'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('website') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.company.fields.website_helper') }}</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="headquarters">{{ trans('cruds.company.fields.headquarters') }}</label>
                                        <input class="form-control {{ $errors->has('headquarters') ? 'is-invalid' : '' }}" type="text" name="headquarters" id="headquarters" value="{{ old('headquarters', $company->headquarters) }}">
                                        @if($errors->has('headquarters'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('headquarters') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.company.fields.headquarters_helper') }}</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="type">{{ trans('cruds.company.fields.type') }}</label>
                                        <input class="form-control {{ $errors->has('type') ? 'is-invalid' : '' }}" type="text" name="type" id="type" value="{{ old('type', $company->type) }}">
                                        @if($errors->has('type'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('type') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.company.fields.type_helper') }}</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="industry">{{ trans('cruds.company.fields.industry') }}</label>
                                        <input class="form-control {{ $errors->has('industry') ? 'is-invalid' : '' }}" type="text" name="industry" id="industry" value="{{ old('industry', $company->industry) }}">
                                        @if($errors->has('industry'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('industry') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.company.fields.industry_helper') }}</span>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-danger" type="submit">
                                            {{ trans('global.save') }}
                                        </button>
                                    </div>
                                </form>
                                </div>
                            </div>
                            </div>
                        </div>
                    @endcan
                <table class="table table-borderless table-responsive">
                    <tbody>
                        <tr>
                            <th scope="col">Website</th>
                            <td><a target="_blank" class="text-primary"
                                    href="{{ $company->website ?? '' }}">{{ $company->website ?? '' }}</a></td>
                            <th scope="col">Headquarters:</th>
                            <td>{{ $company->headquarters ?? '' }}</td>
                        </tr>
                        <tr>

                            <th scope="col">Type:</th>
                            <td>{{ $company->type }}</td>
                            <th scope="col">Industry:</th>
                            <td>{{ $company->industry }}</td>
                        </tr>
                    </tbody>
                </table>
                {!! $company->about ?? '...' !!}

                <div class="ms-profile-skills">
                    <!-- <h2 class="section-title">Professional Skills</h2> -->
                    <ul class="ms-skill-list">
                        <li class="ms-skill"><a target="_blank" href="{{ $company->facebook ?? '' }}"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li class="ms-skill"><a target="_blank" href="{{ $company->twitter ?? '' }}"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="ms-skill"><a target="_blank" href="{{ $company->linkedin ?? '' }}"><i class="fab fa-linkedin"></i></a>
                        </li>
                        <li class="ms-skill"><a target="_blank" href="{{ $company->instagram ?? '' }}"><i
                                    class="fab fa-instagram"></i></a></li>
                        <li class="ms-skill"><a target="_blank" href="{{ $company->youtube ?? '' }}"><i class="fab fa-youtube"></i></a>
                        </li>
                        @can('event_setting_access')
                            <a class="edit-button-social m-3" title="Edit Company Social Media Icons" data-toggle="modal" data-target="#socialMediaIcons"> <i class="fa fa-edit"></i></a></h1>
                            {{-- social media modal --}}
                            <div class="modal fade events" id="socialMediaIcons" tabindex="-1" role="dialog" aria-labelledby="socialMediaIcons">
                                <div class="modal-dialog modal-dialog-centered modal-min" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h2 class="modal-title">Edit Company</h2>
                                    <p class="text-italic">Insert with <strong>https://</strong></p>
                                    <form method="POST" action="{{ route("admin.companies.update", [$company->id]) }}" enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        <div class="form-group">
                                            <label for="facebook">{{ trans('cruds.company.fields.facebook') }}</label>
                                            <input class="form-control {{ $errors->has('facebook') ? 'is-invalid' : '' }}" type="url" name="facebook" id="facebook" value="{{ old('facebook', $company->facebook) }}">
                                            @if($errors->has('facebook'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('facebook') }}
                                                </div>
                                            @endif
                                            <span class="help-block">{{ trans('cruds.company.fields.facebook_helper') }}</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="twitter">{{ trans('cruds.company.fields.twitter') }}</label>
                                            <input class="form-control {{ $errors->has('twitter') ? 'is-invalid' : '' }}" type="url" name="twitter" id="twitter" value="{{ old('twitter', $company->twitter) }}">
                                            @if($errors->has('twitter'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('twitter') }}
                                                </div>
                                            @endif
                                            <span class="help-block">{{ trans('cruds.company.fields.twitter_helper') }}</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="instagram">{{ trans('cruds.company.fields.instagram') }}</label>
                                            <input class="form-control {{ $errors->has('instagram') ? 'is-invalid' : '' }}" type="url" name="instagram" id="instagram" value="{{ old('instagram', $company->instagram) }}">
                                            @if($errors->has('instagram'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('instagram') }}
                                                </div>
                                            @endif
                                            <span class="help-block">{{ trans('cruds.company.fields.instagram_helper') }}</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="linkedin">{{ trans('cruds.company.fields.linkedin') }}</label>
                                            <input class="form-control {{ $errors->has('linkedin') ? 'is-invalid' : '' }}" type="url" name="linkedin" id="linkedin" value="{{ old('linkedin', $company->linkedin) }}">
                                            @if($errors->has('linkedin'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('linkedin') }}
                                                </div>
                                            @endif
                                            <span class="help-block">{{ trans('cruds.company.fields.linkedin_helper') }}</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="youtube">{{ trans('cruds.company.fields.youtube') }}</label>
                                            <input class="form-control {{ $errors->has('youtube') ? 'is-invalid' : '' }}" type="url" name="youtube" id="youtube" value="{{ old('youtube', $company->youtube) }}">
                                            @if($errors->has('youtube'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('youtube') }}
                                                </div>
                                            @endif
                                            <span class="help-block">{{ trans('cruds.company.fields.youtube_helper') }}</span>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-secondary" type="submit">
                                                Update Company
                                            </button>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                                </div>
                            </div>
                        @endcan
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <div class="col-xl-4 col-md-12">

        <div class="ms-panel">
            <div class="ms-panel-body">
                <h1 class="section-title company-name">Get in touch
                    @can('event_setting_access')
                        <a class="edit-button-social m-3" title="Edit Company" data-toggle="modal" data-target="#addressBook"> <i class="fa fa-edit"></i></a>
                    @endcan
                </h1>
                @can('event_setting_access')
                    {{-- address book modal --}}
                    <div class="modal fade events" id="addressBook" tabindex="-1" role="dialog" aria-labelledby="addressBook">
                        <div class="modal-dialog modal-dialog-centered modal-min" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h2 class="modal-title">Edit Company</h2>
                            <form method="POST" action="{{ route("admin.companies.update", [$company->id]) }}" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label for="phone">{{ trans('cruds.company.fields.phone') }}</label>
                                    <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', $company->phone) }}">
                                    @if($errors->has('phone'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('phone') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.company.fields.phone_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="email">{{ trans('cruds.company.fields.email') }}</label>
                                    <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', $company->email) }}">
                                    @if($errors->has('email'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.company.fields.email_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-secondary" type="submit">
                                        Update Company
                                    </button>
                                </div>
                            </form>
                            </div>
                        </div>
                        </div>
                    </div>
                @endcan
                <p>
                <div class="get-in-touch">
                    <span> <i class="fa fa-phone"></i> <a href="tel:{{ $company->phone ?? '' }}">{{ $company->phone ?? '' }}</a></span>
                    <span> <i class="fa fa-envelope"></i> <a
                            href="malto:{{ $company->email ?? '' }}">{{ $company->email ?? '' }}</a>
                    </span>
                </div>
                </p>
            </div>
        </div>

        <div class="ms-panel files">
            <div class="ms-panel-body">
                <h1 class="section-title company-name">Downloads
                    @can('event_setting_access')
                        <a class="edit-button-social m-3" title="Edit Company" data-toggle="modal" data-target="#downloadFilesModal"> <i class="fa fa-edit"></i></a>
                    @endcan
                </h1>
                @can('event_setting_access')
                    {{-- address book modal --}}
                    <div class="modal fade events" id="downloadFilesModal" tabindex="-1" role="dialog" aria-labelledby="downloadFilesModal">
                        <div class="modal-dialog modal-dialog-centered modal-min" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h2 class="modal-title">Edit Company</h2>
                            <form method="POST" action="{{ route("admin.companies.update", [$company->id]) }}" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label for="downloads">{{ trans('cruds.company.fields.downloads') }}</label>
                                    <div class="needsclick dropzone {{ $errors->has('downloads') ? 'is-invalid' : '' }}" id="downloads-dropzone">
                                    </div>
                                    @if($errors->has('downloads'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('downloads') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.company.fields.downloads_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-secondary" type="submit">
                                        Update Company
                                    </button>
                                </div>
                            </form>
                            </div>
                        </div>
                        </div>
                    </div>
                @endcan
                <table class="table table-borderless ">
                    <tbody>
                        @if (count($company->downloads) > 0)
                            @foreach($company->downloads as $key => $media)
                            <tr>
                                {{-- <td>{{ $media->collection_name}}</td> --}}
                                <td>View File</td>
                                <td><a target="_blank" href="{{ $media->getUrl() }}"><i class="fa fa-download"></i></a></td>
                            </tr>

                            @endforeach
                        @else
                            <tr>
                                <td class="text-center text-danger">No files available for download!!</td>
                            </tr>
                        @endif

                        {{-- <tr>
                            <!-- <td> <i class="fa fa-file"></i></td> -->
                            <td>Welcome message BioFarmer.docx</td>
                            <td><a target="_blank" href="#"><i class="fa fa-download"></i></a></td>
                        </tr>
                        <tr>
                            <!-- <td> <i class="fa fa-file"></i></td> -->
                            <td>Company Profile.pdf</td>
                            <td><a target="_blank" href="#"><i class="fa fa-download"></i></a></td>
                        </tr> --}}
                    </tbody>
                </table>

            </div>
        </div>

        <div class="ms-panel ">
            <div class="ms-panel-body">
                <div class="card">
                    <div class="card-image">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/tKraaQeolzs"
                                frameborder="0" allowfullscreen></iframe>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="col-md-12">
        <div class="ms-panel">
            <div class="ms-panel-body">
                <h2 class="section-title">People</h2>
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="media ms-profile-experience">
                            <div class="mr-2 align-self-center">
                                <img src="../../assets/img/people/people-5.jpg"
                                    class="ms-img-round ms-img-small" alt="people">
                            </div>
                            <div class="media-body">
                                <h4>User Research Hub</h4>
                                <p>January 2013 to Present</p>
                                <p>UX Designer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="media ms-profile-experience">
                            <div class="mr-2 align-self-center">
                                <img src="../../assets/img/people/people-5.jpg"
                                    class="ms-img-round ms-img-small" alt="people">
                            </div>
                            <div class="media-body">
                                <h4>User Research Hub</h4>
                                <p>January 2013 to Present</p>
                                <p>UX Designer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="media ms-profile-experience">
                            <div class="mr-2 align-self-center">
                                <img src="../../assets/img/people/people-5.jpg"
                                    class="ms-img-round ms-img-small" alt="people">
                            </div>
                            <div class="media-body">
                                <h4>User Research Hub</h4>
                                <p>January 2013 to Present</p>
                                <p>UX Designer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="media ms-profile-experience">
                            <div class="mr-2 align-self-center">
                                <img src="../../assets/img/people/people-5.jpg"
                                    class="ms-img-round ms-img-small" alt="people">
                            </div>
                            <div class="media-body">
                                <h4>User Research Hub</h4>
                                <p>January 2013 to Present</p>
                                <p>UX Designer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="media ms-profile-experience">
                            <div class="mr-2 align-self-center">
                                <img src="../../assets/img/people/people-5.jpg"
                                    class="ms-img-round ms-img-small" alt="people">
                            </div>
                            <div class="media-body">
                                <h4>User Research Hub</h4>
                                <p>January 2013 to Present</p>
                                <p>UX Designer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="media ms-profile-experience">
                            <div class="mr-2 align-self-center">
                                <img src="../../assets/img/people/people-5.jpg"
                                    class="ms-img-round ms-img-small" alt="people">
                            </div>
                            <div class="media-body">
                                <h4>User Research Hub</h4>
                                <p>January 2013 to Present</p>
                                <p>UX Designer</p>
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
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route('admin.companies.storeCKEditorImages') }}', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
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
      width: 200,
      height: 200
    },
    success: function (file, response) {
      $('form').find('input[name="logo"]').remove()
      $('form').append('<input type="hidden" name="logo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="logo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($company) && $company->logo)
      var file = {!! json_encode($company->logo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="logo" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
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
    success: function (file, response) {
      $('form').find('input[name="cover_image"]').remove()
      $('form').append('<input type="hidden" name="cover_image" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="cover_image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($company) && $company->cover_image)
      var file = {!! json_encode($company->cover_image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="cover_image" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
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
    success: function (file, response) {
      $('form').append('<input type="hidden" name="downloads[]" value="' + response.name + '">')
      uploadedDownloadsMap[file.name] = response.name
    },
    removedfile: function (file) {
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedDownloadsMap[file.name]
      }
      $('form').find('input[name="downloads[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($company) && $company->downloads)
          var files =
            {!! json_encode($company->downloads) !!}
              for (var i in files) {
              var file = files[i]
              this.options.addedfile.call(this, file)
              file.previewElement.classList.add('dz-complete')
              $('form').append('<input type="hidden" name="downloads[]" value="' + file.file_name + '">')
            }
@endif
    },
     error: function (file, response) {
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
