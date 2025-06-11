@extends('master.layout')

@section('content')

<style>
    body {
        background-color: #f5f5f5;
    }

    .room-container {
        max-width: 1100px;
        margin: 40px auto;
        padding: 30px;
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        text-align: center;
    }

    .room-title {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 30px;
        color: #333;
    }

    .rooms-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 25px;
    }

    .room-box {
        padding: 50px 0;
        border-radius: 16px;
        font-weight: 600;
        font-size: 1.2rem;
        transition: all 0.3s ease;
        position: relative;
        border: none;
        width: 100%;
        cursor: pointer;
    }

    .room-box:hover {
        transform: scale(1.04);
    }

    .available {
        background-color: #34d399; /* Green */
        color: white;
    }

    .unavailable {
        background-color: #f87171; /* Red */
        color: white;
        opacity: 0.8;
        cursor: not-allowed;
    }

    .cancel-btn {
        position: absolute;
        top: 8px;
        right: 12px;
        background: rgba(255,255,255,0.8);
        border: none;
        padding: 4px 8px;
        font-size: 0.8rem;
        border-radius: 8px;
        cursor: pointer;
        color: #333;
        font-weight: bold;
    }

    .cancel-btn:hover {
        background: white;
    }

    .toast {
        position: fixed;
        top: 20px;
        right: 20px;
        padding: 15px 25px;
        border-radius: 10px;
        color: white;
        font-weight: bold;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        z-index: 1000;
        opacity: 0.95;
        animation: fadeInOut 4s ease forwards;
    }

    .toast.success { background-color: #10b981; }
    .toast.error { background-color: #ef4444; }

    @keyframes fadeInOut {
        0% { opacity: 0; transform: translateY(-20px); }
        10% { opacity: 1; transform: translateY(0); }
        90% { opacity: 1; }
        100% { opacity: 0; transform: translateY(-20px); }
    }
</style>

<div class="room-container">
    <div class="room-title">Book A Room</div>

    <div class="rooms-grid">
        @foreach ($rooms as $room)
            @if ($room->is_reserved == 0)
                <!-- Room is available -->
                <form method="POST" action="{{ route('rooms.reserve', $room->id) }}">
                    @csrf
                    <button type="submit" class="room-box available">
                        {{ $room->name }}
                    </button>
                </form>
            @elseif ($room->is_reserved)
                <!-- Room is unavailable -->
                <form method="POST" action="{{ route('rooms.cancel', $room->id) }}">
                    @csrf
                    @method('PATCH')
                    <div class="room-box unavailable">
                        {{ $room->name }}
                        <button type="submit" class="cancel-btn">Cancel</button>
                    </div>
                </form>
            @endif
        @endforeach
    </div>
</div>

@if (session('success'))
    <div class="toast success">{{ session('success') }}</div>
@endif

@if (session('error'))
    <div class="toast error">{{ session('error') }}</div>
@endif

@endsection
