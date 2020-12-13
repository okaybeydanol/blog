<!DOCTYPE html>
<html class="no-js" lang="tr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title','Anasayfa')</title>
    <meta name="description" content="Sanat, tasarım, teknoloji hikayeleri" />
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta property="og:locale" content="tr_TR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Görkem Demir" />
    <meta property="og:description" content="Sanat, tasarım, teknoloji hikayeleri" />

    <style>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>

    <link rel='stylesheet' id='twentytwenty-style-css' href='{{ asset('front') }}/css/style.css' media='all' />
    <style id='twentytwenty-style-inline-css'>
        .color-accent,
        .color-accent-hover:hover,
        .color-accent-hover:focus,
        :root .has-accent-color,
        .has-drop-cap:not(:focus):first-letter,
        .wp-block-button.is-style-outline,
        a {
            color: #e22658;
        }

        blockquote,
        .border-color-accent,
        .border-color-accent-hover:hover,
        .border-color-accent-hover:focus {
            border-color: #e22658;
        }

        button,
        .button,
        .faux-button,
        .wp-block-button__link,
        .wp-block-file .wp-block-file__button,
        input[type="button"],
        input[type="reset"],
        input[type="submit"],
        .bg-accent,
        .bg-accent-hover:hover,
        .bg-accent-hover:focus,
        :root .has-accent-background-color,
        .comment-reply-link {
            background-color: #e22658;
        }

        .fill-children-accent,
        .fill-children-accent * {
            fill: #e22658;
        }

        :root .has-background-color,
        button,
        .button,
        .faux-button,
        .wp-block-button__link,
        .wp-block-file__button,
        input[type="button"],
        input[type="reset"],
        input[type="submit"],
        .wp-block-button,
        .comment-reply-link,
        .has-background.has-primary-background-color:not(.has-text-color),
        .has-background.has-primary-background-color *:not(.has-text-color),
        .has-background.has-accent-background-color:not(.has-text-color),
        .has-background.has-accent-background-color *:not(.has-text-color) {
            color: #ffffff;
        }

        :root .has-background-background-color {
            background-color: #ffffff;
        }

        body,
        .entry-title a,
        :root .has-primary-color {
            color: #000000;
        }

        :root .has-primary-background-color {
            background-color: #000000;
        }

        cite,
        figcaption,
        .wp-caption-text,
        .post-meta,
        .entry-content .wp-block-archives li,
        .entry-content .wp-block-categories li,
        .entry-content .wp-block-latest-posts li,
        .wp-block-latest-comments__comment-date,
        .wp-block-latest-posts__post-date,
        .wp-block-embed figcaption,
        .wp-block-image figcaption,
        .wp-block-pullquote cite,
        .comment-metadata,
        .comment-respond .comment-notes,
        .comment-respond .logged-in-as,
        .pagination .dots,
        .entry-content hr:not(.has-background),
        hr.styled-separator,
        :root .has-secondary-color {
            color: #6d6d6d;
        }

        :root .has-secondary-background-color {
            background-color: #6d6d6d;
        }

        pre,
        fieldset,
        input,
        textarea,
        table,
        table *,
        hr {
            border-color: #dbdbdb;
        }

        caption,
        code,
        code,
        kbd,
        samp,
        .wp-block-table.is-style-stripes tbody tr:nth-child(odd),
        :root .has-subtle-background-background-color {
            background-color: #dbdbdb;
        }

        .wp-block-table.is-style-stripes {
            border-bottom-color: #dbdbdb;
        }

        .wp-block-latest-posts.is-grid li {
            border-top-color: #dbdbdb;
        }

        :root .has-subtle-background-color {
            color: #dbdbdb;
        }

        body:not(.overlay-header) .primary-menu>li>a,
        body:not(.overlay-header) .primary-menu>li>.icon,
        .modal-menu a,
        .footer-menu a,
        .footer-widgets a,
        #site-footer .wp-block-button.is-style-outline,
        .wp-block-pullquote:before,
        .singular:not(.overlay-header) .entry-header a,
        .archive-header a,
        .header-footer-group .color-accent,
        .header-footer-group .color-accent-hover:hover {
            color: #e15077;
        }

        .social-icons a,
        #site-footer button:not(.toggle),
        #site-footer .button,
        #site-footer .faux-button,
        #site-footer .wp-block-button__link,
        #site-footer .wp-block-file__button,
        #site-footer input[type="button"],
        #site-footer input[type="reset"],
        #site-footer input[type="submit"] {
            background-color: #e15077;
        }

        .social-icons a,
        body:not(.overlay-header) .primary-menu ul,
        .header-footer-group button,
        .header-footer-group .button,
        .header-footer-group .faux-button,
        .header-footer-group .wp-block-button:not(.is-style-outline) .wp-block-button__link,
        .header-footer-group .wp-block-file__button,
        .header-footer-group input[type="button"],
        .header-footer-group input[type="reset"],
        .header-footer-group input[type="submit"] {
            color: #1d1d1d;
        }

        #site-header,
        .footer-nav-widgets-wrapper,
        #site-footer,
        .menu-modal,
        .menu-modal-inner,
        .search-modal-inner,
        .archive-header,
        .singular .entry-header,
        .singular .featured-media:before,
        .wp-block-pullquote:before {
            background-color: #1d1d1d;
        }

        .header-footer-group,
        body:not(.overlay-header) #site-header .toggle,
        .menu-modal .toggle {
            color: #ffffff;
        }

        body:not(.overlay-header) .primary-menu ul {
            background-color: #ffffff;
        }

        body:not(.overlay-header) .primary-menu>li>ul:after {
            border-bottom-color: #ffffff;
        }

        body:not(.overlay-header) .primary-menu ul ul:after {
            border-left-color: #ffffff;
        }

        .site-description,
        body:not(.overlay-header) .toggle-inner .toggle-text,
        .widget .post-date,
        .widget .rss-date,
        .widget_archive li,
        .widget_categories li,
        .widget cite,
        .widget_pages li,
        .widget_meta li,
        .widget_nav_menu li,
        .powered-by-okay,
        .to-the-top,
        .singular .entry-header .post-meta,
        .singular:not(.overlay-header) .entry-header .post-meta a {
            color: #8c8c8c;
        }

        .header-footer-group pre,
        .header-footer-group fieldset,
        .header-footer-group input,
        .header-footer-group textarea,
        .header-footer-group table,
        .header-footer-group table *,
        .footer-nav-widgets-wrapper,
        #site-footer,
        .menu-modal nav *,
        .footer-widgets-outer-wrapper,
        .footer-top {
            border-color: #353535;
        }

        .header-footer-group table caption,
        body:not(.overlay-header) .header-inner .toggle-wrapper::before {
            background-color: #353535;
        }
    </style>
    <link rel='stylesheet' id='ecae-frontend-css' href='{{ asset('front') }}/css/style-frontend18f6.css' media='all' />
    <link rel='stylesheet' id='ecae-buttonskin-black-css' href='{{ asset('front') }}/css/ecae-buttonskin-black18f6.css'
        media='all' />
    <script src='{{ asset('front') }}/js/index7ef2.js' id='twentytwenty-js-js' async></script>

    <script>
        document.documentElement.className = document.documentElement.className.replace( 'no-js', 'js' );
    </script>
    <style id="custom-background-css">
        body.custom-background {
            background-color: #ffffff;
        }
    </style>
    <style id="wp-custom-css">
        .byline,
        .single .byline {
            display: none;
        }
    </style>
