<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class BookController extends Controller
{
    public function index() {
    return view('mainpage');
}

public function showCatalog() {
    $books = Book::all();
    return view('books', compact('books'));
}

public function showBorrowForm() {
    $books = Book::where('is_borrowed', false)->get();
    return view('borrow', compact('books'));
}

public function borrow(Request $request) {
    $book = Book::where('title', $request->book_title)->first();

    if ($book && !$book->is_borrowed) {
        $book->is_borrowed = true;
        $book->save();
        session(['borrowed_at_' . $book->id => now()]);
        return back()->with('success', 'Successfully borrowed: ' . $book->title);
    }

    return back()->with('error', 'Book not available or not found.');
}

public function showReturnForm() {
    return view('return');

}

public function return(Request $request) {
    $book = Book::where('title', $request->book_title)->first();

    if ($book && $book->is_borrowed) {
        $book->is_borrowed = false;
        $book->save();

        $borrowedAt = session('borrowed_at_' . $book->id);
        $days = \Carbon\Carbon::parse($borrowedAt)->diffInDays(now());
        $fine = max(0, $days - 7);

        return back()->with('success', "Successfully returned '{$book->title}'. Fine: RM{$fine}");
    }

    return back()->with('error', 'Book not found or not currently borrowed.');
}

}
