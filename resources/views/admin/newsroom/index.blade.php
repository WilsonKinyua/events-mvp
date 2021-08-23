@extends('layouts.main')

@section('title')
    Meeting
@endsection
@section('css')
    <style>
        .fa-exclamation-triangle {
            font-size: 70px;
            color: #17a2b8;
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
                    </ul>
                </div>
            </div>

            <div class="tab-content">

                <div role="tabpanel" class="tab-pane active show fade in newroom" id="tab23">

                    <div class="row">
                        <!-- News Flash -->
                        <div class="col-md-12">
                            <div class="ms-panel">
                                <div class="ms-panel-body ms-news-flash-container">
                                    <div class="ms-news-update">
                                        <span>News Update</span>
                                    </div>
                                    <ul id="news-flash">
                                        <li data-update="item1">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In non dui purus.
                                                Mauris id lacinia turpis</p>
                                        </li>
                                        <li data-update="item2">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In non dui purus.
                                                Mauris id lacinia turpis</p>
                                        </li>
                                        <li data-update="item3">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In non dui purus.
                                                Mauris id lacinia turpis</p>
                                        </li>
                                        <li data-update="item4">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In non dui purus.
                                                Mauris id lacinia turpis</p>
                                        </li>
                                        <li data-update="item5">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In non dui purus.
                                                Mauris id lacinia turpis</p>
                                        </li>
                                        <li data-update="item6">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In non dui purus.
                                                Mauris id lacinia turpis</p>
                                        </li>
                                        <li data-update="item7">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In non dui purus.
                                                Mauris id lacinia turpis</p>
                                        </li>
                                        <li data-update="item8">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In non dui purus.
                                                Mauris id lacinia turpis</p>
                                        </li>
                                        <li data-update="item9">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In non dui purus.
                                                Mauris id lacinia turpis</p>
                                        </li>
                                        <li data-update="item10">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In non dui purus.
                                                Mauris id lacinia turpis</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="ms-card">
                                        <div class="ms-card-img">
                                            <img src="http://laravelblogs.herokuapp.com/images/13.jpg" alt="card_img">
                                        </div>
                                        <div class="ms-card-body text-center">
                                            <p>Marketing</p>
                                            <h6>Congratulate and thank to Maryam for joining our team</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="ms-card">
                                        <div class="ms-card-img">
                                            <img src="http://laravelblogs.herokuapp.com/images/13.jpg" alt="card_img">
                                        </div>
                                        <div class="ms-card-body text-center">
                                            <p>Marketing</p>
                                            <h6>Congratulate and thank to Maryam for joining our team</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="ms-card">
                                        <div class="ms-card-img">
                                            <img src="http://laravelblogs.herokuapp.com/images/13.jpg" alt="card_img">
                                        </div>
                                        <div class="ms-card-body text-center">
                                            <p>Marketing</p>
                                            <h6>Congratulate and thank to Maryam for joining our team</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="ms-card">
                                        <div class="ms-card-img">
                                            <img src="http://laravelblogs.herokuapp.com/images/13.jpg" alt="card_img">
                                        </div>
                                        <div class="ms-card-body text-center">
                                            <p>Marketing</p>
                                            <h6>Congratulate and thank to Maryam for joining our team</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="ms-card">
                                        <div class="ms-card-img">
                                            <img src="http://laravelblogs.herokuapp.com/images/13.jpg" alt="card_img">
                                        </div>
                                        <div class="ms-card-body text-center">
                                            <p>Marketing</p>
                                            <h6>Congratulate and thank to Maryam for joining our team</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="ms-card">
                                        <div class="ms-card-img">
                                            <img src="http://laravelblogs.herokuapp.com/images/13.jpg" alt="card_img">
                                        </div>
                                        <div class="ms-card-body text-center">
                                            <p>Marketing</p>
                                            <h6>Congratulate and thank to Maryam for joining our team</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="ms-card">
                                        <div class="ms-card-img">
                                            <img src="http://laravelblogs.herokuapp.com/images/13.jpg" alt="card_img">
                                        </div>
                                        <div class="ms-card-body text-center">
                                            <p>Marketing</p>
                                            <h6>Congratulate and thank to Maryam for joining our team</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="ms-card">
                                        <div class="ms-card-img">
                                            <img src="http://laravelblogs.herokuapp.com/images/13.jpg" alt="card_img">
                                        </div>
                                        <div class="ms-card-body text-center">
                                            <p>Marketing</p>
                                            <h6>Congratulate and thank to Maryam for joining our team</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="ms-card">
                                        <div class="ms-card-img">
                                            <img src="http://laravelblogs.herokuapp.com/images/13.jpg" alt="card_img">
                                        </div>
                                        <div class="ms-card-body text-center">
                                            <p>Marketing</p>
                                            <h6>Congratulate and thank to Maryam for joining our team</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-4 col-md-6 col-sm-6">
                                    <nav aria-label="...">
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1"
                                                    aria-disabled="true">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active" aria-current="page">
                                                <a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <form>
                                        <label for="search">Search</label>
                                        <input type="text" name="search" id="search" class="form-control"
                                            placeholder="Search News Title...">
                                    </form>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-body">
                                    <h6>CATEGORIES</h6>
                                    <div class="row">
                                        <div class="col-md-6 mt-2">
                                            <a href="#">
                                                <p> <i class="fa fa-angle-right"></i> Business</p>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mt-2">
                                            <a href="#">
                                                <p><span class="badge badge-primary">23</span></p>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mt-2">
                                            <a href="#">
                                                <p> <i class="fa fa-angle-right"></i> Business</p>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mt-2">
                                            <a href="#">
                                                <p><span class="badge badge-primary">23</span></p>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mt-2">
                                            <a href="#">
                                                <p> <i class="fa fa-angle-right"></i> Business</p>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mt-2">
                                            <a href="#">
                                                <p><span class="badge badge-primary">23</span></p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-body">
                                    <h6>TAGS</h6>
                                    <div class="d-grid gap-2 d-md-block">
                                        <button class="btn btn-category"><a href="#">Animal</a></button>
                                        <button class="btn btn-category"><a href="#">Animal</a></button>
                                        <button class="btn btn-category"><a href="#">Animal</a></button>
                                        <button class="btn btn-category"><a href="#">chicken</a></button>
                                        <button class="btn btn-category"><a href="#">tag</a></button>
                                        <button class="btn btn-category"><a href="#">Just an animal</a></button>
                                        <button class="btn btn-category"><a href="#">tag</a></button>
                                        <button class="btn btn-category"><a href="#">tag</a></button>
                                        <button class="btn btn-category"><a href="#">tag</a></button>
                                        <button class="btn btn-category"><a href="#">Just another Animal</a></button>
                                        <button class="btn btn-category"><a href="#">Animal</a></button>
                                        <button class="btn btn-category"><a href="#">Animal</a></button>
                                        <button class="btn btn-category"><a href="#">Animal</a></button>
                                        <button class="btn btn-category"><a href="#">chicken</a></button>
                                        <button class="btn btn-category"><a href="#">tag</a></button>
                                        <button class="btn btn-category"><a href="#">Just an animal</a></button>
                                        <button class="btn btn-category"><a href="#">tag</a></button>
                                        <button class="btn btn-category"><a href="#">tag</a></button>
                                    </div>
                                    {{-- <div class="row">
                                        <div class="col-md-6 mt-2">
                                            <a href="#"><p> <i class="fa fa-angle-right"></i> Business</p></a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-xl-12 col-md-12">
                            <div class="ms-panel">
                                <div class="ms-panel-body text-center">
                                    <i class="fa fa-exclamation-triangle mb-3"></i>
                                    <h2 class="text-info">Coming Soon!!</h2>
                                </div>
                            </div>
                        </div> --}}

                    </div>


                </div>
            </div>

        </div>

    </div>
@endsection
