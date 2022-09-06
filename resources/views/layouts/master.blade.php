<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.header')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('admin_lte/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo"
                height="60" width="60">
        </div>

        <!-- Topbar -->
        @include('partials.nav')
        <!-- End of Topbar -->

        <!-- Sidebar -->
        @include('partials.sidebar')
        <!-- End of Sidebar -->

        <!-- Start of Content Wrapper -->
        <div class="content-wrapper">

            @yield('content')
            <!-- Footer -->
            @include('partials.footer')
            <!-- End of Footer -->

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->

            <!-- admin_lte scripts -->
            @include('partials.scripts')

        </div>
        <!-- ./content-wrapper -->

    </div>

</body>

</html>