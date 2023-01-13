@props(['book' => null])
<span class="text-lg capitalize text-center block border-b pb-5 mb-5 font-bold">
	{{ $book ? 'Edit' : 'Add' }} Book
</span>
<form action="{{  $book ? route("books.update")  : route("books.store") }}" method="POST">
	@csrf
	@if($book)
		@method('PUT')
		<input type="hidden" name="id" value="{{ $book->id }}" />
	@endif
	<div class="space-y-6">
		<div class="flex flex-col relative">
			<label for="title" class="label">Title</label>
			<input type="text" name="title" value="{{ old('title', $book->title ?? '') }}" placeholder="Enter book title" id="title" class="input @error('title') input-error @enderror">
			@error('title')
			<div class="error">{{ $message }}</div>
			@enderror
		</div>
		<div class="flex flex-col relative">
			<label for="author" class="label">Author</label>
			<input type="text" name="author" value="{{ old('author', $book->author ?? '') }}" placeholder="Enter book author" id="author" class="input @error('author') input-error @enderror">
			@error('author')
			<div class="error">{{ $message }}</div>
			@enderror
		</div>
		<div class="flex flex-col relative">
			<label for="isbn" class="label">ISBN</label>
			<input type="text" name="isbn"  value="{{ old('isbn', $book->isbn ?? '') }}" placeholder="Enter book ISBN" id="isbn" class="input @error('isbn') input-error @enderror">
			@error('isbn')
			<div class="error">{{ $message }}</div>
			@enderror
		</div>
	</div>
	<div class="flex justify-end mt-6">
		@if($book)
			<a href="{{ route('books.delete-confirmation', ['bookId' => $book]) }}" type="submit" class="animate btn-red mr-2">
				Delete
			</a>
		@endif
		<button type="submit" class="animate btn">
			{{ $book ? 'Update' : 'Create' }}
		</button>
	</div>
</form>
