<!doctype html>
<html
    lang="en"
    class="light-style layout-navbar-fixed layout-menu-fixed layout-compact"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="{{ asset('theme/materialize') }}/assets/"
    data-template="vertical-menu-template"
    data-style="light">

<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>@yield('title', 'Office Management')</title>
    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('theme/materialize') }}/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('theme/materialize') }}/assets/vendor/fonts/remixicon/remixicon.css" />
    <link rel="stylesheet" href="{{ asset('theme/materialize') }}/assets/vendor/fonts/flag-icons.css" />

    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="{{ asset('theme/materialize') }}/assets/vendor/libs/node-waves/node-waves.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('theme/materialize') }}/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('theme/materialize') }}/assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('theme/materialize') }}/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('theme/materialize') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{ asset('theme/materialize') }}/assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="{{ asset('theme/materialize') }}/assets/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="{{ asset('theme/materialize') }}/assets/vendor/libs/swiper/swiper.css" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('theme/materialize') }}/assets/vendor/css/pages/cards-statistics.css" />
    <link rel="stylesheet" href="{{ asset('theme/materialize') }}/assets/vendor/css/pages/cards-analytics.css" />

    <!-- Helpers -->
    <script src="{{ asset('theme/materialize') }}/assets/vendor/js/helpers.js"></script>
    <script src="{{ asset('theme/materialize') }}/assets/vendor/js/template-customizer.js"></script>
    <script src="{{ asset('theme/materialize') }}/assets/js/config.js"></script>
</head>

<body>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->
        @include('components.menu')
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->
            @include('components.nav')
            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->
                @yield('content')
                <!-- / Content -->

                <!-- Footer -->
                @include('components.footer')
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
</div>
<!-- / Layout wrapper -->

<!-- Core JS -->
<script src="{{ asset('theme/materialize') }}/assets/vendor/libs/jquery/jquery.js"></script>
<script src="{{ asset('theme/materialize') }}/assets/vendor/libs/popper/popper.js"></script>
<script src="{{ asset('theme/materialize') }}/assets/vendor/js/bootstrap.js"></script>
<script src="{{ asset('theme/materialize') }}/assets/vendor/libs/node-waves/node-waves.js"></script>
<script src="{{ asset('theme/materialize') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="{{ asset('theme/materialize') }}/assets/vendor/libs/hammer/hammer.js"></script>
<script src="{{ asset('theme/materialize') }}/assets/vendor/libs/i18n/i18n.js"></script>
<script src="{{ asset('theme/materialize') }}/assets/vendor/libs/typeahead-js/typeahead.js"></script>
<script src="{{ asset('theme/materialize') }}/assets/vendor/js/menu.js"></script>

<!-- Vendors JS -->
<script src="{{ asset('theme/materialize') }}/assets/vendor/libs/apex-charts/apexcharts.js"></script>
<script src="{{ asset('theme/materialize') }}/assets/vendor/libs/swiper/swiper.js"></script>

<!-- Main JS -->
<script src="{{ asset('theme/materialize') }}/assets/js/main.js"></script>

<!-- Page JS -->
<script src="{{ asset('theme/materialize') }}/assets/js/dashboards-analytics.js"></script>
</body>
</html>
