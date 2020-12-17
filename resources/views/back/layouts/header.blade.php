<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>@yield('title','Blog Sitesi Yönetim Paneli')</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <link href="{{ asset('back') }}/assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="{{ asset('back') }}/assets/js/loader.js"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('back') }}/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('back') }}/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{ asset('back') }}/assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('back') }}/plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('back') }}/plugins/table/datatable/dt-global_style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('back') }}/assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('back') }}/assets/css/tables/table-basic.css">
    @yield('css')
    <!--  END CUSTOM STYLE FILE  -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <style>
        .layout-px-spacing {
            min-height: calc(100vh - 166px) !important;
        }
    </style>

    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>
