@extends('master.layout')

@section('content')

<section id="books" class="section">
<div style="padding: 2rem;">
    <h2 style="text-align: center; margin-bottom: 2rem;">📚 Book Catalog</h2>

    <div style="display: flex; flex-wrap: wrap; gap: 2rem; justify-content: center;">
        {{-- Book 1 --}}
        <div style="width: 250px; border: 1px solid #ccc; border-radius: 10px; padding: 1rem; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
            <img src="assets/img/Book/Book7.jpg" alt="The Alchemist" style="width: 100%; height: 300px; object-fit: cover; border-radius: 8px;">
            <h3 style="margin-top: 1rem;">The Alchemist</h3>
            <p><strong>Author:</strong> Paulo Coelho</p>
            <p><strong>Genre:</strong> Fiction</p>
            <p style="font-size: 0.9rem;">A young shepherd journeys in search of treasure and self-discovery, learning the language of the universe.</p>
        </div>

        {{-- Book 2 --}}
        <div style="width: 250px; border: 1px solid #ccc; border-radius: 10px; padding: 1rem; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
            <img src="assets/img/Book/Book2.jpg" alt="1984" style="width: 100%; height: 300px; object-fit: cover; border-radius: 8px;">
            <h3 style="margin-top: 1rem;">1984</h3>
            <p><strong>Author:</strong> George Orwell</p>
            <p><strong>Genre:</strong> Dystopian</p>
            <p style="font-size: 0.9rem;">A dystopian tale of surveillance, propaganda, and rebellion in a totalitarian society ruled by Big Brother.</p>
        </div>

        {{-- Book 3 --}}
        <div style="width: 250px; border: 1px solid #ccc; border-radius: 10px; padding: 1rem;">
            <img src="assets/img/Book/Book1.jpg" alt="To Kill a Mockingbird" style="width: 100%; height: 300px; object-fit: cover;">
            <h3>To Kill a Mockingbird</h3>
            <p><strong>Author:</strong> Harper Lee</p>
            <p><strong>Genre:</strong> Classic</p>
            <p>A story of racial injustice and childhood innocence in the Deep South.</p>
        </div>

        {{-- Book 4 --}}
        <div style="width: 250px; border: 1px solid #ccc; border-radius: 10px; padding: 1rem;">
            <img src="assets/img/Book/Book5.jpg" alt="Pride and Prejudice" style="width: 100%; height: 300px; object-fit: cover;">
            <h3>Pride and Prejudice</h3>
            <p><strong>Author:</strong> Jane Austen</p>
            <p><strong>Genre:</strong> Romance</p>
            <p>Elizabeth Bennet navigates love and society in 19th-century England.</p>
        </div>

        {{-- Book 5 --}}
        <div style="width: 250px; border: 1px solid #ccc; border-radius: 10px; padding: 1rem;">
            <img src="assets/img/Book/potter.jpg" alt="Harry Potter" style="width: 100%; height: 300px; object-fit: cover;">
            <h3>Harry Potter and the Philosopher's Stone</h3>
            <p><strong>Author:</strong> J.K. Rowling</p>
            <p><strong>Genre:</strong> Fantasy</p>
            <p>A boy discovers he’s a wizard and enters the magical world of Hogwarts.</p>
        </div>

        {{-- Book 6 --}}
        <div style="width: 250px; border: 1px solid #ccc; border-radius: 10px; padding: 1rem;">
            <img src="assets/img/Book/fellowship.jpg" alt="The Lord of the Rings" style="width: 100%; height: 300px; object-fit: cover;">
            <h3>The Fellowship of the Ring</h3>
            <p><strong>Author:</strong> J.R.R. Tolkien</p>
            <p><strong>Genre:</strong> Fantasy</p>
            <p>Frodo begins his journey to destroy the One Ring in Middle-earth.</p>
        </div>

        {{-- Book 7 --}}
        <div style="width: 250px; border: 1px solid #ccc; border-radius: 10px; padding: 1rem;">
            <img src="assets/img/Book/Book3.jpg" alt="The Great Gatsby" style="width: 100%; height: 300px; object-fit: cover;">
            <h3>The Great Gatsby</h3>
            <p><strong>Author:</strong> F. Scott Fitzgerald</p>
            <p><strong>Genre:</strong> Classic</p>
            <p>A tragic love story set in the Jazz Age about wealth, love, and illusion.</p>
        </div>

        {{-- Book 8 --}}
        <div style="width: 250px; border: 1px solid #ccc; border-radius: 10px; padding: 1rem;">
            <img src="assets/img/Book/Book6.jpg" alt="The Hobbit" style="width: 100%; height: 300px; object-fit: cover;">
            <h3>The Hobbit</h3>
            <p><strong>Author:</strong> J.R.R. Tolkien</p>
            <p><strong>Genre:</strong> Fantasy</p>
            <p>Bilbo Baggins embarks on a quest to help dwarves reclaim their homeland.</p>
        </div>

        {{-- Book 9 --}}
        <div style="width: 250px; border: 1px solid #ccc; border-radius: 10px; padding: 1rem;">
            <img src="assets/img/Book/Book8.jpg" alt="Animal Farm" style="width: 100%; height: 300px; object-fit: cover;">
            <h3>Animal Farm</h3>
            <p><strong>Author:</strong> George Orwell</p>
            <p><strong>Genre:</strong> Political Satire</p>
            <p>A satirical allegory about animals rebelling against their human farmer.</p>
        </div>

        {{-- Book 10 --}}
        <div style="width: 250px; border: 1px solid #ccc; border-radius: 10px; padding: 1rem;">
            <img src="assets/img/Book/davinci.jpg" alt="The Da Vinci Code" style="width: 100%; height: 300px; object-fit: cover;">
            <h3>The Da Vinci Code</h3>
            <p><strong>Author:</strong> Dan Brown</p>
            <p><strong>Genre:</strong> Thriller</p>
            <p>A symbologist uncovers secrets hidden in art, religion, and history.</p>
        </div>

    </div>

    <div style="text-align: center; margin-top: 2rem;">
        <a href="{{ url('/') }}" style="text-decoration: none; padding: 10px 20px; background-color: #2b8a3e; color: white; border-radius: 5px;">Back to Home</a>
    </div>
</div>
</section>

@endsection
