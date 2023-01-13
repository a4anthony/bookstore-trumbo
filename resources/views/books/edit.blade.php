@section('title')
	{{ $title }}
@endsection

<x-layouts.app>
	<div class="form-wrap">
		<x-book-form :book="$book" />
	</div>
</x-layouts.app>
