@extends('master.layout')

@section('content')

<style>
    body {
        background-color: #121212;
        font-family: 'Playfair Display', serif;
        color: #fff;
    }

    .profile-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 40px 20px;
    }

    .gold-box {
        background-color: #d4af37;
        color: #121212;
        padding: 30px;
        border-radius: 20px;
        max-width: 1000px;
        text-align: center;
        box-shadow: 0 10px 20px rgba(255, 255, 255, 0.05);
        margin-bottom: 30px;
        position: relative; /* Added for image positioning */
        overflow: hidden; /* Ensures image stays within box */
    }

    .gold-box h1 {
        font-size: 50px;
        margin-bottom: 10px;
    }

    .gold-box p {
        font-size: 30px;
        margin: 10px 0;
    }

    .profile-image-container {
        width: 150px;
        height: 150px;
        margin: 0 auto 20px;
        border-radius: 50%;
        border: 4px solid #121212;
        overflow: hidden;
        background-color: #f0f0f0;
    }

    .profile-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .membership-card {
        background-color: #2a2a2a;
        border: 2px solid #d4af37;
        border-radius: 15px;
        padding: 20px;
        margin-top: 20px;
        text-align: center;
        width: 100%;
        max-width: 700px;
    }

    .membership-card h3 {
        color: #d4af37;
        margin-bottom: 10px;
        font-size: 24px;
    }

    .gold-btn {
        background-color: #d4af37;
        border: none;
        color: #121212;
        padding: 12px 30px;
        border-radius: 30px;
        font-weight: bold;
        margin: 10px;
        cursor: pointer;
        transition: 0.3s;
    }

    .gold-btn:hover {
        background-color: #c39f27;
    }

    .image-row {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-top: 30px;
    }

    .image-row img {
        width: 250px;
        border-radius: 15px;
        border: 2px solid #d4af37;
    }

</style>

<section id="profile" class="section">
<div class="profile-container">
    <div class="gold-box">
        <div class="text-center mb-4">
    @if($user->profile_image)
        <img src="{{ asset('storage/' . $user->profile_image) }}" class="rounded-circle" style="width: 120px; height: 120px; object-fit: cover;">
    @else
        <img src="{{ asset('default-avatar.png') }}" class="rounded-circle" style="width: 120px; height: 120px; object-fit: cover;">
    @endif
</div>
        <h1>Welcome, {{ Auth::user()->name }}</h2>
        <p>Email: {{ Auth::user()->email }}</p>
        <p>Member since: {{ Auth::user()->created_at->format('F Y') }}</p>
        <a href="{{ route('edit') }}" class="gold-btn" >Edit Profile</a>
        <button class="gold-btn">Logout</button>
    </div>

    <div class="membership-card">
        <h3>Membership Status</h3>
        <p>You are currently a <strong>{{ $user->membership }}</strong> Member.</p>
        <p>Enjoy exclusive benefits like priority reservations, monthly discounts, and more!</p>
       <button class="gold-btn" data-bs-toggle="modal" data-bs-target="#membershipModal">Upgrade Plan</button>

    </div>

    <!-- Membership Upgrade Modal -->
<div class="modal fade" id="membershipModal" tabindex="-1" aria-labelledby="membershipModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" style="background-color: #2a2a2a; color: white;">
      <div class="modal-header border-0">
        <h5 class="modal-title" id="membershipModalLabel">Upgrade Membership Plan</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('membership.update') }}" method="POST">
        @csrf
        <div class="modal-body">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="membership" id="silver" value="Silver" {{ $user->membership == 'Silver' ? 'checked' : '' }}>
            <label class="form-check-label" for="silver">Silver – Basic benefits, 5% discounts</label>
          </div>
          <div class="form-check mt-2">
            <input class="form-check-input" type="radio" name="membership" id="gold" value="Gold" {{ $user->membership == 'Gold' ? 'checked' : '' }}>
            <label class="form-check-label" for="gold">Gold – Priority reservations, 10% discounts</label>
          </div>
          <div class="form-check mt-2">
            <input class="form-check-input" type="radio" name="membership" id="platinum" value="Platinum" {{ $user->membership == 'Platinum' ? 'checked' : '' }}>
            <label class="form-check-label" for="platinum">Platinum – Free dessert, 20% discounts</label>
          </div>
        </div>
        <div class="modal-footer border-0">
          <button type="submit" class="gold-btn">Update Membership</button>
        </div>
      </form>
    </div>
  </div>
</div>


    <div class="image-row">
        <img src="assets/img/Book/library1.jpg" alt="Chef Signature">
        <img src="assets/img/Book/library2.jpeg" alt="Chef Signature">
    </div>

    <!-- Member Points -->
<div class="membership-card">
    <h3>Your Member Points</h3>
    <p>You currently have <strong>{{ $user->points ?? 0 }}</strong> points.</p>
    <p>Earn points for reservations, reviews, and promotions!</p>

    @if(($user->points ?? 0) >= 100)
        <form action="{{ route('points.redeem') }}" method="POST" style="margin-top: 15px;">
            @csrf
            <button type="submit" class="gold-btn">Redeem 100 Points for RM10 Discount</button>
        </form>
    @else
        <p style="color: grey; font-size: 14px;">You need at least 100 points to redeem rewards.</p>
    @endif

    <a href="{{ route('points.history') }}" class="gold-btn mt-2">View Points History</a>
</div>



</div>
</section>

@endsection
