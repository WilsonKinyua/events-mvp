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
            <li role="presentation"><a href="#tab14" aria-controls="tab15" role="tab" data-toggle="tab"> <i
                  class="flaticon-user"></i> <br>Companies </a></li>
            <li role="presentation"><a href="#tab15" aria-controls="tab14" role="tab" data-toggle="tab"> <i
                  class="flaticon-chat"></i> <br>Event Feed </a></li>
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
                    @endcan
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

            <div class="col-xl-3 col-md-3">
              <div class="ms-panel">
                <div class="ms-panel-body">
                  <a href="single-company.html">
                    <div class="campany-card-logo">
                      <img src="https://hgcapital.com/wp-content/uploads/2019/03/access-logo-300x84.png"
                        class="card-img-top" alt="...">
                    </div>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                      the card's content.</p>
                  </a>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-3">
              <!-- <div class="ms-panel">
                <div class="ms-panel-body">
                  <div class="row">
                    <div class="col-xl-6 col-md-12">
                      <div class="company-logo">
                        <img src="https://cdn.hubilo.com/exhibitor/1402283/150/4487_8691_432356001624342968.png"
                          class="img-fluid rounded-start" alt="Company Logo">
                      </div>
                    </div>
                    <div class="col-xl-6 col-md-12">
                      <h2 class="section-title mt-4"><a href="single-company.html">Natal Cares</a></h2>
                    </div>
                  </div>


                </div>

              </div> -->

              <div class="ms-panel">
                <div class="ms-panel-body">
                  <a href="single-company.html">
                    <div class="campany-card-logo">
                      <img src="https://hgcapital.com/wp-content/uploads/2019/03/access-logo-300x84.png"
                        class="card-img-top" alt="...">
                    </div>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                      the card's content.</p>
                  </a>
                </div>
              </div>

            </div>


            <div class="col-xl-3 col-md-3">
              <div class="ms-panel">
                <div class="ms-panel-body">
                  <a href="single-company.html">
                    <div class="campany-card-logo">
                      <img src="https://hgcapital.com/wp-content/uploads/2019/03/access-logo-300x84.png"
                        class="card-img-top" alt="...">
                    </div>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                      the card's content.</p>
                  </a>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-3">
              <div class="ms-panel">
                <div class="ms-panel-body">
                  <a href="single-company.html">
                    <div class="campany-card-logo">
                      <img src="https://hgcapital.com/wp-content/uploads/2019/03/access-logo-300x84.png"
                        class="card-img-top" alt="...">
                    </div>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                      the card's content.</p>
                  </a>
                </div>
              </div>
            </div>


            <div class="col-xl-3 col-md-3">
              <div class="ms-panel">
                <div class="ms-panel-body">
                  <a href="single-company.html">
                    <div class="campany-card-logo">
                      <img src="https://hgcapital.com/wp-content/uploads/2019/03/access-logo-300x84.png"
                        class="card-img-top" alt="...">
                    </div>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                      the card's content.</p>
                  </a>
                </div>
              </div>
            </div>


            <div class="col-xl-3 col-md-3">
              <div class="ms-panel">
                <div class="ms-panel-body">
                  <a href="single-company.html">
                    <div class="campany-card-logo">
                      <img src="https://hgcapital.com/wp-content/uploads/2019/03/access-logo-300x84.png"
                        class="card-img-top" alt="...">
                    </div>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                      the card's content.</p>
                  </a>
                </div>
              </div>
            </div>


            <div class="col-xl-3 col-md-3">
              <div class="ms-panel">
                <div class="ms-panel-body">
                  <a href="single-company.html">
                    <div class="campany-card-logo">
                      <img src="https://hgcapital.com/wp-content/uploads/2019/03/access-logo-300x84.png"
                        class="card-img-top" alt="...">
                    </div>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                      the card's content.</p>
                  </a>
                </div>
              </div>
            </div>


            <div class="col-xl-3 col-md-3">
              <div class="ms-panel">
                <div class="ms-panel-body">
                  <a href="single-company.html">
                    <div class="campany-card-logo">
                      <img src="https://hgcapital.com/wp-content/uploads/2019/03/access-logo-300x84.png"
                        class="card-img-top" alt="...">
                    </div>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                      the card's content.</p>
                  </a>
                </div>
              </div>
            </div>


            <div class="col-xl-3 col-md-3">
              <div class="ms-panel">
                <div class="ms-panel-body">
                  <a href="single-company.html">
                    <div class="campany-card-logo">
                      <img src="https://hgcapital.com/wp-content/uploads/2019/03/access-logo-300x84.png"
                        class="card-img-top" alt="...">
                    </div>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                      the card's content.</p>
                  </a>
                </div>
              </div>
            </div>


            <div class="col-xl-3 col-md-3">
              <div class="ms-panel">
                <div class="ms-panel-body">
                  <a href="single-company.html">
                    <div class="campany-card-logo">
                      <img src="https://hgcapital.com/wp-content/uploads/2019/03/access-logo-300x84.png"
                        class="card-img-top" alt="...">
                    </div>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                      the card's content.</p>
                  </a>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-3">
              <div class="ms-panel">
                <div class="ms-panel-body">
                  <a href="single-company.html">
                    <div class="campany-card-logo">
                      <img src="https://hgcapital.com/wp-content/uploads/2019/03/access-logo-300x84.png"
                        class="card-img-top" alt="...">
                    </div>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                      the card's content. </p>
                  </a>
                </div>
              </div>
            </div>


            <div class="col-xl-3 col-md-3">
              <div class="ms-panel">
                <div class="ms-panel-body">
                  <a href="single-company.html">
                    <div class="campany-card-logo">
                      <img src="https://hgcapital.com/wp-content/uploads/2019/03/access-logo-300x84.png"
                        class="card-img-top" alt="...">
                    </div>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                      the card's content.</p>
                  </a>
                </div>
              </div>
            </div>

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
@endsection
