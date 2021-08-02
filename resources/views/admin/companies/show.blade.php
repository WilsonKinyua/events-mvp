{{-- @extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.company.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.companies.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.company.fields.id') }}
                        </th>
                        <td>
                            {{ $company->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.company.fields.name') }}
                        </th>
                        <td>
                            {{ $company->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.company.fields.about') }}
                        </th>
                        <td>
                            {!! $company->about !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.company.fields.logo') }}
                        </th>
                        <td>
                            @if($company->logo)
                                <a href="{{ $company->logo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $company->logo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.company.fields.cover_image') }}
                        </th>
                        <td>
                            @if($company->cover_image)
                                <a href="{{ $company->cover_image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $company->cover_image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.company.fields.website') }}
                        </th>
                        <td>
                            {{ $company->website }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.company.fields.headquarters') }}
                        </th>
                        <td>
                            {{ $company->headquarters }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.company.fields.type') }}
                        </th>
                        <td>
                            {{ $company->type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.company.fields.industry') }}
                        </th>
                        <td>
                            {{ $company->industry }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.company.fields.facebook') }}
                        </th>
                        <td>
                            {{ $company->facebook }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.company.fields.twitter') }}
                        </th>
                        <td>
                            {{ $company->twitter }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.company.fields.instagram') }}
                        </th>
                        <td>
                            {{ $company->instagram }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.company.fields.linkedin') }}
                        </th>
                        <td>
                            {{ $company->linkedin }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.company.fields.youtube') }}
                        </th>
                        <td>
                            {{ $company->youtube }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.company.fields.phone') }}
                        </th>
                        <td>
                            {{ $company->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.company.fields.email') }}
                        </th>
                        <td>
                            {{ $company->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.company.fields.downloads') }}
                        </th>
                        <td>
                            @foreach($company->downloads as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.companies.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection --}}

@extends('layouts.main')

@section('title')
    Welcome Back
@endsection
@section("content")
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
                <h1 class="section-title company-name"> About Us</h1>
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
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <div class="col-xl-4 col-md-12">

        <div class="ms-panel">
            <div class="ms-panel-body">
                <h1 class="section-title company-name">Get in touch</h1>
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
                <h1 class="section-title company-name">Downloads</h1>
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