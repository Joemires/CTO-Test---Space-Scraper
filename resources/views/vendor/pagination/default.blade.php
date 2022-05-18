@if ($paginator->hasPages())

    <!-- Pagination -->
    <nav class="row align-items-sm-center text-center text-sm-start" aria-label="Page navigation example">
        <div class="col-sm-6 order-sm-2 text-sm-end mb-3 mb-sm-0">
            <small class="text-muted">Showing {{ $paginator->currentPage() }} of {{ $paginator->lastPage() }} </small>
        </div>
        <!-- End Col -->

        <div class="col-sm-6">
            <ul class="pagination justify-content-center justify-content-sm-start mb-0">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                        <span class="page-link" aria-hidden="true">«</span>
                    </li>
                @else
                    <li class="page-item" rel="prev" aria-label="@lang('pagination.previous')">
                        <a class="page-link" href="{{ $paginator->previousPageUrl() }}" tabindex="-1">
                            <span aria-hidden="true">«</span>
                        </a>
                    </li>
                @endif


                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item active" aria-current="page">
                                    <span class="page-link">{{ $page }}</span>
                                </li>
                            @else
                                <li class="page-item" aria-current="page">
                                    <a href="{{ $url }}" class="page-link">{{ $page }}</a>
                                </li>
                            @endif
                        @endforeach
                    @endif

                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                            <span aria-hidden="true">»</span>
                        </a>
                    </li>
                @else
                    <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                        <span class="page-link" aria-hidden="true">»</span>
                    </li>
                @endif
            </ul>
        </div>
        <!-- End Col -->
    </nav>
    <!-- End Pagination -->
@endif
