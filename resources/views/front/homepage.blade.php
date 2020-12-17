@extends('front.layouts.master')



@section('content')


@foreach ($articles as $article)
<article
    class="post-6788 post type-post status-publish format-standard has-post-thumbnail hentry category-tasarim has-post-video"
    id="post-6788">
    <header class="entry-header has-text-align-center">
        <div class="entry-header-inner section-inner medium">

            <div class="entry-categories">
                <span class="screen-reader-text">Kategoriler</span>

                <div class="entry-categories-inner">
                    @foreach ($article->category as $category)
                    <a href="{{ route('category',$category->categoryInfo->slug) }}"
                        rel="category tag">{{ $category->categoryInfo->name }}</a>
                    @endforeach
                </div>

            </div>

            <h2 class="entry-title heading-size-1"><a
                    href="{{ route('single' ,$article->slug ) }}">{{ $article->title }}</a>
            </h2>
            <div class="post-meta-wrapper post-meta-single post-meta-single-top">
                <ul class="post-meta">
                    <li class="post-author meta-wrapper">
                        <span class="meta-icon">
                            <span class="screen-reader-text">Yazının yazarı</span>
                            <svg class="svg-icon" aria-hidden="true" role="img" focusable="false"
                                xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20">
                                <path fill=""
                                    d="M18,19 C18,19.5522847 17.5522847,20 17,20 C16.4477153,20 16,19.5522847 16,19 L16,17 C16,15.3431458 14.6568542,14 13,14 L5,14 C3.34314575,14 2,15.3431458 2,17 L2,19 C2,19.5522847 1.55228475,20 1,20 C0.44771525,20 0,19.5522847 0,19 L0,17 C0,14.2385763 2.23857625,12 5,12 L13,12 C15.7614237,12 18,14.2385763 18,17 L18,19 Z M9,10 C6.23857625,10 4,7.76142375 4,5 C4,2.23857625 6.23857625,0 9,0 C11.7614237,0 14,2.23857625 14,5 C14,7.76142375 11.7614237,10 9,10 Z M9,8 C10.6568542,8 12,6.65685425 12,5 C12,3.34314575 10.6568542,2 9,2 C7.34314575,2 6,3.34314575 6,5 C6,6.65685425 7.34314575,8 9,8 Z" />
                            </svg> </span>
                        <span class="meta-text">
                            Yazar <a href="{{ route('single' ,$article->slug ) }}">{{ $article->user_guid }}</a> </span>
                    </li>
                    <li class="post-date meta-wrapper">
                        <span class="meta-icon">
                            <span class="screen-reader-text">Yazı tarihi</span>
                            <svg class="svg-icon" aria-hidden="true" role="img" focusable="false"
                                xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19">
                                <path fill=""
                                    d="M4.60069444,4.09375 L3.25,4.09375 C2.47334957,4.09375 1.84375,4.72334957 1.84375,5.5 L1.84375,7.26736111 L16.15625,7.26736111 L16.15625,5.5 C16.15625,4.72334957 15.5266504,4.09375 14.75,4.09375 L13.3993056,4.09375 L13.3993056,4.55555556 C13.3993056,5.02154581 13.0215458,5.39930556 12.5555556,5.39930556 C12.0895653,5.39930556 11.7118056,5.02154581 11.7118056,4.55555556 L11.7118056,4.09375 L6.28819444,4.09375 L6.28819444,4.55555556 C6.28819444,5.02154581 5.9104347,5.39930556 5.44444444,5.39930556 C4.97845419,5.39930556 4.60069444,5.02154581 4.60069444,4.55555556 L4.60069444,4.09375 Z M6.28819444,2.40625 L11.7118056,2.40625 L11.7118056,1 C11.7118056,0.534009742 12.0895653,0.15625 12.5555556,0.15625 C13.0215458,0.15625 13.3993056,0.534009742 13.3993056,1 L13.3993056,2.40625 L14.75,2.40625 C16.4586309,2.40625 17.84375,3.79136906 17.84375,5.5 L17.84375,15.875 C17.84375,17.5836309 16.4586309,18.96875 14.75,18.96875 L3.25,18.96875 C1.54136906,18.96875 0.15625,17.5836309 0.15625,15.875 L0.15625,5.5 C0.15625,3.79136906 1.54136906,2.40625 3.25,2.40625 L4.60069444,2.40625 L4.60069444,1 C4.60069444,0.534009742 4.97845419,0.15625 5.44444444,0.15625 C5.9104347,0.15625 6.28819444,0.534009742 6.28819444,1 L6.28819444,2.40625 Z M1.84375,8.95486111 L1.84375,15.875 C1.84375,16.6516504 2.47334957,17.28125 3.25,17.28125 L14.75,17.28125 C15.5266504,17.28125 16.15625,16.6516504 16.15625,15.875 L16.15625,8.95486111 L1.84375,8.95486111 Z" />
                            </svg> </span>
                        <span class="meta-text">
                            <a
                                href="{{ route('single' ,$article->slug ) }}">{{ $article->created_at->diffForHumans() }}</a>
                        </span>
                    </li>
                    <li class="post-comment-link meta-wrapper">
                        <span class="meta-icon">
                            <svg class="svg-icon" aria-hidden="true" role="img" focusable="false"
                                xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19">
                                <path
                                    d="M9.43016863,13.2235931 C9.58624731,13.094699 9.7823475,13.0241935 9.98476849,13.0241935 L15.0564516,13.0241935 C15.8581553,13.0241935 16.5080645,12.3742843 16.5080645,11.5725806 L16.5080645,3.44354839 C16.5080645,2.64184472 15.8581553,1.99193548 15.0564516,1.99193548 L3.44354839,1.99193548 C2.64184472,1.99193548 1.99193548,2.64184472 1.99193548,3.44354839 L1.99193548,11.5725806 C1.99193548,12.3742843 2.64184472,13.0241935 3.44354839,13.0241935 L5.76612903,13.0241935 C6.24715123,13.0241935 6.63709677,13.4141391 6.63709677,13.8951613 L6.63709677,15.5301903 L9.43016863,13.2235931 Z M3.44354839,14.766129 C1.67980032,14.766129 0.25,13.3363287 0.25,11.5725806 L0.25,3.44354839 C0.25,1.67980032 1.67980032,0.25 3.44354839,0.25 L15.0564516,0.25 C16.8201997,0.25 18.25,1.67980032 18.25,3.44354839 L18.25,11.5725806 C18.25,13.3363287 16.8201997,14.766129 15.0564516,14.766129 L10.2979143,14.766129 L6.32072889,18.0506004 C5.75274472,18.5196577 4.89516129,18.1156602 4.89516129,17.3790323 L4.89516129,14.766129 L3.44354839,14.766129 Z" />
                            </svg> </span>
                        <span class="meta-text">
                            <a href="{{ route('single' ,$article->slug ) }}#respond">
                                @if (count($article->article_comments)>0)
                                {{ count($article->article_comments) }} Yorum
                                @else
                                Yorum yok
                                @endif
                                <span class="screen-reader-text">{{ $article->title }}</span></a> </span>
                    </li>
                </ul>
            </div>
        </div>
    </header>



    ​<picture class="featured-media img-fluid">
        <div class="featured-media-inner section-inner medium">
            <div class="featured-video-plus post-thumbnail fvp-responsive fvp-center">
                <img src="{{ asset($article->image) }}" class="img-fluid img-thumbnail" alt="..." width="1200px">
            </div>

        </div>
    </picture>




    <div class="post-inner thin ">
        <div class="entry-content">
            <div class="ecae" style="">
                <p>
                    {!! Str::limit($article->content, 500) !!}
                </p>
                <span class="ecae-button ecae-buttonskin-black" style="text-align:right">
                    <a class="ecae-link" href="{{ route('single' ,$article->slug ) }}">
                        <span>DEVAMI ▷</span>
                    </a>
                </span>
                </p>
            </div>
        </div>
    </div>
    <div class="section-inner">
    </div>

</article>
<hr class="post-separator styled-separator is-style-wide section-inner" aria-hidden="true">

@endforeach
{{ $articles->links('front.layouts.pagination',['paginator'=>$articles]) }}
@endsection
