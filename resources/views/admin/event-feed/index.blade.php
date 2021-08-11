@extends('layouts.main')

@section('title')
    Speaker
@endsection

@section('css')
    <style>
        input::placeholder,
        textarea::placeholder {
            color: #999;
            font-size: 13px
        }

        .ms-list-item a {
            color: #337ab7 !important;
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
                        <li role="presentation"><a class="active" href="{{ route('admin.view.event-feed') }}"> <i
                                    class="flaticon-chat"></i> <br>Event Feed </a></li>
                        <li role="presentation"><a href="{{ route('admin.view.speaker') }}"> <i class="flaticon-user"></i>
                                <br>Speakers </a></li>
                        <li role="presentation"><a href="{{ route('admin.companies.index') }}"> <i
                                    class="flaticon-user"></i> <br>Companies </a></li>
                        <li role="presentation"><a href="{{ route('admin.view.attendee') }}"> <i
                                    class="flaticon-user"></i> <br>Attendees </a></li>
                        <li role="presentation"><a href="{{ route('admin.view.meeting') }}"> <i
                                    class="flaticon-layers"></i> <br>Meetings </a></li>
                    </ul>
                </div>
            </div>

            <div class="tab-content">

                <div role="tabpanel" class="tab-pane active show fade in" id="tab23">

                    <div class="row">
                        <div class="col-xl-9 col-md-12">
                            <div class="row">
                                <div class="col-xl-12 col-md-12">
                                    <div class="ms-panel">
                                        <div class="ms-panel-body">
                                            <div class="row no-gutters">
                                                <div class="col-xl-1 col-md-12">
                                                    <img src="https://st.depositphotos.com/1779253/5140/v/600/depositphotos_51405259-stock-illustration-male-avatar-profile-picture-use.jpg"
                                                        class="ms-img-round ms-img-small" alt="This is another feature">
                                                </div>
                                                <div class="col-xl-11 col-md-12">
                                                    <h4>Have something on your mind? Share it with the community....</h4>
                                                    <form method="POST" action="{{ route('admin.posts.store') }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        {{-- <div class="mb-2">
                                                            <input
                                                                class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
                                                                type="text" name="title" id="title"
                                                                placeholder="Enter topic...."
                                                                value="{{ old('title', '') }}" required>
                                                        </div> --}}
                                                        <div class="mb-1 mt-4">
                                                            {{-- <label for="post">Body</label> --}}
                                                            <textarea
                                                                class="form-control ckeditor {{ $errors->has('body') ? 'is-invalid' : '' }}"
                                                                placeholder="write something......" name="body"
                                                                id="body">{!! old('body') !!}</textarea>
                                                            @if ($errors->has('body'))
                                                                <div class="invalid-feedback">
                                                                    {{ $errors->first('body') }}
                                                                </div>
                                                            @endif
                                                            <input type="hidden" name="created_by_id"
                                                                value="{{ Auth::user()->id }}">
                                                            {{-- <textarea name="post" id="post" cols="30" rows="10"
                                                                class="form-control"
                                                                placeholder="write something......."></textarea> --}}
                                                        </div>
                                                        <button type="submit"
                                                            class="btn btn-chat btn-pill btn-sm float-right">publish</button>
                                                    </form>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                @foreach ($posts as $key => $post)
                                    <div class="col-xl-12 col-md-12">
                                        <div class="ms-panel ms-panel-fh">
                                            <div class="ms-panel-body p-0">
                                                <ul class="ms-list ms-feed ms-twitter-feed">

                                                    <li class="ms-list-item">
                                                        <div class="media clearfix">
                                                            <img src="https://st.depositphotos.com/1779253/5140/v/600/depositphotos_51405259-stock-illustration-male-avatar-profile-picture-use.jpg"
                                                                class="ms-img-round ms-img-small" alt="people">

                                                            <div class="media-body">
                                                                <h4 class="ms-feed-user">
                                                                    {{ $post->created_by->avatar }}
                                                                    {{ $post->created_by->name ?? '' }} <span
                                                                        class="my-2 d-block ">{{ $post->created_at->diffForHumans() }}
                                                                    </span></h4>
                                                                <p>
                                                                    {!! $post->body ?? '' !!}
                                                                </p>
                                                                <div class="ms-feed-controls">
                                                                    <span>
                                                                        <i class="fa fa-comments"></i>16</span>
                                                                    <span>
                                                                        <i class="fa fa-heart"></i> 3
                                                                    </span>
                                                                    <span>
                                                                        <i class="material-icons">reply</i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>

                        <div class="col-xl-3 col-md-12">
                            <div class="ms-panel">
                                <div class="ms-panel-body">
                                    <form class="ms-form">
                                        <div class="ms-form-group my-0 mb-0 has-icon fs-14">
                                            <input type="search" class="ms-form-input" name="search"
                                                placeholder="Search here..." value="">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="ms-panel">
                                <div class="ms-panel-body">
                                    <h3 class="text-center">Something here</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
