@extends('master.layout')

@section('content')

<section id="Points" class="section">
<div class="container py-5 text-white">
    <h2 class="mb-4">Points History</h2>
    <div class="card bg-dark text-white">
        <div class="card-body">
            @forelse($histories as $history)
                <div class="d-flex justify-content-between border-bottom py-2">
                    <span>{{ $history->description }}</span>
                    <span class="{{ $history->points > 0 ? 'text-success' : 'text-danger' }}">
                        {{ $history->points > 0 ? '+' : '' }}{{ $history->points }} pts
                    </span>
                </div>
            @empty
                <p>You have no point transactions yet.</p>
            @endforelse
        </div>
    </div>
</div>
</section>
@endsection
