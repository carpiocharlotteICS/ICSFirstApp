@extends('layouts.master')

@section('title', 'Accounts')

@section('content')

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

        <div class="content-wrapper">

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">CDB Accounts</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <a href="javascript:void(0)" class="btn btn-primary mb-3" id="createAccount">Add CDB
                                    Account</a>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered data-table">
                    <thead>
                        <tr>
                            <th>AccountID</th>
                            <th>AO Number</th>
                            <th>Account Name</th>
                            <th>Account Group</th>
                            <th>Account Type</th>
                            <th>Domain Account</th>
                            <th>Email</th>
                            <th>Valid To</th>
                            <th>Nickname</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>

        </div>

        {{-- Add Account Modal --}}
        @include('modals.add_accounts')
        <!-- Footer -->
        @include('partials.footer')
        <!-- End of Footer -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

    </div>
    <!-- ./wrapper -->

    <!-- admin_lte scripts -->
    @include('partials.scripts')

    <script src="{{ asset('/scripts/modules/system.js')}}"></script>

</body>


@endsection