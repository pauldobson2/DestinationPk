<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\TripDetailsController;
use App\Http\Controllers\MediaGalleryController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PakistanVisa;
use App\Http\Controllers\EmailContactController;



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


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('/trip_brochure', [TripDetailsController::class, 'tripbrochure'])->name('trip_brochure');
Route::get('/download_pdf/{slug}', [TripDetailsController::class, 'downloadPdf'])->name('download_pdf');
Route::get('/trip_brouchure_download/{slug}', [TripDetailsController::class, 'trip_brouchure_download'])->name('trip_brouchure_download');

Route::get('/trip/{slug}', [TripDetailsController::class, 'tripDetails'])->name('trip_details');
Route::get('/trip-list/{category}', [TripDetailsController::class, 'tripList'])->name('trip_list');
Route::get('/trips-list/{locationName}', [TripDetailsController::class, 'tripsList'])->name('trips_list');
Route::post('/subscribe-newsletter', [NewsletterController::class, 'subscribe'])->name('subscribe.newsletter');
Route::get('/pakistan-visa', [PakistanVisa::class, 'pakistan_visa'])->name('pakistan_visa');
Route::get('/about-us', function () {
    return view('website.about');
})->name('about_us');
Route::get('/contact-us', function () {
    return view('website.contact');
})->name('contact_us');
Route::post('/send-contact-email', [EmailContactController::class, 'sendEmail'])->name('send_contact_email');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
Route::resource('categories', CategoryController::class);
Route::resource('trips',TripController::class);
Route::get('/media-galleries/create/{trip_id}', [MediaGalleryController::class, 'create'])->name('media-galleries.create');
Route::post('/media-galleries/store}', [MediaGalleryController::class, 'store'])->name('media-galleries.store');
Route::delete('/media-galleries/destroy/{id}}', [MediaGalleryController::class, 'destroy'])->name('media-galleries.destroy');
Route::get('/media-galleries/{id}/edit', [MediaGalleryController::class, 'edit'])->name('media-galleries.edit');
Route::put('/media-galleries/{media_gallery}', [MediaGalleryController::class, 'update'])->name('media-galleries.update');
});



