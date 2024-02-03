<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/switch-lang/{lang}', [App\Http\Controllers\LanguageController::class, 'Index'])->name('website-switch-lang');
Route::middleware(['locale'])->group(function () {
	Route::get('/', [App\Http\Controllers\website\HomeController::class, 'index'])->name('home');
	Route::get('/press-brefing', [App\Http\Controllers\website\PressBreifingController::class, 'index'])->name(config('dummy.menu.press-breifing.slug'));
	Route::get('/details', [App\Http\Controllers\website\DetailController::class, 'index'])->name(config('dummy.menu.details.slug'));
	Route::get('/about-unit', [App\Http\Controllers\website\AboutUnitController::class, 'index'])->name(config('dummy.menu.about-unit.slug'));
	Route::get('/unit-activity', [App\Http\Controllers\website\UnitActivityController::class, 'index'])->name(config('dummy.menu.unit-activity.slug'));
	Route::get('/about-us', [App\Http\Controllers\website\AboutUnitController::class, 'index'])->name(config('dummy.menu.about-us.slug'));
	Route::get('/contact-us', [App\Http\Controllers\website\ContactController::class, 'index'])->name(config('dummy.menu.contact-us.slug'));
	Route::get('/achieve', [App\Http\Controllers\website\AchieveController::class, 'index'])->name(config('dummy.menu.achieve.slug'));
	Route::get('/spokesperson-unit', [App\Http\Controllers\website\SpokespersonController::class, 'index'])->name(config('dummy.menu.spokesperson.slug'));
	Route::get('/public-schedule', [App\Http\Controllers\website\PublicScheduleController::class, 'index'])->name(config('dummy.menu.public-schedule.slug'));
	Route::get('/press-release', [App\Http\Controllers\website\PressReleaseController::class, 'index'])->name(config('dummy.menu.press-release.slug'));
	Route::get('/prime-minister', [App\Http\Controllers\website\PrimeMinisterController::class, 'index'])->name(config('dummy.footer.pm.slug'));
	Route::get('/pentagonal-strategy', [App\Http\Controllers\website\PentagonalStrategyController::class, 'index'])->name(config('dummy.footer.pentagonal.slug'));
	Route::get('/privacy-policy', [App\Http\Controllers\website\PrivacyController::class, 'index'])->name(config('dummy.menu.privacy.slug'));

});
