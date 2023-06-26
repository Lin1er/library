<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;

use App\Models\Category;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::all();
        $books = Book::all();
        return view('book.books', [
            "title" => "Books",
            'category' => $category,
            "books" => $books
        ]);
    }
    
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $category = Category::all();
        $book = Book::find($id);
        return view('book.book', [
            "title" => "Detail Buku",
            'category' => $category,
            "book" => $book
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        $book = new Book();
        // Set the attributes of the book object based on the form inputs
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        // Save the book object to the database
        $book->save();

        return redirect()->route('books.index')->with('success', 'Book created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('book.edit', [
            "book" => $book
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        // Update the attributes of the book object based on the form inputs
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        // Save the updated book object to the database
        $book->save();

        return redirect()->route('books.index')->with('success', 'Book updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        // Delete the book from the database
        $book->delete();

        return redirect()->route('books.index')->with('success', 'Book deleted successfully');
    }
}
