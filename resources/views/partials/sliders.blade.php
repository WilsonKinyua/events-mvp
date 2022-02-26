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
            <img class="pattern" src="{{ asset('img/pattern.png') }}" alt="Pattern">

            @include('partials.center-navabar')

            {{-- Sliders settings --}}
            {{-- @can('event_setting_create')
                <a class="edit-button m-3" title="Edit Sliders Images" data-toggle="modal" data-target="#slidersmodal"> <i
                        class="fa fa-edit"></i></a>
                <div class="modal fade events" id="slidersmodal" tabindex="-1" role="dialog" aria-labelledby="slidersmodal">
                    <div class="modal-dialog modal-dialog-centered modal-lg modal-min" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                <form method="POST"
                                    action="{{ route('admin.event-settings.update', [$eventSetting->id]) }}"
                                    enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group">
                                        <label class="required"
                                            for="sliders">{{ trans('cruds.eventSetting.fields.sliders') }}</label>
                                        <div class="needsclick dropzone {{ $errors->has('sliders') ? 'is-invalid' : '' }}"
                                            id="sliders-dropzone">
                                        </div>
                                        @if ($errors->has('sliders'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('sliders') }}
                                            </div>
                                        @endif
                                        <span
                                            class="help-block">{{ trans('cruds.eventSetting.fields.sliders_helper') }}</span>
                                    </div>
                                    <button type="submit" class="btn btn-primary shadow-none">Upload</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endcan --}}
        </ul>
    </div>
</div>


{{-- <div class="ms-panel">
    <div class="">
        <div id="arrowSlider" class="ms-arrow-slider carousel slide" data-ride="carousel" data-interval="4000">
            <div class="carousel-inner">

                @if (count($eventSetting->sliders) > 0)
                    @foreach ($eventSetting->sliders as $key => $media)
                        @if ($key == 0)
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ $media->first()->getUrl() }}" alt="First slide">
                            </div>
                            @continue
                        @endif
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ $media->getUrl() }}" alt="{{ $media->file_name }}">
                        </div>
                    @endforeach
                @else
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
                @endif
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
            <img class="pattern" src="{{ asset('img/pattern.png') }}" alt="Pattern">

            @include('partials.center-navabar')

            @can('event_setting_create')
                <a class="edit-button m-3" title="Edit Sliders Images" data-toggle="modal" data-target="#slidersmodal"> <i
                        class="fa fa-edit"></i></a>
                <div class="modal fade events" id="slidersmodal" tabindex="-1" role="dialog" aria-labelledby="slidersmodal">
                    <div class="modal-dialog modal-dialog-centered modal-lg modal-min" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                <form method="POST"
                                    action="{{ route('admin.event-settings.update', [$eventSetting->id]) }}"
                                    enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group">
                                        <label class="required"
                                            for="sliders">{{ trans('cruds.eventSetting.fields.sliders') }}</label>
                                        <div class="needsclick dropzone {{ $errors->has('sliders') ? 'is-invalid' : '' }}"
                                            id="sliders-dropzone">
                                        </div>
                                        @if ($errors->has('sliders'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('sliders') }}
                                            </div>
                                        @endif
                                        <span
                                            class="help-block">{{ trans('cruds.eventSetting.fields.sliders_helper') }}</span>
                                    </div>
                                    <button type="submit" class="btn btn-primary shadow-none">Upload</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endcan
        </ul>
    </div>
</div> --}}
