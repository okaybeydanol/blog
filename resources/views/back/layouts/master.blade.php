<!-- BEGIN header -->
@include('back.layouts.header')
<!-- END header -->

<!--  BEGIN navbar  -->
@include('back.layouts.navbar')
<!--  END navbar  -->

<!--  BEGIN breadcrumbs  -->
@include('back.layouts.breadcrumbs')
<!--  END breadcrumbs  -->

<!--  BEGIN MAIN CONTAINER  -->

<!--  BEGIN SIDEBAR  -->
@include('back.layouts.sidebar')
<!--  END SIDEBAR  -->

<!--  BEGIN CONTENT PART  -->
@yield('content')



@include('back.layouts.footer')
<!--  END footer  -->
