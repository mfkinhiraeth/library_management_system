@extends('master.layout')

@section('content')

<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: #f3f4f6;
        margin: 0;
        padding: 0;
    }

    .return-container {
        max-width: 500px;
        margin: 80px auto;
        padding: 30px;
        background: white;
        border-radius: 15px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .return-container h1 {
        font-size: 28px;
        margin-bottom: 25px;
        color: #1f2937;
    }

    .form-group {
        margin-bottom: 20px;
        text-align: left;
    }

    .form-group label {
        display: block;
        font-weight: 600;
        margin-bottom: 6px;
        color: #374151;
    }

    .form-group input {
        width: 100%;
        padding: 10px;
        border: 1px solid #d1d5db;
        border-radius: 8px;
        font-size: 14px;
        transition: border-color 0.3s;
    }

    .form-group input:focus {
        border-color: #6366f1;
        outline: none;
    }

    .btn-submit {
        background: #4f46e5;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 10px;
        font-weight: bold;
        cursor: pointer;
        transition: background 0.3s;
    }

    .btn-submit:hover {
        background: #4338ca;
    }

    .success, .error {
        font-weight: 600;
        margin-bottom: 15px;
        padding: 10px;
        border-radius: 8px;
    }

    .success {
        color: #166534;
        background: #dcfce7;
        border: 1px solid #bbf7d0;
    }

    .error {
        color: #991b1b;
        background: #fee2e2;
        border: 1px solid #fecaca;
    }

    .back-link {
        display: inline-block;
        margin-top: 20px;
        color: #2563eb;
        text-decoration: none;
    }

    .back-link:hover {
        text-decoration: underline;
    }
</style>

<section id="return" class="section">
<div class="return-container">
    <h1>Return a Book</h1>

    @if(session('success'))
        <div class="success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="error">{{ session('error') }}</div>
    @endif

    <form method="POST" action="{{ route('books.return') }}">
        @csrf

        <div class="form-group">
            <label>Book Title</label>
            <input type="text" name="book_title" placeholder="Enter book title..." required>
        </div>

        <button type="submit" class="btn-submit">Return Book</button>
    </form>

    <a href="{{ route('books.catalog') }}" class="back-link">← Back to Catalog</a>
</div>
</section>
@endsection
