<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home.home');
// })->name('home');
Route::get('/', [EventController::class, 'index']);

Route::get('/home', function () {
    return view('home.home');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', [EmailController::class, 'create']);
Route::post('/contact', [EmailController::class, 'store']);

Route::get('/register', [UserController::class, 'register']);
// Route::get('/register', function () {
//     return view('users.create');
// });
Route::get('/login', function () {
    return view('login');
});

Route::get('/create-event', [EventController::class, 'createEvent']);

// edit event details
Route::patch('/update-event/{event}', [EventController::class, 'update']);
Route::get('/update-event/{event}/edit', [EventController::class, 'edit']);

Route::get('/event/{event}', [EventController::class, 'showEvent']);

Route::get('/my-event-details/{event}', [EventController::class, 'myEventDetails']);

Route::resource('users', UserController::class);
// Route::post('login', [UserController::class, 'login']);

Route::post('login', [AuthController::class, 'login'])->name('login');
// Route::post('login', 'Auth\AuthController@login');

Route::post('/create-event', [EventController::class, 'store']);
Route::get('/all-events', [EventController::class, 'allApprovedEvents']);

Route::post('/buy-ticket/{eventId}/{ticketType}', [BookingController::class, 'buyTicket'])->name('buy-ticket');

Route::get('/my-events/{user}', [EventController::class, 'myEvents']);
Route::post('/delete-event/{user}', [EventController::class, 'deleteEvent']);

Route::get('/booked-events/{user}', [BookingController::class, 'BookedEvents']);


// edit user details
Route::patch('/update-user/{user}', [UserController::class, 'update']);
Route::get('/update-user/{user}/edit', [UserController::class, 'edit']);

// admin
Route::get('/admin/login', function () {
    return view('admin.admin-login');
});
Route::post('/admin/login', [AuthController::class, 'login'])->name('login');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
Route::get('admin/pending-events', [AdminController::class, 'pendingEvents']);
Route::get('admin/approved-events', [AdminController::class, 'approvedEvents']);
Route::get('admin/users', [AdminController::class, 'allUsers']);
Route::post('/admin/delete-event/{event}', [AdminController::class, 'deleteEvent']);
Route::post('/admin/approve-event/{event}', [AdminController::class, 'approveEvent']);
