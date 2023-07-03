<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateBookRequest;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\BooksImport;
use App\Models\Category;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('book.books', [
            "title" => "Books",
            "books" => $books
        ]);
    }
    
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $book = Book::find($id);
        return view('book.book', [
            "title" => "Detail Buku",
            "book" => $book
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $book = Book::all();

        return view('admin.books.create',[
            'category' => $book->category,
            'books' => $book,
            'title' => 'Create Book'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'thumbnail' => 'required|image|max:2048',
        ]);

        $book = new Book([
            'title' => $request->title,
            'author' => $request->author,
            'synopsis' => $request->synopsis,
        ]);

        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $thumbnailPath = $thumbnail->store('thumbnails', 'public');
            $book->thumbnail_url = $thumbnailPath;
        }

        $book->save();

        return redirect()->route('admin.index')->with('success', 'Buku berhasil ditambahkan.');
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

// import data buku lewat excel
    // public function import(Request $request)
    // {
    //     $request->validate([
    //         'excel_file' => 'required|mimes:xls,xlsx',
    //     ]);

    //     $file = $request->file('excel_file');

    //     try {
    //         Excel::import(new BooksImport, $file);

    //         return redirect()->route('books.index')->with('success', 'Data buku berhasil diimpor.');
    //     } catch (\Exception $e) {
    //         return redirect()->route('books.index')->with('error', 'Terjadi kesalahan saat mengimpor data buku.');
    //     }
    // }