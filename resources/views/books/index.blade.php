@section('title')
	{{ $title }}
@endsection

<x-layouts.app>
	<div class="my-12 max-w-7xl mx-auto px-4  w-full">
		<h1 class="text-center  text-2xl font-bold tracking-wide">Our Books ({{ $books->count() }})</h1>
		<span class="block w-14 bg-gray-800 h-1 mx-auto mt-3 mb-8"></span>
		@if($books->count() > 0)
		<div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6">
			@foreach($books as $book)
				<a href="{{ route('books.edit', ['bookId' => $book]) }}" class="flex group bg-white flex-col w-full items-center hover:shadow rounded-2xl p-4 border">
					<x-heroicon-s-photo class="w-16 h-16 sm:w-32 sm:h-32 text-gray-400 group-hover:scale-105 animate" />
					<div class="w-full text-center">
						<h3 class="text-lg text-gray-700 font-semibold">{{ $book->title }}</h3>
						<p class="text-sm mt-2 mb-4 font-medium text-gray-500 italic">By {{ $book->author }}</p>
						<span class="font-medium text-sm text-gray-600">
							ISBN: {{ $book->isbn }}
						</span>
					</div>
				</a>
			@endforeach
		</div>
		@else
		<div class="flex flex-col items-center mt-16">
			<x-heroicon-s-book-open class="w-16 h-16 text-gray-400 animate" />
			<h3 class="text-lg text-gray-700 font-semibold mt-4">No books found</h3>

			<a href="{{ route('books.create') }}" class="animate btn mt-12">
				<x-heroicon-o-plus class="w-5 h-5 mr-2" />
				Add A Book
			</a>
		</div>
		@endif
	</div>
</x-layouts.app>
