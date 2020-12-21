@php
$routename = \Request::route()->getName();
@endphp
<div class="main-container" id="container">

    <div class="overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN SIDEBAR  -->
    <div class="sidebar-wrapper sidebar-theme">

        <nav id="sidebar">
            <div class="shadow-bottom"></div>


            <ul class="list-unstyled menu-categories" id="accordionExample">
                <li class="menu">
                    <a href="{{ route('admin.dashboard') }}" @if ($routename=='admin.dashboard' ) data-active="true"
                        @endif aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-home">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                            <span>Panel</span>
                        </div>
                    </a>
                </li>
                <li class="menu">
                    <a href="#submenu" @if ($routename=='admin.makaleler.index' || $routename=='admin.makaleler.create'
                        || $routename=='admin.makaleler.edit' ) data-active="true" @endif data-toggle="collapse"
                        aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-pen-tool">
                                <path d="M12 19l7-7 3 3-7 7-3-3z"></path>
                                <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path>
                                <path d="M2 2l7.586 7.586"></path>
                                <circle cx="11" cy="11" r="2"></circle>
                            </svg>
                            <span>Makaleler</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="@if ($routename =='admin.makaleler.index' || $routename =='admin.makaleler.create' || $routename =='admin.makaleler.edit' )  show
                    @endif collapse submenu list-unstyled" id="submenu" data-parent="#accordionExample">
                        <li @if ($routename=='admin.makaleler.index' || $routename=='admin.makaleler.edit' )
                            class="active" @endif>
                            <a href=" {{ route('admin.makaleler.index') }}">Tüm Makaleler</a>
                        </li>
                        <li @if ($routename=='admin.makaleler.create' ) class="active" @endif>
                            <a href="{{ route('admin.makaleler.create') }}">Makale Oluştur</a>
                        </li>
                    </ul>
                </li>
                <li class="menu">
                    <a href="#kategori" @if ($routename=='admin.kategoriler.index' ||
                        $routename=='admin.kategoriler.create' || $routename=='admin.kategoriler.edit' )
                        data-active="true" @endif data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-codepen">
                                <polygon points="12 2 22 8.5 22 15.5 12 22 2 15.5 2 8.5 12 2"></polygon>
                                <line x1="12" y1="22" x2="12" y2="15.5"></line>
                                <polyline points="22 8.5 12 15.5 2 8.5"></polyline>
                                <polyline points="2 15.5 12 8.5 22 15.5"></polyline>
                                <line x1="12" y1="2" x2="12" y2="8.5"></line>
                            </svg>
                            <span>Kategoriler</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="@if ($routename =='admin.kategoriler.index' || $routename =='admin.kategoriler.create' || $routename =='admin.kategoriler.edit' )  show
                    @endif collapse submenu list-unstyled" id="kategori" data-parent="#accordionExample">
                        <li @if ($routename=='admin.kategoriler.index' || $routename=='admin.kategoriler.edit' )
                            class="active" @endif>
                            <a href=" {{ route('admin.kategoriler.index') }}">Tüm Kategoriler</a>
                        </li>
                        <li @if ($routename=='admin.kategoriler.create' ) class="active" @endif>
                            <a href="{{ route('admin.kategoriler.create') }}">Kategori Oluştur</a>
                        </li>
                    </ul>
                </li>
            </ul>

        </nav>

    </div>
    <!--  END SIDEBAR  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing" id="cancel-row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="widget-content widget-content-area">
                        @yield('baslik')
