<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();

        // Optional: Define membership benefits
        $membershipBenefits = [
            'Basic' => ['Access to public resources'],
            'Premium' => ['All Basic features', 'Early book reservations'],
            'VIP' => ['All Premium features', 'Personal librarian support', 'Exclusive digital content'],
        ];

        return view('profile', compact('user', 'membershipBenefits'));
    }

    public function edit()
{
    $user = auth()->user();
    return view('edit', compact('user'));
}

public function update(Request $request)
{
    $user = auth()->user();

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $user->id,
        'profile_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
    ]);

    if ($request->hasFile('profile_image')) {
        $imagePath = $request->file('profile_image')->store('profile_images', 'public');
        $user->profile_image = $imagePath;
    }

    $user->name = $request->name;
    $user->email = $request->email;
    $user->save();

    return redirect()->route('edit')->with('success', 'Profile updated successfully.');
}

public function updateMembership(Request $request)
{
    $request->validate([
        'membership' => 'required|in:Silver,Gold,Platinum',
    ]);

    $user = Auth::user();
    $user->membership = $request->membership;
    $user->save();

    return redirect()->back()->with('success', 'Membership plan updated successfully!');
}

public function redeemPoints(Request $request)
{
    $user = Auth::user();

    if ($user->points >= 100) {
        $user->points -= 100;
        $user->save();

        // Optional: Store in points history
        DB::table('points_histories')->insert([
            'user_id' => $user->id,
            'description' => 'Redeemed 100 points for RM10 discount',
            'points' => -100,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Successfully redeemed 100 points!');
    }

    return redirect()->back()->with('error', 'Not enough points to redeem.');
}

public function pointsHistory()
{
    $user = Auth::user();
    $histories = DB::table('points_histories')
                    ->where('user_id', $user->id)
                    ->orderByDesc('created_at')
                    ->get();

    return view('point', compact('histories'));
}

}
