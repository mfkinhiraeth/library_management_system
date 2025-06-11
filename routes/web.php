<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BookController;
use App\Http\Controllers\RoomController;

Route::get('/', function(){
    return view('welcome');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/mainpage', function () {
    return view('mainpage');
})->name('mainpage');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect()->route('mainpage');
})->name('dashboard');

// Authenticated user routes
//Route::middleware(['auth'])->group(function () {
    // Use auth()->user() instead of passing userId for security
    //Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
    //Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
//});


Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
     Route::get('/edit', [ProfileController::class, 'edit'])->name('edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

});

Route::post('/membership/update', [ProfileController::class, 'updateMembership'])->name('membership.update');
Route::get('/points/history', [ProfileController::class, 'pointsHistory'])->name('points.history');
Route::post('/membership/update', [ProfileController::class, 'updateMembership'])->name('membership.update');

Route::post('/points/redeem', [ProfileController::class, 'redeemPoints'])->name('points.redeem');
Route::get('/point', [ProfileController::class, 'pointsHistory'])->name('points.history');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
    return view('mainpage');
})->name('home');

//Book

//Route::get('/', [BookController::class, 'index'])->name('home');

Route::get('/books', [BookController::class, 'showCatalog'])->name('books.catalog');

Route::get('/borrow', [BookController::class, 'showBorrowForm'])->name('books.borrow.form');
Route::post('/borrow', [BookController::class, 'borrow'])->name('books.borrow');

Route::get('/return', [BookController::class, 'showReturnForm'])->name('books.return.form');
Route::post('/return', [BookController::class, 'return'])->name('books.return');

//Reserve

Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
Route::post('/rooms/{id}/reserve', [RoomController::class, 'reserve'])->name('rooms.reserve');
Route::patch('/rooms/{id}/cancel', [RoomController::class, 'cancel'])->name('rooms.cancel');


