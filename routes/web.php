<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MeetUpController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\MemberController;
use App\Models\BootCamp;
use App\Models\Scholarship;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [GuestController::class, 'index'])->name('welcome');
Route::view('/about', 'about');
Route::view('/team', 'team');
Route::view('/award', 'award');
Route::view('/sponsor', 'sponsor');
Route::view('/contact', 'contact');
// Route::get('/DataAcademyAfrica', [EventController::class, 'DataAcademyAfricaIndex'])->name('DataAcademyAfrica');
Route::get('/DataAcademyAfrica', [EventController::class, 'DataScienceBootcampIndex'])->name('DataScienceBootcamp');
Route::post('/registerDataAcademyAfrica', [EventController::class, 'storeDataAcademyAfrica'])->name('form.store.DataAcademyAfrica');
Route::post('/registerDataScienceBootcamp', [EventController::class, 'storeDataScienceBootcamp'])->name('form.store.DataScienceBootcamp');

// Scholarship routes
Route::get('/scholarship/apply/{token}', [EventController::class, 'showScholarshipForm'])
    ->name('scholarship.apply');

Route::post('/scholarship/apply', [EventController::class, 'storeScholarshipApplication'])
    ->name('scholarship.store');

Route::get('/scholarship/thank-you', function () {
    return view('scholarship-thankyou');
})->name('scholarship.thankyou');


Route::get('/home', [GuestController::class, 'index'])->name('home'); // Consider fixing if HomeController exists
Route::get('/shop', [GuestController::class, 'shop'])->name('shop');

// Event Routes
Route::get('/event', [EventController::class, 'index'])->name('event.index');
Route::middleware('auth')->group(function () {
    Route::get('/events/create', [EventController::class, 'createEvent'])->name('create/event');
    Route::post('/events/create', [EventController::class, 'storeEvent'])->name('event.save');
    Route::get('/events/{event}', [EventController::class, 'show'])->name('event.show');
    Route::get('/events/{event}/edit', [EventController::class, 'editEvent'])->name('event.edit');
    Route::patch('/events/{event}/update', [EventController::class, 'updateEvent'])->name('update.event');
    Route::delete('/events/{event}/delete', [EventController::class, 'delete'])->name('event.delete');
    Route::get('/events', [EventController::class, 'eventDashboard'])->name('event.dashboard');

    Route::get('/datascience/applicant', [EventController::class, 'bootcampDatascience'])->name('bootcamp.datascience');
    Route::get('/dataacademy/applicant', [EventController::class, 'bootcampDataacademy'])->name('bootcamp.dataacademy');
    Route::get('/admin/scholarships', [EventController::class, 'scholarshipApplications'])->name('scholarship.users');


    Route::get('/past-event', [EventController::class, 'uploadPastEventPicture'])->name('event.past');
    Route::post('/past-event', [FileController::class, 'upload'])->name('upload');
    Route::get('/past-event/{event}', [EventController::class, 'showPastEvent'])->name('event.past.show');
    Route::get('/past-event/{event}/edit', [EventController::class, 'editPastEvent'])->name('event.past.edit');
    Route::patch('/past-event/{event}', [EventController::class, 'updatePastEvent'])->name('event.past.update');
    Route::delete('/past-event/{event}/delete', [EventController::class, 'deletePastEvent'])->name('event.past.delete');
    Route::get('/participants', [EventController::class, 'participantsIndex'])->name('participants');
    Route::get('/export-bootcamps/{eventtype}', [App\Http\Controllers\EventController::class, 'exportBootcamps'])->name('export.bootcamps');
});

// Member Registration
Route::resource('member', MemberController::class);

// Gallery
Route::resource('gallery', GalleryController::class);
Route::get('/manage', [GalleryController::class, 'manageGallery'])->name('gallery.manage');

// Meetups
Route::get('/meetups', [MeetUpController::class, 'index'])->name('meetup.register.view');
Route::post('/meetups', [MeetUpController::class, 'store'])->name('meetup.register.store');

// Export Data
Route::middleware('auth')->group(function () {
    Route::get('/export/participants', [FileController::class, 'downloadParticipantExcel'])->name('export.participant');
    Route::get('/export/events', [FileController::class, 'downloadMemberExcel'])->name('export.member');
});

// Quiz Debate
Route::get('/quiz-debate', [QuizController::class, 'index'])->name('quiz.index');
Route::post('/quiz-debate', [QuizController::class, 'store'])->name('quiz.store');

// Dashboard & Profile
Route::get('/dashboard', function () {
    $dataScienceCount = BootCamp::where('eventtype', 'DataScience')->count();
    $dataAcademyCount = BootCamp::where('eventtype', 'DataAcademy')->count();
    $dataScholarshipCount = Scholarship::count();

    return view('dashboard', compact('dataScienceCount', 'dataAcademyCount', 'dataScholarshipCount'));
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
