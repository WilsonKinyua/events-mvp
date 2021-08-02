{{-- @extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Dashboard
                </div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection --}}

@extends('layouts.main')

@section('title')
    Welcome Back
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
              <a href="#tab13" aria-controls="tab13" class="active" role="tab" data-toggle="tab">
                <i class="flaticon-browser"></i> <br>
                Reception
              </a>
            </li>
            <li role="presentation"><a href="#tab15" aria-controls="tab14" role="tab" data-toggle="tab"> <i
                class="flaticon-chat"></i> <br>Event Feed </a></li>
            <li role="presentation"><a href="#tab14" aria-controls="tab15" role="tab" data-toggle="tab"> <i
                  class="flaticon-user"></i> <br>Companies </a></li>
                  <li role="presentation"><a href="#tab23" aria-controls="tab15" role="tab" data-toggle="tab"> <i
                    class="flaticon-user"></i> <br>Attendes </a></li>
            {{-- <li role="presentation"><a href="#tab15" aria-controls="tab14" role="tab" data-toggle="tab"> <i
                  class="flaticon-chat"></i> <br>Event Feed </a></li> --}}
            <li role="presentation"><a href="#tab16" aria-controls="tab16" role="tab" data-toggle="tab"> <i
                  class="flaticon-internet"></i> <br>Agenda </a></li>
            <li role="presentation"><a href="#tab17" aria-controls="tab17" role="tab" data-toggle="tab"> <i
                  class="flaticon-user"></i> <br>Speakers </a></li>
            <li role="presentation"><a href="#tab18" aria-controls="tab18" role="tab" data-toggle="tab"> <i
                  class="flaticon-user"></i> <br>Sponsors </a></li>
            <li role="presentation"><a href="#tab19" aria-controls="tab19" role="tab" data-toggle="tab"> <i
                  class="flaticon-spreadsheet"></i> <br>Exhibitors </a></li>
            <li role="presentation"><a href="#tab20" aria-controls="tab20" role="tab" data-toggle="tab"> <i
                  class="flaticon-layers"></i> <br>Meetings </a></li>
            <li role="presentation"><a href="#tab21" aria-controls="tab21" role="tab" data-toggle="tab"> <i
                  class="flaticon-archive"></i> <br>Lounge </a></li>
            <li role="presentation"><a href="#tab22" aria-controls="tab22" role="tab" data-toggle="tab"> <i
                  class="flaticon-browser"></i> <br>Rooms </a></li>
            @can('event_setting_access')
                <a class="edit-button m-3" title="Edit Sliders" data-toggle="modal" data-target="#slidersmodal"> <i class="fa fa-edit"></i></a>
            @endcan
            {{-- Sliders modal --}}
            <div class="modal fade events" id="slidersmodal" tabindex="-1" role="dialog" aria-labelledby="slidersmodal">
                <div class="modal-dialog modal-dialog-centered modal-min" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <form method="POST" action="{{ route("admin.event-settings.update", [$eventSetting->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="sliders">{{ trans('cruds.eventSetting.fields.sliders') }}</label>
                            <div class="needsclick dropzone {{ $errors->has('sliders') ? 'is-invalid' : '' }}" id="sliders-dropzone">
                            </div>
                            @if($errors->has('sliders'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('sliders') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.eventSetting.fields.sliders_helper') }}</span>
                        </div>
                        <button type="submit" class="btn btn-primary shadow-none">Save Changes</button>
                    </form>
                    </div>
                </div>
                </div>
            </div>
          </ul>
        </div>
      </div>

      <div class="tab-content">


        <div role="tabpanel" class="tab-pane active show fade in" id="tab13">
          <div class="row">

            <div class="col-xl-8 col-md-12">
              <div class="ms-panel">
                <div class="ms-panel-body">
                  <h2 class="section-title">About
                        @can('event_setting_access')
                            <a class="edit-button" title="Edit About" data-toggle="modal" data-target="#modal-10"> <i class="fa fa-edit"></i></a>
                        @endcan
                    </h2>
                    @can('event_setting_access')
                    {{-- events settings modal(insert) --}}
                        <div class="modal fade events" id="modal-10" tabindex="-1" role="dialog" aria-labelledby="modal-10">
                            <div class="modal-dialog modal-dialog-centered modal-min" role="document">
                            <div class="modal-content">

                                <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <form method="POST" action="{{ route("admin.event-settings.update", [$eventSetting->id]) }}" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group">
                                        <label class="required" for="about">{{ trans('cruds.eventSetting.fields.about') }}</label>
                                        <textarea class="form-control ckeditor {{ $errors->has('about') ? 'is-invalid' : '' }}" name="about" id="about" required>{{ old('about', $eventSetting->about) }}</textarea>
                                        @if($errors->has('about'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('about') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.eventSetting.fields.about_helper') }}</span>
                                    </div>
                                    <div class="form-group">
                                        <label class="required" for="event_logo">{{ trans('cruds.eventSetting.fields.event_logo') }}</label>
                                        <div class="needsclick dropzone {{ $errors->has('event_logo') ? 'is-invalid' : '' }}" id="event_logo-dropzone">
                                        </div>
                                        @if($errors->has('event_logo'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('event_logo') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.eventSetting.fields.event_logo_helper') }}</span>
                                    </div>
                                    <button type="submit" class="btn btn-primary shadow-none">Save Changes</button>
                                </form>
                                </div>
                            </div>
                            </div>
                        </div>
                    @endcan
                  <div class="row">
                    <div class="col-xl-3 col-md-3">
                      <div class="company-logo">
                        @if($eventSetting->event_logo)
                            <img src="{{ $eventSetting->event_logo->getUrl() }}" class="img-fluid rounded-start" alt="Company Logo">
                        @else
                            <img src="{{ asset('img/logo-placeholder.jpg')}}" class="img-fluid rounded-start" alt="Company Logo">
                        @endif
                      </div>
                    </div>
                    <div class="col-xl-8 col-md-12">

                      @if ($eventSetting->about === "")
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non elit nisl. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean luctus, justo id pellentesque imperdiet, augue metus ornare quam, in pulvinar massa erat nec dui. Nam at facilisis nulla.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non elit nisl. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean luctus, justo id pellentesque imperdiet, augue metus ornare quam, in pulvinar massa erat nec dui. Nam at facilisis nulla.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non elit nisl. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean luctus, justo id pellentesque imperdiet, augue metus ornare quam, in pulvinar massa erat nec dui. Nam at facilisis nulla.</p>
                      @else
                      {!! $eventSetting->about !!}
                      @endif
                    </div>
                  </div>

                  <div class="ms-profile-skills">
                    <!-- <h2 class="section-title">Professional Skills</h2> -->
                    <ul class="ms-skill-list">
                      <li class="ms-skill"><a href="#"><i class="fab fa-facebook"></i></a></li>
                      <li class="ms-skill"><a href="#"><i class="fab fa-twitter"></i></a></li>
                      <li class="ms-skill"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                      <li class="ms-skill"><a href="#"><i class="fab fa-instagram"></i></a></li>
                      <li class="ms-skill"><a href="#"><i class="fab fa-youtube"></i></a></li>
                        @can('event_setting_access')
                        <a class="edit-button-social m-3" title="Edit About" data-toggle="modal" data-target="#socialmedialinks"> <i class="fa fa-edit"></i></a>

                        {{-- social media links --}}
                        <div class="modal fade events" id="socialmedialinks" tabindex="-1" role="dialog" aria-labelledby="socialmedialinks">
                            <div class="modal-dialog modal-dialog-centered modal-min" role="document">
                            <div class="modal-content">

                                <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <form method="POST" action="{{ route("admin.event-settings.update", [$eventSetting->id]) }}" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group">
                                        <label for="facebook">{{ trans('cruds.eventSetting.fields.facebook') }}</label>
                                        <input class="form-control {{ $errors->has('facebook') ? 'is-invalid' : '' }}" type="url" name="facebook" id="facebook" value="{{ old('facebook', $eventSetting->facebook) }}">
                                        @if($errors->has('facebook'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('facebook') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.eventSetting.fields.facebook_helper') }}</span>
                                        <small><strong>eg https://facebook.com/newmark</strong></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="twitter">{{ trans('cruds.eventSetting.fields.twitter') }}</label>
                                        <input class="form-control {{ $errors->has('twitter') ? 'is-invalid' : '' }}" type="url" name="twitter" id="twitter" value="{{ old('twitter', $eventSetting->twitter) }}">
                                        @if($errors->has('twitter'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('twitter') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.eventSetting.fields.twitter_helper') }}</span>
                                        <small><strong>eg https://twitter.com/newmark</strong></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="linkedin">{{ trans('cruds.eventSetting.fields.linkedin') }}</label>
                                        <input class="form-control {{ $errors->has('linkedin') ? 'is-invalid' : '' }}" type="url" name="linkedin" id="linkedin" value="{{ old('linkedin', $eventSetting->linkedin) }}">
                                        @if($errors->has('linkedin'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('linkedin') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.eventSetting.fields.linkedin_helper') }}</span>
                                        <small><strong>eg https://linkedin.com/in/newmark</strong></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="instagram">{{ trans('cruds.eventSetting.fields.instagram') }}</label>
                                        <input class="form-control {{ $errors->has('instagram') ? 'is-invalid' : '' }}" type="url" name="instagram" id="instagram" value="{{ old('instagram', $eventSetting->instagram) }}">
                                        @if($errors->has('instagram'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('instagram') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.eventSetting.fields.instagram_helper') }}</span>
                                        <small><strong>eg https://instagram.com/newmark</strong></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="youtube">{{ trans('cruds.eventSetting.fields.youtube') }}</label>
                                        <input class="form-control {{ $errors->has('youtube') ? 'is-invalid' : '' }}" type="url" name="youtube" id="youtube" value="{{ old('youtube', $eventSetting->youtube) }}">
                                        @if($errors->has('youtube'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('youtube') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.eventSetting.fields.youtube_helper') }}</span>
                                        <small><strong>eg https://youtube.com/newmark</strong></small>
                                    </div>
                                    <button type="submit" class="btn btn-primary shadow-none">Save Changes</button>
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

              <div class="ms-panel">
                <div class="ms-panel-body">
                  <h2 class="section-title">Few questions</h2>
                  <div class="accordion has-gap ms-accordion-chevron" id="accordionExample4">
                    <div class="card">
                      <div class="card-header" data-toggle="collapse" role="button" data-target="#collapseTen"
                        aria-expanded="true" aria-controls="collapseTen">
                        <span class="has-icon"> <i class="flaticon-email"></i> Lorem Ipsum has been the industry
                          standard dummy text </span>
                      </div>

                      <div id="collapseTen" class="collapse" data-parent="#accordionExample4">
                        <div class="card-body">
                          Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative
                          approaches to corporate strategy foster collaborative thinking to further the overall
                          value proposition.
                          Organically grow the holistic world view of disruptive innovation via workplace diversity
                          and empowerment.
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" data-toggle="collapse" role="button" data-target="#collapseEleven"
                        aria-expanded="false" aria-controls="collapseEleven">
                        <span class="has-icon"> <i class="flaticon-start"></i> Lorem Ipsum has been the industry
                          standard dummy text </span>
                      </div>

                      <div id="collapseEleven" class="collapse" data-parent="#accordionExample4">
                        <div class="card-body">
                          Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative
                          approaches to corporate strategy foster collaborative thinking to further the overall
                          value proposition.
                          Organically grow the holistic world view of disruptive innovation via workplace diversity
                          and empowerment.
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" data-toggle="collapse" role="button" data-target="#collapseTwelve"
                        aria-expanded="false" aria-controls="collapseTwelve">
                        <span class="has-icon"> <i class="flaticon-conversation"></i> Lorem Ipsum has been the
                          industry standard dummy text </span>
                      </div>

                      <div id="collapseTwelve" class="collapse" data-parent="#accordionExample4">
                        <div class="card-body">
                          Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative
                          approaches to corporate strategy foster collaborative thinking to further the overall
                          value proposition.
                          Organically grow the holistic world view of disruptive innovation via workplace diversity
                          and empowerment.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <!-- second tab -->

        <div role="tabpanel" class="tab-pane fade" id="tab14">
          <div class="row">
            <div class="col-xl-12 col-md-12">
            <div class="add-company">
                @can('event_setting_access')
                <button class="btn btn-info btn-sm mb-4" data-toggle="modal" data-target="#addCompanyModal"><i class="fa fa-plus"></i> Add Company</button>
                <button class="btn btn-warning btn-sm mb-4" data-toggle="modal" data-target="#csvImportModal">
                    <i class="fa fa-copy"></i> {{ trans('global.app_csvImport') }}
                </button>
                @include('csvImport.modal', ['model' => 'Company', 'route' => 'admin.companies.parseCsvImport'])
                {{-- add company modal --}} 
                <div class="modal fade events" id="addCompanyModal" tabindex="-1" role="dialog" aria-labelledby="addCompanyModal">
                    <div class="modal-dialog modal-dialog-centered modal-lg modal-min" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <form method="POST" action="{{ route("admin.companies.store") }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <h2>Add Company</h2>
                                    <p class="text-italic">The field labels marked with * are required input fields.</p>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="required" for="name">{{ trans('cruds.company.fields.name') }} <span class="text-danger">*</span></label>
                                        <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                                        @if($errors->has('name'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('name') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.company.fields.name_helper') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="website">{{ trans('cruds.company.fields.website') }}</label>
                                        <input class="form-control {{ $errors->has('website') ? 'is-invalid' : '' }}" type="url" name="website" id="website" value="{{ old('website', '') }}">
                                        @if($errors->has('website'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('website') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.company.fields.website_helper') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="headquarters">{{ trans('cruds.company.fields.headquarters') }}</label>
                                        <input class="form-control {{ $errors->has('headquarters') ? 'is-invalid' : '' }}" type="text" name="headquarters" id="headquarters" value="{{ old('headquarters', '') }}">
                                        @if($errors->has('headquarters'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('headquarters') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.company.fields.headquarters_helper') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="type">{{ trans('cruds.company.fields.type') }}</label>
                                        <input class="form-control {{ $errors->has('type') ? 'is-invalid' : '' }}" type="text" name="type" id="type" value="{{ old('type', '') }}">
                                        @if($errors->has('type'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('type') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.company.fields.type_helper') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="industry">{{ trans('cruds.company.fields.industry') }}</label>
                                        <input class="form-control {{ $errors->has('industry') ? 'is-invalid' : '' }}" type="text" name="industry" id="industry" value="{{ old('industry', '') }}">
                                        @if($errors->has('industry'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('industry') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.company.fields.industry_helper') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="facebook">{{ trans('cruds.company.fields.facebook') }}</label>
                                        <input class="form-control {{ $errors->has('facebook') ? 'is-invalid' : '' }}" type="text" name="facebook" id="facebook" value="{{ old('facebook', '') }}">
                                        @if($errors->has('facebook'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('facebook') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.company.fields.facebook_helper') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="twitter">{{ trans('cruds.company.fields.twitter') }}</label>
                                        <input class="form-control {{ $errors->has('twitter') ? 'is-invalid' : '' }}" type="text" name="twitter" id="twitter" value="{{ old('twitter', '') }}">
                                        @if($errors->has('twitter'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('twitter') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.company.fields.twitter_helper') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="instagram">{{ trans('cruds.company.fields.instagram') }}</label>
                                        <input class="form-control {{ $errors->has('instagram') ? 'is-invalid' : '' }}" type="text" name="instagram" id="instagram" value="{{ old('instagram', '') }}">
                                        @if($errors->has('instagram'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('instagram') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.company.fields.instagram_helper') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="linkedin">{{ trans('cruds.company.fields.linkedin') }}</label>
                                        <input class="form-control {{ $errors->has('linkedin') ? 'is-invalid' : '' }}" type="text" name="linkedin" id="linkedin" value="{{ old('linkedin', '') }}">
                                        @if($errors->has('linkedin'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('linkedin') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.company.fields.linkedin_helper') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="youtube">{{ trans('cruds.company.fields.youtube') }}</label>
                                        <input class="form-control {{ $errors->has('youtube') ? 'is-invalid' : '' }}" type="text" name="youtube" id="youtube" value="{{ old('youtube', '') }}">
                                        @if($errors->has('youtube'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('youtube') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.company.fields.youtube_helper') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">{{ trans('cruds.company.fields.phone') }}</label>
                                        <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', '') }}">
                                        @if($errors->has('phone'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('phone') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.company.fields.phone_helper') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">{{ trans('cruds.company.fields.email') }}</label>
                                        <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', '') }}">
                                        @if($errors->has('email'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('email') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.company.fields.email_helper') }}</span>
                                    </div>
                                </div>
                            </div>
                          
                            <div class="form-group">
                                <label for="about">{{ trans('cruds.company.fields.about') }}</label>
                                <textarea class="form-control ckeditor {{ $errors->has('about') ? 'is-invalid' : '' }}" name="about" id="about">{!! old('about') !!}</textarea>
                                @if($errors->has('about'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('about') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.company.fields.about_helper') }}</span>
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
            @foreach($companies as $key => $company)
                <div class="col-xl-3 col-md-3">
                <div class="ms-panel">
                    <div class="ms-panel-body">
                    <a href="single-company.html">
                        <div class="campany-card-logo text-center">
                            @if($company->logo)
                                <img src="{{ $company->logo->getUrl() }}" class="card-img-top company-display-logo">
                            @else
                                <img src="data:image/jpeg;base64,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" class="card-img-top company-display-logo">
                            @endif
                        </div>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    </a>
                    </div>
                </div>
                </div>
            @endforeach


          </div>
        </div>

        <div role="tabpanel" class="tab-pane fade" id="tab15">

          <div class="row">
            <div class="col-xl-12 col-md-12">
              <div class="ms-panel">
                <div class="ms-panel-body text-center">
                  <h2 class="text-danger">Coming Soon!!</h2>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div role="tabpanel" class="tab-pane fade" id="tab16">

          <div class="row">
            <div class="col-xl-12 col-md-12">
              <div class="ms-panel">
                <div class="ms-panel-body text-center">
                  <h2 class="text-danger">Coming Soon!!</h2>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div role="tabpanel" class="tab-pane fade" id="tab17">

          <div class="row">
            <div class="col-xl-12 col-md-12">
              <div class="ms-panel">
                <div class="ms-panel-body text-center">
                  <h2 class="text-danger">Coming Soon!!</h2>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div role="tabpanel" class="tab-pane fade" id="tab18">

          <div class="row">
            <div class="col-xl-12 col-md-12">
              <div class="ms-panel">
                <div class="ms-panel-body text-center">
                  <h2 class="text-danger">Coming Soon!!</h2>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div role="tabpanel" class="tab-pane fade" id="tab19">

          <div class="row">
            <div class="col-xl-12 col-md-12">
              <div class="ms-panel">
                <div class="ms-panel-body text-center">
                  <h2 class="text-danger">Coming Soon!!</h2>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div role="tabpanel" class="tab-pane fade" id="tab20">

          <div class="row">
            <div class="col-xl-12 col-md-12">
              <div class="ms-panel">
                <div class="ms-panel-body text-center">
                  <h2 class="text-danger">Coming Soon!!</h2>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div role="tabpanel" class="tab-pane fade" id="tab21">

          <div class="row">
            <div class="col-xl-12 col-md-12">
              <div class="ms-panel">
                <div class="ms-panel-body text-center">
                  <h2 class="text-danger">Coming Soon!!</h2>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div role="tabpanel" class="tab-pane fade" id="tab22">

          <div class="row">
            <div class="col-xl-12 col-md-12">
              <div class="ms-panel">
                <div class="ms-panel-body text-center">
                  <h2 class="text-danger">Coming Soon!!</h2>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div role="tabpanel" class="tab-pane fade" id="tab23">

            <div class="row">
              <div class="col-xl-12 col-md-12">
                <div class="ms-panel">
                  <div class="ms-panel-body text-center">
                    <h2 class="text-danger">Coming Soon!!</h2>
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
    success: function (file, response) {
      $('form').find('input[name="event_logo"]').remove()
      $('form').append('<input type="hidden" name="event_logo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="event_logo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($eventSetting) && $eventSetting->event_logo)
      var file = {!! json_encode($eventSetting->event_logo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="event_logo" value="' + file.file_name + '">')
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
    success: function (file, response) {
      $('form').append('<input type="hidden" name="sliders[]" value="' + response.name + '">')
      uploadedSlidersMap[file.name] = response.name
    },
    removedfile: function (file) {
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
    init: function () {
@if(isset($eventSetting) && $eventSetting->sliders)
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

{{-- create company --}}
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
//     init: function () {
// @if(isset($company) && $company->logo)
//       var file = {!! json_encode($company->logo) !!}
//           this.options.addedfile.call(this, file)
//       this.options.thumbnail.call(this, file, file.preview)
//       file.previewElement.classList.add('dz-complete')
//       $('form').append('<input type="hidden" name="logo" value="' + file.file_name + '">')
//       this.options.maxFiles = this.options.maxFiles - 1
// @endif
//     },
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
    //   file.previewElement.classList.add('dz-complete')
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
            //   file.previewElement.classList.add('dz-complete')
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
