<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\ThemeController;
use App\Models\Cart;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

##-------------------------------------------THEME ROUTES
Route::controller(ThemeController::class)->name('theme.')->group(function () {
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/', 'home')->name('index');
    Route::get('/review', 'reviews')->name('reviews');
    // Route::get('/parkingtime', 'parkingtime')->name('parkingtime');
    Route::get('/wallet', 'wallet')->name('wallet');
    Route::get('/ticket', 'ticket')->name('ticket');
    Route::get('/ticketPast', 'ticketPast')->name('ticket-past');
    Route::get('/thank', 'thank')->name('thank');
});

##-------------------------------------------SUBSCRIBER
Route::post('/subscriber/store', [SubscriberController::class, 'store'])->name('subscribers.store');

##-------------------------------------------CONTACT
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

##-------------------------------------------REVIEWS
Route::post('/reviews/store', [ReviewController::class, 'store'])->name('reviews.store');

##-------------------------------------------SERVICES
Route::get('/services', [ProductController::class, 'services'])->name('product.services')->middleware('auth');
Route::get('/parking', [ProductController::class, 'parking'])->name('product.parking');

##-------------------------------------------CART
Route::get('/cart', [CartController::class, 'cart'])->name('cart')->middleware('auth');
Route::get('/addproducttocart/{productid}', [CartController::class, 'add'])->name('addproducttocart')->middleware('auth');
Route::get('/deletecartitem/{cartid}', [CartController::class, 'remove']);

##-------------------------------------------PAYMENT STRIPE
Route::get('stripe', [StripePaymentController::class, 'stripe']);
Route::post('stripe', [StripePaymentController::class, 'stripePost'])->name('stripe.post');

##-------------------------------------------APPOINTMENT TIME
Route::controller(AppointmentController::class)->middleware('auth')->group(function () {
    Route::get('/appointments', 'index')->name('appointments.index');
    Route::get('/appointments/create', 'create')->name('theme.parkingtime');
    Route::post('/appointments', 'store')->name('appointments.store');
    // Route::get('/cancel/{id}', 'remove')->name('appointment.cancel');
});









Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
