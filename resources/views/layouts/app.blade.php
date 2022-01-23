<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('custom/images/favicon.png') }}"/>
    @include('layouts.css')
    @yield('css')

</head>

<body class="adminbody">

<div id="main">

    <!-- top bar navigation -->
    @include('layouts.header')
    <!-- End Navigation -->


    <!-- Left Sidebar -->
@include('layouts.left-sidebar')

<!-- End Sidebar -->


    <div class="content-page">
        <div class="container-fluid">
        <!-- end row -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Dashboard</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>



        <!-- end row -->
                @yield('content')


            </div>
</div>

        <!-- Start content -->



    <!-- END content-page -->

   @include('layouts.footer')
    @include('layouts.js')

    @yield('script')
</div>
</body>

<!-- END main -->

</html>

<script>





    $(document).ready(function () {
        // data-tables
        $('#example1').DataTable();

        // counter-up
        $('.counter').counterUp({
            delay: 10,
            time: 600
        });
    });
</script>


<!-- END Java Script for this page -->

