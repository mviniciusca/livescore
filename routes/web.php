<?php

use App\Http\Controllers\EventController;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/**Redirect to App  */
Route::get('/dashboard', function () {
    return redirect('/app');
});

/** Route homepage */
Route::get('/', function () {
    Auth::loginUsingId(1);
    return redirect('/app');
});

/** Group routes in middleware auth in group app */
Route::middleware([ 'auth', 'verified' ])->prefix('/app')->group(function () {

    /** Route app homepage */
    Route::get('/', function () {
        return view('homepage', [
            'events' => Event::query()->with('teamHome', 'teamGuest')->get()
        ]);
    })->name('dashboard');

    /** Route app profile */
    Route::get('/profile', [ ProfileController::class, 'edit' ])->name('profile.edit');
    Route::patch('/profile', [ ProfileController::class, 'update' ])->name('profile.update');
    Route::delete('/profile', [ ProfileController::class, 'destroy' ])->name('profile.destroy');

    /** Route app events */
    Route::get('/event', [ EventController::class, 'index' ])->name('event.index');
    Route::post('/event', [ EventController::class, 'store' ])->name('event.store');
    Route::patch('/event', [ EventController::class, 'update' ])->name('event.update');
    Route::delete('/event/{event}', [ EventController::class, 'destroy' ])->name('event.destroy');
});









// Route::get('/dashboard', function () {
//     Auth::loginUsingId(1);
//     return view('dashboard', [
//         'events' => Event::query()->with('teamHome', 'teamGuest')->get()
//     ]);
// })->middleware([ 'auth', 'verified' ])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ ProfileController::class, 'edit' ])->name('profile.edit');
//     Route::patch('/profile', [ ProfileController::class, 'update' ])->name('profile.update');
//     Route::delete('/profile', [ ProfileController::class, 'destroy' ])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';
