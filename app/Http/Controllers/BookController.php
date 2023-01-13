<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\RedirectResponse;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::orderBy("created_at", "desc")->get();
        $title = "Our Books";
        return view("books.index", compact(["books", "title"]));
    }

    public function create()
    {
        $title = "Create Book";
        return view("books.create", compact("title"));
    }

    public function store()
    {
        \request()->validate([
            "title" => "required|string|max:255",
            "author" => "required|string|max:255",
            "isbn" => "required|numeric|digits:13",
        ]);
        Book::create(\request()->all());
        notify()->success("Book created successfully");
        return redirect()->route("books.index");
    }

    public function edit($bookId)
    {
        $book = Book::findOrFail($bookId);
        $title = "Edit Book";
        return view("books.edit", compact(["book", "title"]));
    }

    public function update()
    {
        \request()->validate([
            "id" => "required|numeric",
            "title" => "required|string|max:255",
            "author" => "required|string|max:255",
            "isbn" => "required|numeric|digits:13",
        ]);
        $book = Book::findOrFail(\request()->id);
        $book->update(\request()->all());
        notify()->success("Book updated successfully");
        return redirect()->route("books.index");
    }

    public function deleteConfirmation($bookId)
    {
        $book = Book::findOrFail($bookId);
        $title = "Delete Confirmation";
        return view("books.delete-confirmation", compact(["book", "title"]));
    }

    public function destroy()
    {
        \request()->validate([
            "id" => "required|numeric",
        ]);
        $book = Book::findOrFail(\request()->id);
        $book->delete();
        notify()->success("Book deleted successfully");
        return redirect()->route("books.index");
    }
}