</head>


<body
    class="@if(Request::segment(1) != 'm' && Request::segment(1) != 's')home blog custom-background wp-embed-responsive enable-search-modal has-no-pagination showing-comments show-avatars footer-top-visible @else post-template-default single single-post postid-6723 single-format-standard custom-background wp-embed-responsive singular enable-search-modal has-post-thumbnail has-single-pagination showing-comments show-avatars footer-top-visible @endif">


    <header id="site-header" class="header-footer-group" role="banner">
        <div class="header-inner section-inner">
            <div class="header-titles-wrapper">
                <button class="toggle search-toggle mobile-search-toggle" data-toggle-target=".search-modal"
                    data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field"
                    aria-expanded="false">
                    <span class="toggle-inner">
                        <span class="toggle-icon">
                            <svg class="svg-icon" aria-hidden="true" role="img" focusable="false"
                                xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23">
                                <path
                                    d="M38.710696,48.0601792 L43,52.3494831 L41.3494831,54 L37.0601792,49.710696 C35.2632422,51.1481185 32.9839107,52.0076499 30.5038249,52.0076499 C24.7027226,52.0076499 20,47.3049272 20,41.5038249 C20,35.7027226 24.7027226,31 30.5038249,31 C36.3049272,31 41.0076499,35.7027226 41.0076499,41.5038249 C41.0076499,43.9839107 40.1481185,46.2632422 38.710696,48.0601792 Z M36.3875844,47.1716785 C37.8030221,45.7026647 38.6734666,43.7048964 38.6734666,41.5038249 C38.6734666,36.9918565 35.0157934,33.3341833 30.5038249,33.3341833 C25.9918565,33.3341833 22.3341833,36.9918565 22.3341833,41.5038249 C22.3341833,46.0157934 25.9918565,49.6734666 30.5038249,49.6734666 C32.7048964,49.6734666 34.7026647,48.8030221 36.1716785,47.3875844 C36.2023931,47.347638 36.2360451,47.3092237 36.2726343,47.2726343 C36.3092237,47.2360451 36.347638,47.2023931 36.3875844,47.1716785 Z"
                                    transform="translate(-20 -31)" /></svg> </span>
                        <span class="toggle-text">Site araması</span>
                    </span>
                </button>
                <div class="header-titles">
                    <h1 class="site-title"><a href="/">Görkem Demir</a></h1>
                    <div class="site-description">Sanat, tasarım, teknoloji hikayeleri</div>
                </div>
                <button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal"
                    data-toggle-body-class="showing-menu-modal" aria-expanded="false"
                    data-set-focus=".close-nav-toggle">
                    <span class="toggle-inner">
                        <span class="toggle-icon">
                            <svg class="svg-icon" aria-hidden="true" role="img" focusable="false"
                                xmlns="http://www.w3.org/2000/svg" width="26" height="7" viewBox="0 0 26 7">
                                <path fill-rule="evenodd"
                                    d="M332.5,45 C330.567003,45 329,43.4329966 329,41.5 C329,39.5670034 330.567003,38 332.5,38 C334.432997,38 336,39.5670034 336,41.5 C336,43.4329966 334.432997,45 332.5,45 Z M342,45 C340.067003,45 338.5,43.4329966 338.5,41.5 C338.5,39.5670034 340.067003,38 342,38 C343.932997,38 345.5,39.5670034 345.5,41.5 C345.5,43.4329966 343.932997,45 342,45 Z M351.5,45 C349.567003,45 348,43.4329966 348,41.5 C348,39.5670034 349.567003,38 351.5,38 C353.432997,38 355,39.5670034 355,41.5 C355,43.4329966 353.432997,45 351.5,45 Z"
                                    transform="translate(-329 -38)" /></svg> </span>
                        <span class="toggle-text">Menü</span>
                    </span>
                </button>
            </div>
            <div class="header-navigation-wrapper">
                <nav class="primary-menu-wrapper" aria-label="Yatay" role="navigation">
                    <ul class="primary-menu reset-list-style">
                        <li id="menu-item-6650"
                            class="menu-item menu-item-type-custom menu-item-object-custom current_page_item menu-item-home menu-item-has-children menu-item-6650">
                            <a href="#" aria-current="page">Kategoriler</a><span class="icon"></span>
                            <ul class="sub-menu">

                                @foreach ($categories as $category)

                                <li
                                    class="@if(Request::segment(2) == $category->slug)  current-menu-item @endif  menu-item menu-item-type-post_type menu-item-object-page menu-item-6659">
                                    <a @if(Request::segment(2)!=$category->slug)
                                        href="{{ route('category',$category->slug) }} @endif
                                        ">{{ $category->name }}<span style="float: right;color:rgb(34, 32, 32);)">
                                            {{ $category->article_count }}</span> </a>

                                </li>
                                @endforeach
                            </ul>
                        </li>

                        @foreach ($pages as $page)
                        <li id="menu-item-6658"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6658"><a
                                href="{{ route('page', $page->slug) }}">{{ $page->title }}</a>
                        </li>
                        @endforeach


                    </ul>
                </nav>
                <div class="header-toggles hide-no-js">
                    <div class="toggle-wrapper search-toggle-wrapper">
                        <button class="toggle search-toggle desktop-search-toggle" data-toggle-target=".search-modal"
                            data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field"
                            aria-expanded="false">
                            <span class="toggle-inner">
                                <svg class="svg-icon" aria-hidden="true" role="img" focusable="false"
                                    xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23">
                                    <path
                                        d="M38.710696,48.0601792 L43,52.3494831 L41.3494831,54 L37.0601792,49.710696 C35.2632422,51.1481185 32.9839107,52.0076499 30.5038249,52.0076499 C24.7027226,52.0076499 20,47.3049272 20,41.5038249 C20,35.7027226 24.7027226,31 30.5038249,31 C36.3049272,31 41.0076499,35.7027226 41.0076499,41.5038249 C41.0076499,43.9839107 40.1481185,46.2632422 38.710696,48.0601792 Z M36.3875844,47.1716785 C37.8030221,45.7026647 38.6734666,43.7048964 38.6734666,41.5038249 C38.6734666,36.9918565 35.0157934,33.3341833 30.5038249,33.3341833 C25.9918565,33.3341833 22.3341833,36.9918565 22.3341833,41.5038249 C22.3341833,46.0157934 25.9918565,49.6734666 30.5038249,49.6734666 C32.7048964,49.6734666 34.7026647,48.8030221 36.1716785,47.3875844 C36.2023931,47.347638 36.2360451,47.3092237 36.2726343,47.2726343 C36.3092237,47.2360451 36.347638,47.2023931 36.3875844,47.1716785 Z"
                                        transform="translate(-20 -31)" /></svg> <span class="toggle-text">Site
                                    araması</span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-modal cover-modal header-footer-group" data-modal-target-string=".search-modal">
            <div class="search-modal-inner modal-inner">
                <div class="section-inner">
                    <form role="search" aria-label="Arama yap:" method="get" class="search-form" action="/">
                        <label for="search-form-1">
                            <span class="screen-reader-text">Arama yap:</span>
                            <input type="search" id="search-form-1" class="search-field" placeholder="Ara &hellip;"
                                value="" name="s" />
                        </label>
                        <input type="submit" class="search-submit" value="Site araması" />
                    </form>
                    <button class="toggle search-untoggle close-search-toggle fill-children-current-color"
                        data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal"
                        data-set-focus=".search-modal .search-field" aria-expanded="false">
                        <span class="screen-reader-text">Aramayı kapat</span>
                        <svg class="svg-icon" aria-hidden="true" role="img" focusable="false"
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                            <polygon fill="" fill-rule="evenodd"
                                points="6.852 7.649 .399 1.195 1.445 .149 7.899 6.602 14.352 .149 15.399 1.195 8.945 7.649 15.399 14.102 14.352 15.149 7.899 8.695 1.445 15.149 .399 14.102" />
                        </svg> </button>
                </div>
            </div>
        </div>
    </header>



    <div class="menu-modal cover-modal header-footer-group" data-modal-target-string=".menu-modal">
        <div class="menu-modal-inner modal-inner">
            <div class="menu-wrapper section-inner">
                <div class="menu-top">
                    <button class="toggle close-nav-toggle fill-children-current-color" data-toggle-target=".menu-modal"
                        data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".menu-modal">
                        <span class="toggle-text">Menüyü kapat</span>
                        <svg class="svg-icon" aria-hidden="true" role="img" focusable="false"
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                            <polygon fill="" fill-rule="evenodd"
                                points="6.852 7.649 .399 1.195 1.445 .149 7.899 6.602 14.352 .149 15.399 1.195 8.945 7.649 15.399 14.102 14.352 15.149 7.899 8.695 1.445 15.149 .399 14.102" />
                        </svg> </button>
                    <nav class="mobile-menu" aria-label="Mobil" role="navigation">
                        <ul class="modal-menu reset-list-style">
                            <li
                                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children menu-item-6650">
                                <div class="ancestor-wrapper"><a href="/" aria-current="page">Kategoriler</a><button
                                        class="toggle sub-menu-toggle fill-children-current-color"
                                        data-toggle-target=".menu-modal .menu-item-6650 > .sub-menu"
                                        data-toggle-type="slidetoggle" data-toggle-duration="250"
                                        aria-expanded="false"><span class="screen-reader-text">Alt menüyü
                                            göster</span><svg class="svg-icon" aria-hidden="true" role="img"
                                            focusable="false" xmlns="http://www.w3.org/2000/svg" width="20" height="12"
                                            viewBox="0 0 20 12">
                                            <polygon fill="" fill-rule="evenodd"
                                                points="1319.899 365.778 1327.678 358 1329.799 360.121 1319.899 370.021 1310 360.121 1312.121 358"
                                                transform="translate(-1310 -358)" /></svg></button></div>
                                <ul class="sub-menu">

                                    @foreach ($categories as $category)

                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6659">
                                        <a href="{{ route('category',$category->slug) }}">{{ $category->name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            @foreach ($pages as $page)
                            <li id="menu-item-6658"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6658"><a
                                    href="{{ route('page', $page->slug) }}">{{ $page->title }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
                <div class="menu-bottom">
                </div>
            </div>
        </div>
    </div>
    <main id="site-content" role="main">
