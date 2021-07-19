<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Instorify</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/assets/img/logo3.png">
    <script src="https://kit.fontawesome.com/4702f02b2a.js" crossorigin="anonymous"></script>
    <!-- ============================================ CSS ============================================ -->
    <!--Header CSS-->
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/home/vendor/bootstrap.min.css">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="/assets/css/home/vendor/bicon.min.css">
    <!-- audio & video player CSS -->
    <link rel="stylesheet" href="/assets/css/home/plugins/plyr.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="/assets/css/home/plugins/slick.min.css">
    <!-- nice-select CSS -->
    <link rel="stylesheet" href="/assets/css/home/plugins/nice-select.css">
    <!-- perfect scrollbar css -->
    <link rel="stylesheet" href="/assets/css/home/plugins/perfect-scrollbar.css">
    <!-- light gallery css -->
    <link rel="stylesheet" href="/assets/css/home/plugins/lightgallery.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="/assets/css/home/style.css">
    <link rel="stylesheet" href="/assets/css/main.min.css">
    <link rel="stylesheet" href="/assets/css/style_landing.css">
    <link rel="stylesheet" href="/assets/css/color.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">

    <link href="https://emoji-css.afeld.me/emoji.css" rel="stylesheet">

</head>

<body>

<!-- ========== HEADER ========== -->
@include('layouts.header')

<!-- ========== BODY ========== -->
@yield('content')

<!-- ========== FOOTER ========== -->
@include('layouts.footer')

<div class="scroll-top not-visible">
    <i class="fas fa-arrow-alt-circle-up"></i>
</div>

<!-- ============================================ JS ============================================ -->
<!-- Modernizer JS -->
<script src="/assets/js/home/vendor/modernizr-3.6.0.min.js"></script>
<!-- jQuery JS -->
<script src="/assets/js/home/vendor/jquery-3.3.1.min.js"></script>
<!-- Popper JS -->
<script src="/assets/js/home/vendor/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="/assets/js/home/vendor/bootstrap.min.js"></script>
<!-- Slick Slider JS -->
<script src="/assets/js/home/plugins/slick.min.js"></script>
<!-- nice select JS -->
<script src="/assets/js/home/plugins/nice-select.min.js"></script>
<!-- audio video player JS -->
<script src="/assets/js/home/plugins/plyr.min.js"></script>
<!-- perfect scrollbar js -->
<script src="/assets/js/home/plugins/perfect-scrollbar.min.js"></script>
<!-- light gallery js -->
<script src="/assets/js/home/plugins/lightgallery-all.min.js"></script>
<!-- image loaded js -->
<script src="/assets/js/home/plugins/imagesloaded.pkgd.min.js"></script>
<!-- isotope filter js -->
<script src="/assets/js/home/plugins/isotope.pkgd.min.js"></script>
<!-- Main JS -->
<script src="/assets/js/home/main.js"></script>
<script src="/assets/js/script.js"></script>
<script src="/assets/js/music.js"></script>
</body>
</html>
