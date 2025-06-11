@extends('master.layout')

@section('content')

<section id="Editprofile" class="section">
<div class="container">
    <h2>Edit Profile</h2>

    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control" required>
        </div>

        <div class="form-group mt-3">
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email', $user->email) }}" class="form-control" required>
        </div>

        <div class="form-group mb-4">
    <label for="profile_picture" style="font-weight: bold;">Profile Picture</label><br>

    @if($user->profile_image)
        <img src="{{ asset('storage/' . $user->profile_image) }}" class="rounded-circle mb-2" style="width: 120px; height: 120px; object-fit: cover;">
    @endif

    <input type="file" name="profile_image" class="form-control-file mt-2">
</div>

        <button type="submit" class="btn btn-success mt-4">Update Profile</button>
    </form>
</div>
</section>

@endsection
