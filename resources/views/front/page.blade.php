@extends('front.layouts.master')


@section('title')
{{ $page->title }}
@endsection

@section('content')

<article class="post-597 page type-page status-publish hentry" id="post-597">
    <header class="entry-header has-text-align-center header-footer-group">
        <div class="entry-header-inner section-inner medium">
            <h1 class="entry-title">{{ $page->title }}</h1>
        </div>
    </header>
    <div class="post-inner thin ">
        <div class="entry-content">
            <img loading="lazy" class="aligncenter size-large wp-image-6401" src="{{ $page->image }}"
                alt="Görkem Demir Kimdir?" width="660" height="591">

            <p>{{ $page->content }}</p>
        </div>
    </div>
    <div class="section-inner">
    </div>
</article>
@endsection
