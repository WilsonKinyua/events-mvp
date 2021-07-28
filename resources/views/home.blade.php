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
              <div class="carousel-item">
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
          </ul>
        </div>
      </div>
      <div class="tab-content">


        <div role="tabpanel" class="tab-pane active show fade in" id="tab13">
          <div class="row">

            <div class="col-xl-8 col-md-12">
              <div class="ms-panel">
                <div class="ms-panel-body">
                  <h2 class="section-title">About</h2>

                  <div class="row">
                    <div class="col-xl-3 col-md-3">
                      <div class="company-logo">
                        <img src="https://cdn.hubilo.com/logo/1402283/300/1596_9068_763672001621839178.jpg"
                          class="img-fluid rounded-start" alt="Company Logo">
                      </div>
                    </div>
                    <div class="col-xl-8 col-md-12">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non elit nisl. Class aptent
                        taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                        Aenean luctus, justo id pellentesque imperdiet, augue metus ornare quam, in pulvinar massa
                        erat
                        nec dui. Nam at facilisis nulla.
                      </p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non elit nisl. Class aptent
                        taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                        Aenean luctus, justo id pellentesque imperdiet, augue metus ornare quam, in pulvinar massa
                        erat
                        nec dui. Nam at facilisis nulla.
                      </p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non elit nisl. Class aptent
                        taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                        Aenean luctus, justo id pellentesque imperdiet, augue metus ornare quam, in pulvinar massa
                        erat
                        nec dui. Nam at facilisis nulla.
                      </p>
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