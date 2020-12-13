@php
$total_records = $paginator->total();
$per_page = $paginator->perPage();
$last_page = $paginator->lastPage();
$current_page = $paginator->currentPage();
$has_more_pages = $paginator->hasMorePages();
$next_page_url = $paginator->nextPageUrl();
$previous_page_url = $paginator->previousPageUrl();
@endphp

@if($current_page< $last_page + 1) <div class="pagination-wrapper section-inner">
    <nav class="navigation pagination" role="navigation" aria-label="Yazılar">

        <div class="nav-links">


            @if($current_page > 1)

            <a class="prev page-numbers" href="{{ $paginator->url(1) }}"><span aria-hidden="true">&laquo;</span>
                <span class="nav-prev-text"> İlk <span class="nav-short">sayfa</span></span></a>
            <a class="page-numbers" href="{{ $previous_page_url }}">←</a><span class="page-numbers dots">…</span>
            @else
            <span class="prev page-numbers">
                <span aria-hidden="true">&laquo;</span>
                <span class="nav-prev-text"> İlk<span class="nav-short"> sayfa</span></span>
            </span>
            @endif


            <span aria-current="page" class="page-numbers current">{{ $current_page }}</span>




            @if($has_more_pages > 0)

            @for($i = $current_page;$i < $last_page; $i++) @if($i < ($current_page + 3)) <a class=" page-numbers"
                href="{{ $paginator->url($i + 1) }}">{{ $i + 1 }}</a>
                @endif
                @endfor
                @if ($current_page > 0 && $current_page != $last_page)
                <span class="page-numbers dots">…</span>
                <a class="page-numbers" href="{{ $next_page_url }}">&rarr;</a>

                @endif


                <a class="next page-numbers" href="{{ $paginator->url($last_page) }}"><span class="nav-next-text">
                        <span class="nav-short">Son sayfa</span></span> <span aria-hidden="true">&raquo;</span></a>
                @else
                <span class="next page-numbers">
                    <span class="nav-next-text"> <span class="nav-short">Son sayfa</span></span> <span
                        aria-hidden="true">&raquo;</span>
                </span>
                @endif

        </div>
    </nav>
    </div>
    @else
    <div>
        <h1 style="font-size: 40px;margin: 20%">Böyle bir sayfa bulunamadı.</h1>
    </div>
    @endif
