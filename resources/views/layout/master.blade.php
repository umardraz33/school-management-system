<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="dexignlabs">
    <meta name="csrf-token" content="">
    <meta name="robots" content="index, follow">
    <meta name="keywords"
        content="admin, dashboard, admin dashboard, admin template, template, admin panel, administration, analytics, bootstrap, modern, responsive, creative, retina ready, modern Dashboard responsive dashboard, responsive template, user experience, user interface, Bootstrap Dashboard, Analytics Dashboard, Customizable Admin Panel, EduMin template, ui kit, web app, EduMin, School Management,Dashboard Template, academy, course, courses, e-learning, education, learning, learning management system, lms, school, student, teacher">
    <meta name="description"
        content="EduMin - Empower your educational institution with the all-in-one Education Admin Dashboard Template. Streamline administrative tasks, manage courses, track student performance, and gain valuable insights with ease. Elevate your education management experience with a modern, responsive, and feature-packed solution. Explore EduMin now for a smarter, more efficient approach to education administration.">


    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
    <title>{{!empty($header_title) ? $header_title : ""}}-School</title>

    
    <link href="{{ asset('assets/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/vendor/datatables/css/responsive.bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/vendor/pickadate/themes/default.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/vendor/pickadate/themes/default.date.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('assets/vendor/chartist/css/chartist.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

<!-- @include('partials.loader') -->
    <div id="main-wrapper">

        @include('partials.topheader')

       @yield('content')

            @include('partials.sidebar')

    </div>

    <script src="{{ asset('assets/vendor/global/global.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/svganimation/vivus.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/svganimation/svg.animation.js') }}" type="text/javascript"></script>
    <script src="{{asset('assets/vendor/datatables/js/jquery.dataTables.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/plugins-init/datatables.init.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/ckeditor/ckeditor.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/jquery-sparkline/jquery.sparkline.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/plugins-init/sparkline-init.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/raphael/raphael.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/morris/morris.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/plugins-init/widgets-script-init.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/dashboard/dashboard.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/custom.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/dlabnav-init.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/demo.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/styleSwitcher.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/pickadate/picker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/pickadate/picker.time.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/pickadate/picker.date.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/plugins-init/pickadate-init.js') }}" type="text/javascript"></script>

</body>

</html>