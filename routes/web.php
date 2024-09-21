<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController as auth;
use App\Http\Controllers\UserController as user;
use App\Http\Controllers\RoleController as role;
use App\Http\Controllers\DashboardController as dashboard;
use App\Http\Controllers\PermissionController as permission;
use App\Http\Controllers\CorporateHeaderController as corporateheader;
use App\Http\Controllers\CorporateMiddleController as corporatemiddle;
use App\Http\Controllers\IndividualHeaderController as individualheader;
use App\Http\Controllers\IndividualMiddleController as individualmiddle;
use App\Http\Controllers\ContactUsController as message;
use App\Http\Controllers\FrontendController as frontend;


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

// Route::get('/register', [auth::class, 'signUpForm'])->name('register');
// Route::post('/register', [auth::class, 'signUpStore'])->name('register.store');
Route::get('/login', [auth::class, 'signInForm'])->name('login');
Route::post('/login', [auth::class, 'signInCheck'])->name('login.check');
Route::get('/logout', [auth::class, 'signOut'])->name('logOut');

Route::middleware(['checkauth'])->prefix('admin')->group(function () {
    Route::get('dashboard', [dashboard::class, 'index'])->name('dashboard');
});
Route::middleware(['checkrole'])->prefix('admin')->group(function(){
    Route::resource('user', user::class);
    Route::resource('role', role::class);
    Route::resource('employee', employee::class);
    Route::get('permission/{role}', [permission::class,'index'])->name('permission.list');
    Route::post('permission/{role}', [permission::class,'save'])->name('permission.save');

    Route::resource('corporateheader', corporateheader::class);
    Route::resource('corporatemiddle', corporatemiddle::class);
    Route::resource('individualheader', individualheader::class);
    Route::resource('individualmiddle', individualmiddle::class);
    Route::resource('message', message::class);
});




// Route::middleware(['checkauth'])->prefix('employee')->group(function () {
   
// });

Route::get('/',[frontend::class, 'home'])->name('home');
Route::get('/about-us/who-we-are',[frontend::class, 'who_we_are'])->name('who_we');
Route::get('/about-us/business-goals',[frontend::class, 'business_goal'])->name('business_goal');
Route::get('/about-us/our-teams',[frontend::class, 'our_teams'])->name('our_teams');
Route::get('/our-services/corporate-services',[frontend::class, 'corporate_services'])->name('corporate_services');
Route::get('/our-services/individual-services',[frontend::class, 'individual_services'])->name('individual_services');

Route::get('/industries/ites-industries',[frontend::class, 'ites_industries'])->name('ites_industries');
Route::get('/industries/agriculture-industries',[frontend::class, 'agriculture_industries'])->name('agriculture_industries');
Route::get('/industries/healthcare-industries',[frontend::class, 'healthcare_industries'])->name('healthcare_industries');
Route::get('/resources/our-clients',[frontend::class, 'our_clients'])->name('our_clients');
Route::get('/contact-us',[frontend::class, 'contact_us'])->name('contact_us');






// Route::get('/', function () {
//     return view('authentication.login');
// });