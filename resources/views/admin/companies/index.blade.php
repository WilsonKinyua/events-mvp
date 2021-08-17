{{-- @extends('layouts.admin')
@section('content')
@can('company_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.companies.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.company.title_singular') }}
            </a>
            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'Company', 'route' => 'admin.companies.parseCsvImport'])
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.company.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Company">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.company.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.company.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.company.fields.logo') }}
                        </th>
                        <th>
                            {{ trans('cruds.company.fields.cover_image') }}
                        </th>
                        <th>
                            {{ trans('cruds.company.fields.website') }}
                        </th>
                        <th>
                            {{ trans('cruds.company.fields.headquarters') }}
                        </th>
                        <th>
                            {{ trans('cruds.company.fields.type') }}
                        </th>
                        <th>
                            {{ trans('cruds.company.fields.industry') }}
                        </th>
                        <th>
                            {{ trans('cruds.company.fields.facebook') }}
                        </th>
                        <th>
                            {{ trans('cruds.company.fields.twitter') }}
                        </th>
                        <th>
                            {{ trans('cruds.company.fields.instagram') }}
                        </th>
                        <th>
                            {{ trans('cruds.company.fields.linkedin') }}
                        </th>
                        <th>
                            {{ trans('cruds.company.fields.youtube') }}
                        </th>
                        <th>
                            {{ trans('cruds.company.fields.phone') }}
                        </th>
                        <th>
                            {{ trans('cruds.company.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.company.fields.downloads') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($companies as $key => $company)
                        <tr data-entry-id="{{ $company->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $company->id ?? '' }}
                            </td>
                            <td>
                                {{ $company->name ?? '' }}
                            </td>
                            <td>
                                @if ($company->logo)
                                    <a href="{{ $company->logo->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $company->logo->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                @if ($company->cover_image)
                                    <a href="{{ $company->cover_image->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $company->cover_image->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                {{ $company->website ?? '' }}
                            </td>
                            <td>
                                {{ $company->headquarters ?? '' }}
                            </td>
                            <td>
                                {{ $company->type ?? '' }}
                            </td>
                            <td>
                                {{ $company->industry ?? '' }}
                            </td>
                            <td>
                                {{ $company->facebook ?? '' }}
                            </td>
                            <td>
                                {{ $company->twitter ?? '' }}
                            </td>
                            <td>
                                {{ $company->instagram ?? '' }}
                            </td>
                            <td>
                                {{ $company->linkedin ?? '' }}
                            </td>
                            <td>
                                {{ $company->youtube ?? '' }}
                            </td>
                            <td>
                                {{ $company->phone ?? '' }}
                            </td>
                            <td>
                                {{ $company->email ?? '' }}
                            </td>
                            <td>
                                @foreach ($company->downloads as $key => $media)
                                    <a href="{{ $media->getUrl() }}" target="_blank">
                                        {{ trans('global.view_file') }}
                                    </a>
                                @endforeach
                            </td>
                            <td>
                                @can('company_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.companies.show', $company->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('company_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.companies.edit', $company->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('company_delete')
                                    <form action="{{ route('admin.companies.destroy', $company->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('company_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.companies.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 2, 'asc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Company:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });

})

</script>
@endsection --}}

@extends('layouts.main')

@section('title')
    Meeting
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
                        <li role="presentation"><a href="{{ route('admin.view.speaker') }}"> <i class="flaticon-user"></i>
                                <br>Speakers </a></li>
                        <li role="presentation"><a class="active" href="{{ route('admin.companies.index') }}"> <i
                                    class="flaticon-user"></i> <br>Companies </a></li>
                        <li role="presentation"><a href="{{ route('admin.view.attendee') }}"> <i
                                    class="flaticon-user"></i> <br>Attendees </a></li>
                        <li role="presentation"><a href="{{ route('admin.view.meeting') }}"> <i
                                    class="flaticon-layers"></i>
                                <br>My Meetings </a></li>
                    </ul>
                </div>
            </div>


            <div class="tab-content">

                <div role="tabpanel" class="tab-pane active show fade in" id="tab23">

                    <div class="row">
                        {{-- add company --}}
                        <div class="col-xl-12 col-md-12">
                            <div class="add-company">
                                @can('event_setting_create')
                                    <button class="btn btn-info btn-sm mb-4" data-toggle="modal"
                                        data-target="#addCompanyModal"><i class="fa fa-plus"></i> Add Company</button>
                                    <button class="btn btn-warning btn-sm mb-4" data-toggle="modal"
                                        data-target="#csvImportModal">
                                        <i class="fa fa-copy"></i> {{ trans('global.app_csvImport') }}
                                    </button>
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
                                                                <h2>Add Company</h2>
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
                                                                        <option disabled selected>Select option</option>
                                                                        <option value="sponsor">Sponsor</option>
                                                                        <option value="non-sponsor">non-sponsors</option>
                                                                    </select>
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
                                                            <div class="col-md-4">
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
                                                            <div class="col-md-4">
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
                                                            <div class="col-md-4">
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
                                                                        for="email">{{ trans('cruds.company.fields.email') }}</label>
                                                                    <input
                                                                        class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                                                        type="text" name="email" id="email"
                                                                        value="{{ old('email', '') }}">
                                                                    @if ($errors->has('email'))
                                                                        <div class="invalid-feedback">
                                                                            {{ $errors->first('email') }}
                                                                        </div>
                                                                    @endif
                                                                    <span
                                                                        class="help-block">{{ trans('cruds.company.fields.email_helper') }}</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label
                                                                for="about">{{ trans('cruds.company.fields.about') }}</label>
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

                        <div class="col-xl-12">
                            <h2 class="ms-active-site d-inline-block">
                                Sponsors
                            </h2>
                        </div>
                        <div class="col-xl-2 col-md-2">
                            <hr>
                        </div>
                        <div class="col-xl-10 col-md-10"></div>
                        {{-- companies list --}}
                        @foreach ($companies_sponsor as $key => $company)
                            <div class="col-xl-2 col-md-2">
                                <div class="ms-panel">
                                    <div class="ms-panel-body">
                                        <a href="{{ route('admin.companies.show', $company->id) }}">
                                            <div class="campany-card-logo text-center">
                                                @if ($company->logo)
                                                    <img src="{{ $company->logo->getUrl() }}"
                                                        class="card-img-top company-display-logo">
                                                @else
                                                    <img src="https://www.latermicamalaga.com/book/files/uploads/logo-placeholder@2x.png"
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

                        <div class="col-xl-12 col-md-12">
                            <hr>
                        </div>
                        <div class="col-xl-12">
                            <h2 class="ms-active-site d-inline-block">
                                Participating Companies
                            </h2>
                        </div>
                        <div class="col-xl-2 col-md-2">
                            <hr>
                        </div>
                        <div class="col-xl-10 col-md-10"></div>
                        @foreach ($companies_non_sponsor as $key => $company)
                            <div class="col-xl-2 col-md-2">
                                <div class="ms-panel">
                                    <div class="ms-panel-body">
                                        <a href="{{ route('admin.companies.show', $company->id) }}">
                                            <div class="campany-card-logo text-center">
                                                @if ($company->logo)
                                                    <img src="{{ $company->logo->getUrl() }}"
                                                        class="card-img-top company-display-logo">
                                                @else
                                                    <img src="https://www.latermicamalaga.com/book/files/uploads/logo-placeholder@2x.png"
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
                // @endif
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
