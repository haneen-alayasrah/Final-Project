<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ACCESSIBLE MAP</title>
    <link rel="shortcut icon" href="/images/logo.jpeg" type="image/x-icon">

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
   
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('assets_admin/css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
        <style>
            .dataTables_wrapper .dataTables_paginate .paginate_button {
                padding: 0px !important;
                margin: 0px !important;

            }
            div.dataTables_wrapper div.dataTables_length select {
                width: 50% !important;
            }
        </style>
</head>
<body>
    @include('layouts.inc.admin-navbar')

    <div id="layoutSidenav">
        
        @include('layouts.inc.admin-sidebar')

        <div id="layoutSidenav_content">
            <main>

                @yield('content')

            </main>

            @include('layouts.inc.admin-footer')

        </div>
    </div>
    <script src="{{ asset('assets_admin/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('assets_admin/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets_admin/js/scripts.js') }}"></script>
    <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready( function () {
    $('#myDataTable').DataTable();
} );
    </script>

</body>
</html>