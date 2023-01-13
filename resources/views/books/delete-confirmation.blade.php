@section('title')
	{{ $title }}
@endsection

<x-layouts.app>
	<div class="my-12 max-w-md mx-auto px-4  w-full">
		<div class="text-center">
			<span class="block flex items-center justify-center w-12 h-12 bg-red-200 rounded-full  mx-auto">
				<x-heroicon-s-exclamation-triangle class="w-8 h-8 text-red-500" />
			</span>
			<p class="mt-8">
			Are you sure you want to delete this book <strong>{{ $book->title }}</strong>?
			If you do, it will be gone forever.
			</p>
		</div>

		<form action="{{ route('books.destroy', ['bookId' => $book]) }}" class="text-center mt-6" method="POST">
			@csrf
			@method('DELETE')
			<input type="hidden" name="id" value="{{ $book->id }}" />
			<a href="{{ route('books.edit', ['bookId' => $book]) }}" class="btn-white mr-4">Cancel</a>
			<button type="submit" class="btn-red">Delete</button>
		</form>
	</div>
</x-layouts.app>
