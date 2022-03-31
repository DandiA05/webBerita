<style>
    .pagination .page-item .page-link {
        border-color: #dbdbdb;
        color: #b5b5b5;
        font-size: 14px;
        font-weight: 500;
        padding: 0.5rem 0.75rem;
}
.page-item.active .page-link {
    z-index: 3;
    color: #fff;
    background-color: #000;
    border-color: #007bff;
}
.pagination .page-item.active .page-link, .pagination .page-item:hover .page-link, .pagination .page-item:focus .page-link, .pagination .page-item:active .page-link {
    color: #ffff;
}
.page-item .page-link {
    border-radius: 3px;
    margin: 0 3px;
    margin-top: 0px;
    margin-right: 3px;
    margin-bottom: 0px;
    margin-left: 3px;
}
</style>

<!DOCTYPE html>
<html>

</body>


@if ($paginator->hasPages())
<nav aria-label="Page navigation example">
	<ul class="pagination">
		@if ($paginator->onFirstPage())
		<li class="page-item disabled">
			<a class="page-link" href="#"
			tabindex="-1">Previous</a>
		</li>
		@else
		<li class="page-item"><a class="page-link"
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
			<a class="page-link">{{ $page }}</a>
		</li>
		@else
		<li class="page-item">
			<a class="page-link"
			href="{{ $url }}">{{ $page }}</a>
		</li>
		@endif
		@endforeach
		@endif
		@endforeach

		@if ($paginator->hasMorePages())
		<li class="page-item">
			<a class="page-link"
			href="{{ $paginator->nextPageUrl() }}"
			rel="next">Next</a>
		</li>
		@else
		<li class="page-item disabled">
			<a class="page-link" href="#">Next</a>
		</li>
		@endif
	</ul>
</nav>
	@endif

</html>
