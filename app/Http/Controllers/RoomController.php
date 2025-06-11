<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('rooms', compact('rooms'));
    }

    public function reserve($id)
{
    $room = Room::findOrFail($id);
    if ($room->is_available) {
        $room->is_available = false;
        $room->save();
        return redirect()->route('rooms.index')->with('success', 'Room reserved successfully!');
    }
    return redirect()->route('rooms.index')->with('error', 'Room is already reserved.');
}

public function cancel($id)
{
    $room = Room::findOrFail($id);
    if (!$room->is_available) {
        $room->is_available = true;
        $room->save();
        return redirect()->route('rooms.index')->with('success', 'Reservation canceled.');
    }
    return redirect()->route('rooms.index')->with('error', 'Room is already available.');
}
}
