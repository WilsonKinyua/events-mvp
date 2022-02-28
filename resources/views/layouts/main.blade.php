<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ trans('panel.site_title') }} - @yield('title') </title>
    <!-- Iconic Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('iconic-fonts/flat-icons/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('iconic-fonts/cryptocoins/cryptocoins.css') }}">
    <link rel="stylesheet" href="{{ asset('iconic-fonts/cryptocoins/cryptocoins-colors.css') }}">
    {{-- Drop zone --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    {{-- select --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
    <!-- Bootstrap-->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- jQuery UI -->
    <link href="{{ asset('css/jquery-ui.min.css') }}" rel="stylesheet">
    {{-- datatables --}}
    <link href="{{ asset('css/datatables.min.css') }}" rel="stylesheet">
    <!-- Slick Slider.css -->
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    <!-- styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon.ico') }}">
    {{-- toastr --}}
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    {{-- custom css --}}
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    {{-- Datepicker --}}
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"
        rel="stylesheet" />

    @yield('css')

</head>

<body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">


    <!-- Preloader -->
    {{-- <div id="preloader-wrap">
    <div class="spinner spinner-8">
      <div class="ms-circle1 ms-child"></div>
      <div class="ms-circle2 ms-child"></div>
      <div class="ms-circle3 ms-child"></div>
      <div class="ms-circle4 ms-child"></div>
      <div class="ms-circle5 ms-child"></div>
      <div class="ms-circle6 ms-child"></div>
      <div class="ms-circle7 ms-child"></div>
      <div class="ms-circle8 ms-child"></div>
      <div class="ms-circle9 ms-child"></div>
      <div class="ms-circle10 ms-child"></div>
      <div class="ms-circle11 ms-child"></div>
      <div class="ms-circle12 ms-child"></div>
    </div>
  </div> --}}

    <!-- Overlays -->
    <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
    <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity" data-toggle="slideRight">
    </div>

    <!-- Sidebar Navigation Left -->


    <!-- Sidebar Right -->
    @include('partials.sidebar-right')

    <!-- Main Content -->
    <main class="body-content">

        <!-- Navigation Bar -->
        @include('partials.top-navbar')


        <!-- Body Content Wrapper -->
        <div class="ms-content-wrapper">
            @if (session('message'))
                <div class="row mb-2">
                    <div class="col-lg-12">
                        <div class="alert alert-success" role="alert">{{ session('message') }}</div>
                    </div>
                </div>
            @endif
            @if ($errors->count() > 0)
                <div class="alert alert-danger">
                    <ul class="list-unstyled">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{-- body content --}}
            @yield('content')


    </main>

    <!-- Logout -->
    <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>

    <!-- SCRIPTS -->
    <!-- Global Required Scripts Start -->
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/perfect-scrollbar.js') }}"> </script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"> </script>
    <!-- Global Required Scripts End -->

    <!-- Page Specific Scripts Start -->
    <script src="{{ asset('js/slick.min.js') }}"> </script>
    <script src="{{ asset('js/moment.js') }}"> </script>
    <script src="{{ asset('js/jquery.webticker.min.js') }}"> </script>
    <script src="{{ asset('js/Chart.bundle.min.js') }}"> </script>
    <script src="{{ asset('js/Chart.Financial.js') }}"> </script>
    <script src="{{ asset('js/cryptocurrency.js') }}"> </script>
    <!-- Page Specific Scripts Finish -->

    <!-- Mystic core JavaScript -->
    <script src="{{ asset('js/framework.js') }}"></script>

    <!-- Settings -->
    <script src="{{ asset('js/settings.js') }}"></script>
    {{-- Dropzone --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    {{-- <script src="{{ asset('js/main.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
    {{-- notification --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script src="{{ asset('js/datatables.min.js') }}"> </script>
    {{-- <script src="{{ asset('js/data-tables.js')}}"> </script> --}}

    <script>
        @if (Session::has('success'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true
            }
            // toastr.options.positionClass = 'toast-bottom-right';
            toastr.success("{{ session('success') }}");
        @endif

        @if (Session::has('error'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true
            }
            toastr.error("{{ session('error') }}");
        @endif

        @if (Session::has('info'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true
            }
            toastr.info("{{ session('info') }}");
        @endif

        @if (Session::has('warning'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true
            }
            toastr.warning("{{ session('warning') }}");
        @endif
    </script>
    <script src="//cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js">
    </script>
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script> --}}
    <script src="{{ asset('js/main.js') }}"></script>
    @yield('scripts')
</body>


</html>
