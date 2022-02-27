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

            {{-- carousel panel --}}
            @include('partials.sliders')

            <div class="tab-content">

                <div role="tabpanel" class="tab-pane active show fade in" id="tab23">

                    <div class="row">
                        <div class="col-xl-9 col-md-12">
                            <div class="row">
                                @can('event_feed_create')
                                    <div class="col-xl-12 col-md-12">
                                        <div class="ms-panel">
                                            <div class="ms-panel-body">
                                                <div class="row no-gutters">
                                                    <div class="col-xl-1 col-md-12">
                                                        @if (Auth::user()->avatar)
                                                            <img src="{{ Auth::user()->avatar->getUrl() }}"
                                                                class="ms-img-round ms-img-small"
                                                                alt="{{ Auth::user()->name }}">
                                                        @else
                                                            <img src="{{ asset('img/avatar.png') }}"
                                                                class="ms-img-round ms-img-small"
                                                                alt="{{ Auth::user()->name }}">
                                                        @endif
                                                    </div>
                                                    <div class="col-xl-11 col-md-12">
                                                        <h4>Have something on your mind? Share it with the community</h4>
                                                        <form method="POST" action="{{ route('admin.posts.store') }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="mb-1 mt-4">
                                                                <textarea
                                                                    class="form-control ckeditor {{ $errors->has('body') ? 'is-invalid' : '' }}"
                                                                    placeholder="write something......" name="body" id="body"
                                                                    required>{!! old('body') !!}</textarea>
                                                                @if ($errors->has('body'))
                                                                    <div class="invalid-feedback">
                                                                        {{ $errors->first('body') }}
                                                                    </div>
                                                                @endif
                                                                <input type="hidden" name="created_by_id"
                                                                    value="{{ Auth::user()->id }}">
                                                            </div>
                                                            <button type="submit"
                                                                class="btn btn-chat btn-pill btn-sm float-right">publish</button>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endcan
                                @foreach ($posts as $key => $post)
                                    <div class="col-xl-12 col-md-12">
                                        <div class="ms-panel ms-panel-fh">
                                            <div class="ms-panel-body p-0">
                                                <ul class="ms-list ms-feed ms-twitter-feed">

                                                    <li class="ms-list-item">
                                                        <div class="media clearfix">
                                                            @if ($post->created_by->avatar)
                                                                <img src="{{ $post->created_by->avatar->getUrl() }}"
                                                                    class="ms-img-round ms-img-small"
                                                                    alt="User Post Avatar">
                                                            @else
                                                                <img src="{{ asset('img/avatar.png') }}"
                                                                    class="ms-img-round ms-img-small"
                                                                    alt="User Post Avatar">
                                                            @endif
                                                            <div class="media-body">
                                                                <h4 class="ms-feed-user">
                                                                    <span class="text-capitalize">
                                                                        {{ $post->created_by->name ?? '' }}</span> <span
                                                                        class="my-2 d-block ">{{ $post->created_at->diffForHumans() }}
                                                                    </span>
                                                                </h4>
                                                                <p>
                                                                    {!! $post->body ?? '' !!}
                                                                </p>
                                                                <hr>
                                                                {{-- <div class="ms-feed-controls">
                                                                    <span>
                                                                        <i class="fa fa-comments"></i>16</span>
                                                                    <span>
                                                                        <i class="fa fa-heart"></i> 3
                                                                    </span>
                                                                    <span>
                                                                        <i class="material-icons">reply</i>
                                                                    </span>
                                                                </div> --}}
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
