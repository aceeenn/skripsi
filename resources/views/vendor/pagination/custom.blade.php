@if ($paginator->hasPages())
<ul class="pagination" role="navigation">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
            <span class="page-link" aria-hidden="true">&laquo;</span>
        </li>
    @else
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&laquo;</a>
        </li>
    @endif

    {{-- Pagination Elements --}}
    @foreach ($elements as $element)
        {{-- Array Of Links --}}
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page === $paginator->currentPage())
                    <li class="page-item active " aria-current="page">
                        <span class="page-link">{{ $page }}</span>
                    </li>
                @elseif (($page === $paginator->currentPage() + 1 || $page === $paginator->currentPage() + 2)
                 || $page === $paginator->lastPage())
                    <li class="page-item">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                @elseif ($page === $paginator->lastPage()-1)
                    <li class="page-link disabled" area-label="disable">
                        <span>...</span></li>
                @endif
            @endforeach
        @endif
    @endforeach

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">Next &raquo;</a>
        </li>
    @else
        <li class="disabled pageNumber"><span>Next &raquo;</span></li>
    @endif
</ul>
@endif