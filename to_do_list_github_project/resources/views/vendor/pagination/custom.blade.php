@if ($paginator->hasPages())

    <nav class="navpaginator">
        <ul class="ulpaginator">

            @if ($paginator->onFirstPage())

            <li class="page-item disabled">
                <a class="page-item-previous" href="#" 
                tabindex="-1">Previous</a>
            </li>

            @else

            <li class="page-item-previous"><a class="page-link" 
                href="{{ $paginator->previousPageUrl() }}">
                    Previous</a>
            </li>

            @endif
    
            @foreach ($elements as $element)
            @if (is_string($element))
            <li class="page-item disabled">{{ $element }}</li>
            @endif
    
            @if (is_array($element))
            @foreach ($element as $page => $url)
            @if ($page == $paginator->currentPage())
            <li class="page-item active">
                <a class="page-link-active-number">{{ $page }}</a>
            </li>
            @else
            <li class="page-item">
                <a class="page-link-active-number" 
                href="{{ $url }}">{{ $page }}</a>
            </li>
            @endif
            @endforeach
            @endif
            @endforeach
    
            @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-item-next" 
                href="{{ $paginator->nextPageUrl() }}" 
                rel="next">Next</a>
            </li>
            @else
            <li class="page-item disabled">
                <a class="page-item-next" href="#">Next</a>
            </li>
            @endif
        </ul>
    </nav>
    
@endif
