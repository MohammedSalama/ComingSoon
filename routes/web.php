<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComingController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\ContactController;
use App\Models\Phone;
use App\Models\Email;
use App\Models\Location;
use App\Models\Coming;
use App\Models\Slider;
use App\Models\About;

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

/*
 * Authentications Only login Dashboard Admin
 */
Route::get('/', function () {
    return view('auth.login');
});
/*
 * Website User Without Login
 */
Route::get('/', function () {
    $coming = Coming::first();                     // Because I'm using php my admin inserting Data
    $slider = Slider::first();                     // Because I'm using php my admin inserting Data
    $about = About::all();                         //I'm using all() beacause using add.blade in it
    $location = Location::first();                 // Because I'm using php my admin inserting Data
    $email = Email::first();                       // Because I'm using php my admin inserting Data
    $phone = Phone::first();                       // Because I'm using php my admin inserting Data
    return view('layouts.website.master',
        compact('coming',
            'slider','about','location','email','phone')); // Including This in my Website Frontend
})->name('coming');

/*
 *  Title , Description Coming Soon
 */
Route::get('coming',[ComingController::class,'index'])->name('coming');
Route::post('coming/{id}',[ComingController::class,'update'])->name('coming.update');
/*
 * E-mail Subscribers
 */
Route::get('subscribe',[SubscribeController::class,'index'])->name('subscribe');
Route::post('subscribe/store',[SubscribeController::class,'store'])->name('subscribe.store');
Route::get('subscribe/update/{id}',[SubscribeController::class,'update'])->name('subscribe.update');
Route::post('subscribe/destroy',[SubscribeController::class,'destroy'])->name('subscribe.destroy');
/*
 * EUM IPSAM Update and Show in Frontend Website
 */
Route::get('slider',[SliderController::class,'index'])->name('slider');
Route::post('slider/{id}',[SliderController::class,'update'])->name('slider.update');
/*
 * Add , Update , Delete
 */
Route::get('about',[AboutController::class,'index'])->name('about');
Route::post('about/store',[AboutController::class,'store'])->name('about.store');
Route::post('about/destroy',[AboutController::class,'destroy'])->name('about.destroy');
Route::post('about/{id}',[AboutController::class,'update'])->name('about.update');
/*
 * Insert , Update Your Location
 */
Route::get('location',[LocationController::class,'index'])->name('location');
Route::post('location/{id}',[LocationController::class,'update'])->name('location.update');
Route::post('location/store',[LocationController::class,'store'])->name('location.store');
/*
 * [Your E-mail] (OR) [Company E-mail]
 */
Route::get('email',[EmailController::class,'index'])->name('email');
Route::post('email/{id}',[EmailController::class,'update'])->name('email.update');
Route::post('email/store',[EmailController::class,'store'])->name('email.store');
/*
 * [Your Phone] (OR) [Company Phone]
 */
Route::get('phone',[PhoneController::class,'index'])->name('phone');
Route::post('phone/{id}',[PhoneController::class,'update'])->name('phone.update');
Route::post('phone/store',[PhoneController::class,'store'])->name('phone.store');
/*
 * User Contact
 */
Route::get('contact',[ContactController::class,'index'])->name('contact');
Route::post('contact/store',[ContactController::class,'store'])->name('contact.store');
Route::get('contact/update/{id}',[ContactController::class,'update'])->name('contact.update');
Route::post('contact/destroy',[ContactController::class,'destroy'])->name('contact.destroy');
/*
 * Admin Dashboard Control Frontend Website Show to user
 */
Route::get('/admin_dashboard', function () {
    return view('layouts.coming.admin_dashboard');
})->middleware(['auth'])->name('admin_dashboard');

require __DIR__.'/auth.php';
