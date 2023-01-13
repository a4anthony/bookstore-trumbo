<nav class="py-4 sm:py-6 bg-white px-4 z-10 border-b sticky top-0">
	<div class="flex justify-between max-w-7xl mx-auto px-4 sm:px-0  w-full items-center">
			<span class="hidden sm:block text-gray-800 text-lg font-bold uppercase tracking-wider">Book<span class="text-blue-600 tracking-wider">Store</span></span>
			<span class="block sm:hidden text-gray-800 text-lg font-bold uppercase tracking-wider">B<span class="text-blue-600 tracking-wider">S</span></span>
			<div class="flex items-center">
				@if(Route::currentRouteName() !== 'books.create')
				<a href="{{ route('books.create') }}" class="animate btn mr-3">
					<x-heroicon-o-plus class="w-5 h-5 mr-2" />
					Add Book
				</a>
				@endif
				<a href="{{ route('books.index') }}" class="animate btn-white">
					Our Books
				</a>
			</div>
	</div>
</nav>
