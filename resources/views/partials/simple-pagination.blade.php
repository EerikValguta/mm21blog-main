@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true"><button class="btn btn-disabled" disabled="disabled">@lang('pagination.previous')</button></li>
            @else
                <li><a class="join-item btn btn-primary" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a></li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li><a class="join-item btn btn-primary" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a></li>
            @else
                <li class="disabled" aria-disabled="true"><button class="btn btn-disabled" tabindex="-1" role="button" aria-disabled="true">@lang('pagination.next')</button></li>
            @endif
        </ul>
    </nav>
@endif
