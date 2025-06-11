@extends('master.layout')

@section('content')


<style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f5f5f5;
            margin: 0;
            padding: 40px;
        }

        .container {
            display: flex;
            gap: 40px;
            align-items: flex-start;
        }

        /* Borrow Form */
        .borrow-form {
            flex: 1;
            max-width: 30%;
            background: linear-gradient(to bottom right, #e0f7fa, #e3f2fd);
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
        }

        .borrow-form h2 {
            font-size: 24px;
            color: #0d47a1;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .borrow-form .input-group {
            margin-bottom: 20px;
        }

        .borrow-form label {
            font-weight: 600;
            color: #333;
            display: block;
            margin-bottom: 6px;
        }

        .borrow-form input[type="text"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #bbb;
            border-radius: 8px;
            font-size: 16px;
            background-color: #f9f9f9;
            transition: border-color 0.3s;
        }

        .borrow-form input[type="text"]:focus {
            border-color: #2196f3;
            outline: none;
        }

        .borrow-form button {
            background: #1565c0;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .borrow-form button:hover {
            background: #0d47a1;
        }

        .borrow-form .error {
            color: #d32f2f;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .borrow-form .success {
            color: #2e7d32;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .borrow-form .back-link {
            display: inline-block;
            margin-top: 20px;
            color: #1976d2;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .borrow-form .back-link:hover {
            color: #0d47a1;
        }

        /* Book List */
        .book-list {
            flex: 2;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 20px;
        }

        .book-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            padding: 15px;
        }

        .book-cover {
            width: 100%;
            height: 200px;
            background-color: #ccc;
            border-radius: 8px;
            margin-bottom: 10px;
            text-align: center;
            line-height: 200px;
            font-weight: bold;
            color: #555;
        }

        .book-title {
            font-size: 18px;
            font-weight: 600;
            color: #0d47a1;
            margin: 5px 0;
        }

        .book-author {
            font-size: 14px;
            color: #666;
        }

        .book-genre {
            font-size: 13px;
            color: #888;
        }
</style>

<section id="borrow" class="section">
<div class="container">

    <!-- Borrow Form -->
    <div class="borrow-form">
        <h2><i class="fas fa-book-open-reader"></i> Borrow a Book</h2>

        @if(session('error'))
            <p class="error">{{ session('error') }}</p>
        @endif

        @if(session('success'))
            <p class="success">{{ session('success') }}</p>
        @endif

        <form method="POST" action="{{ route('books.borrow') }}">
            @csrf
            <div class="input-group">
                <label for="book_title">Enter Book Title:</label>
                <input type="text" name="book_title" id="book_title" placeholder="e.g. The Great Gatsby" required>
            </div>

            <button type="submit"><i class="fas fa-paper-plane"></i> Confirm Borrow</button>
        </form>

        <a href="{{ url('/') }}" class="back-link">← Back to Home</a>
    </div>

    <!-- Book List -->
    <div class="book-list">
        @foreach($books as $book)
        <div class="book-card">

            <div class="book-title">{{ $book->title }}</div>
            <div class="book-author">by {{ $book->author }}</div>
            <div class="book-genre">{{ $book->genre }}</div>
        </div>
        @endforeach
    </div>

</div>

</section>

@endsection
