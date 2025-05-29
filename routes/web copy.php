<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MeetUpController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [GuestController::class, 'index'])->name('welcome');
Route::view('/about', 'about');
Route::view('/team', 'team');
Route::view('/award', 'award');
Route::view('/sponsor', 'sponsor');
Route::view('/contact', 'contact');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/shop', 'GuestController@shop')->name('shop');

//Event routes
Route::get('/event', [EventController::class, 'index'])->name('event.index');
Route::get('/events/create', ['middleware' => 'auth', 'uses' => 'EventController@createEvent'])->name('create/event');
Route::post('/events/create', ['middleware' => 'auth', 'uses' => 'EventController@storeEvent'])->name('event.save');
Route::get('/events/{event}', ['middleware' => 'auth', 'uses' => 'EventController@show'])->name('event.show');
Route::get('/events/{event}/edit', ['middleware' => 'auth', 'uses' => 'EventController@editEvent'])->name('event.edit');
Route::patch('/events/{event}/update', ['middleware' => 'auth', 'uses' => 'EventController@updateEvent'])->name('update.event');
Route::delete('/events/{event}/delete', ['middleware' => 'auth', 'uses' => 'EventController@delete'])->name('event.delete');
Route::get('/events', ['middleware' => 'auth', 'uses' => 'EventController@eventDashboard'])->name('event.dashboard');
Route::get('/past-event', ['middleware' => 'auth', 'uses' => 'EventController@uploadPastEventPicture'])->name('event.past');
Route::post('/past-event', ['middleware' => 'auth', 'uses' => 'FileController@upload'])->name('upload');
Route::get('/past-event/{event}', ['middleware' => 'auth', 'uses' => 'EventController@showPastEvent'])->name('event.past.show');
Route::get('/past-event/{event}/edit', ['middleware' => 'auth', 'uses' => 'EventController@editPastEvent'])->name('event.past.edit');
Route::patch('/past-event/{event}', ['middleware' => 'auth', 'uses' => 'EventController@updatePastEvent'])->name('event.past.update');
Route::delete('/past-event/{event}/delete', ['middleware' => 'auth', 'uses' => 'EventController@deletePastEvent'])->name('event.past.delete');

//Member Registration
Route::resource('member', MemberController::class);
Route::resource('gallery', GalleryController::class);
Route::get('/manage', [GalleryController::class, 'manageGallery'])->name('gallery.manage');

Route::get('/meetups', [MeetUpController::class, 'index'])->name('meetup.register.view');
Route::post('/meetups', [MeetUpController::class, 'store'])->name('meetup.register.store');

//Export Data
Route::get('/export/participants', ['middleware' => 'auth', 'uses' => 'FileController@downloadParticipantExcel'])->name('export.participant');
Route::get('/export/events', ['middleware' => 'auth', 'uses' => 'FileController@downloadMemberExcel'])->name('export.member');


//Quiz debate
Route::get('/quiz-debate', [QuizController::class, 'index'])->name('quiz.index');
Route::post('/quiz-debate', [QuizController::class, 'store'])->name('quiz.store');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';