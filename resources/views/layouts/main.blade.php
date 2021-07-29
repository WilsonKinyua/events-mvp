<!DOCTYPE html>
<html lang="en">

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>{{ trans('panel.site_title') }} - @yield('title') </title>
  <!-- Iconic Fonts -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{ asset('vendors/iconic-fonts/flat-icons/flaticon.css')}}">
  <link rel="stylesheet" href="{{ asset('vendors/iconic-fonts/cryptocoins/cryptocoins.css')}}">
  <link rel="stylesheet" href="{{ asset('vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css')}}">
  {{-- Drop zone --}}
  <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- jQuery UI -->
  <link href="{{ asset('assets/css/jquery-ui.min.css')}}" rel="stylesheet">
  <!-- Slick Slider.css -->
  <link href="{{ asset('assets/css/slick.css')}}" rel="stylesheet">
  <!-- styles -->
  <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="https://ems.wezadevelopment.com/asset/img/favicon.ico">
    {{-- toastr --}}
    <link rel="stylesheet" href="{{ asset('assets/css/toastr.min.css')}}">
  @yield('css')

</head>

<body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">


  <!-- Preloader -->
  <!-- <div id="preloader-wrap">
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
  </div> -->

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
        @if(session('message'))
            <div class="row mb-2">
                <div class="col-lg-12">
                    <div class="alert alert-success" role="alert">{{ session('message') }}</div>
                </div>
            </div>
        @endif
        @if($errors->count() > 0)
            <div class="alert alert-danger">
                <ul class="list-unstyled">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{-- body content --}}
        @yield('content')


  </main>

  <!-- Quick bar of the likes of chart -->


  <!-- SCRIPTS -->
  <!-- Global Required Scripts Start -->
  <script src="{{ asset('assets/js/jquery-3.5.1.min.js')}}"></script>
  <script src="{{ asset('assets/js/popper.min.js')}}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('assets/js/perfect-scrollbar.js')}}"> </script>
  <script src="{{ asset('assets/js/jquery-ui.min.js')}}"> </script>
  <!-- Global Required Scripts End -->

  <!-- Page Specific Scripts Start -->
  <script src="{{ asset('assets/js/slick.min.js')}}"> </script>
  <script src="{{ asset('assets/js/moment.js')}}"> </script>
  <script src="{{ asset('assets/js/jquery.webticker.min.js')}}"> </script>
  <script src="{{ asset('assets/js/Chart.bundle.min.js')}}"> </script>
  <script src="{{ asset('assets/js/Chart.Financial.js')}}"> </script>
  <script src="{{ asset('assets/js/cryptocurrency.js')}}"> </script>
  <!-- Page Specific Scripts Finish -->

  <!-- Mystic core JavaScript -->
  <script src="{{ asset('assets/js/framework.js')}}"></script>

  <!-- Settings -->
  <script src="{{ asset('assets/js/settings.js')}}"></script>
  {{-- Dropzone --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
  {{-- <script src="{{ asset('js/main.js') }}"></script> --}}
    {{-- notification --}}
    <script src="{{ asset('assets/js/toastr.min.js')}}"></script>
  <script>
        // Get the Toast button
        var toastButton = document.getElementById("toast-btn");
        // Get the Toast element
        var toastElement = document.getElementsByClassName("toast")[0];

        toastButton.onclick = function() {
            $('.toast').toast('show');
        }
    </script>
    <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
  @yield('scripts')
</body>


</html>
