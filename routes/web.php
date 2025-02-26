<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ChatController;

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


        Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/chat', function () {
    return Inertia\Inertia::render('Chat/Container');
})->name('chat');

Route::middleware('auth:sanctum')->get('/chat/rooms',[ChatController::class,'rooms']);
Route::middleware('auth:sanctum')->get('/chat/room/{roomid}/messages',[ChatController::class,'messages']);
Route::middleware('auth:sanctum')->post('/chat/room/{roomid}/message',[ChatController::class,'NewMessage']);