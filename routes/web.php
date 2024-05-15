<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;

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

// });


Route::get('/testing', [\App\Http\Controllers\TestingController::class, 'index'])->middleware();
Route::get('/homePage', [\App\Http\Controllers\PagesHomeController::class, 'index'])->middleware();
Route::get('/sevicePage', [\App\Http\Controllers\PagesServiceController::class, 'index'])->middleware();
// Route::get('/workhome', [\App\Http\Controllers\PagesWorkController::class, 'index']);
Route::post('/workhome/store', 'App\Http\Controllers\PagesWorkController@store')->middleware();
Route::get('/workhome/edit/{id}', 'App\Http\Controllers\PagesWorkController@edit')->middleware();
Route::post('/workhome/update/{id}', 'App\Http\Controllers\PagesWorkController@update')->middleware();
Route::get('/workhome/delete/{id}', 'App\Http\Controllers\PagesWorkController@delete')->middleware();
Route::post('/workhome/destroy/{id}', 'App\Http\Controllers\PagesWorkController@destroy')->middleware();
Route::get('/home', [\App\Http\Controllers\HomePageController::class, 'index'])->middleware();

Route::get('/cms', function () {
    return view('Home');
})->middleware(['auth']);

Route::get('/comingsoon', function () {
    return view('comingsoon');
})->middleware();

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');





//companies
// Route::resource('Company', 'App\Http\Controllers\PagesCompanyController');
Route::get('/Company', [\App\Http\Controllers\PagesCompanyController::class, 'index']);
Route::post('/Company/store', 'App\Http\Controllers\PagesCompanyController@store');
Route::get('/Company/edit/{id}', 'App\Http\Controllers\PagesCompanyController@edit');
Route::post('/Company/update/{id}', 'App\Http\Controllers\PagesCompanyController@update');
Route::get('/Company/delete/{id}', 'App\Http\Controllers\PagesCompanyController@delete');
Route::post('/Company/destroy/{id}', 'App\Http\Controllers\PagesCompanyController@destroy');

//Countries
// Route::resource('home', 'App\Http\Controllers\PagesHomeController');
Route::get('/Country', [\App\Http\Controllers\PagesCountryController::class, 'index']);
Route::post('/Country/store', 'App\Http\Controllers\PagesCountryController@store');
Route::get('/Country/edit/{id}', 'App\Http\Controllers\PagesCountryController@edit');
Route::post('/Country/update/{id}', 'App\Http\Controllers\PagesCountryController@update');
Route::get('/Country/delete/{id}', 'App\Http\Controllers\PagesCountryController@delete');
Route::post('/Country/destroy/{id}', 'App\Http\Controllers\PagesCountryController@destroy');


//home
// Route::resource('home', 'App\Http\Controllers\PagesHomeController');
Route::get('/home', [\App\Http\Controllers\PagesHomeController::class, 'index'])->middleware(['auth']);
Route::post('/home/store', 'App\Http\Controllers\PagesHomeController@store')->middleware(['auth']);
Route::get('/home/edit/{id}', 'App\Http\Controllers\PagesHomeController@edit')->middleware(['auth']);
Route::post('/home/update/{id}', 'App\Http\Controllers\PagesHomeController@update')->middleware(['auth']);
Route::get('/home/delete/{id}', 'App\Http\Controllers\PagesHomeController@delete')->middleware(['auth']);
Route::post('/home/destroy/{id}', 'App\Http\Controllers\PagesHomeController@destroy')->middleware(['auth']);


//service
// Route::resource('services', 'App\Http\Controllers\PagesServiceController');
Route::get('/services', [\App\Http\Controllers\PagesServiceController::class, 'index'])->middleware(['auth']);
Route::post('/services/store', 'App\Http\Controllers\PagesServiceController@store')->middleware(['auth']);
Route::get('/services/edit/{id}', 'App\Http\Controllers\PagesServiceController@edit')->middleware(['auth']);
Route::get('/services/show/{id}', 'App\Http\Controllers\PagesServiceController@show');
Route::get('/services/details/{id}', 'App\Http\Controllers\PagesServiceController@details')->middleware(['auth']);
Route::post('/services/update/{id}', 'App\Http\Controllers\PagesServiceController@update')->middleware(['auth']);
Route::get('/services/delete/{id}', 'App\Http\Controllers\PagesServiceController@delete')->middleware(['auth']);
Route::post('/services/destroy/{id}', 'App\Http\Controllers\PagesServiceController@destroy')->middleware(['auth']);


//works
Route::get('/work', [\App\Http\Controllers\PagesWorkController::class, 'index']);
Route::post('/work/store', 'App\Http\Controllers\PagesWorkController@store');
Route::get('/work/edit/{id}', 'App\Http\Controllers\PagesWorkController@edit');
Route::post('/work/update/{id}', 'App\Http\Controllers\PagesWorkController@update');
Route::get('/work/delete/{id}', 'App\Http\Controllers\PagesWorkController@delete');
Route::post('/work/destroy/{id}', 'App\Http\Controllers\PagesWorkController@destroy');


//about us
Route::get('/about', [\App\Http\Controllers\PagesAboutUsController::class, 'index'])->middleware(['auth']);
Route::post('/about/store', 'App\Http\Controllers\PagesAboutUsController@store')->middleware(['auth']);
Route::get('/about/edit/{id}', 'App\Http\Controllers\PagesAboutUsController@edit')->middleware(['auth']);
Route::post('/about/update/{id}', 'App\Http\Controllers\PagesAboutUsController@update')->middleware(['auth']);
Route::get('/about/delete/{id}', 'App\Http\Controllers\PagesAboutUsController@delete')->middleware(['auth']);
Route::post('/about/destroy/{id}', 'App\Http\Controllers\PagesAboutUsController@destroy')->middleware(['auth']);

//Results 
Route::get('/result', [\App\Http\Controllers\PagesResultController::class, 'index'])->middleware(['auth']);
Route::post('/result/store', 'App\Http\Controllers\PagesResultController@store')->middleware(['auth']);
Route::get('/result/edit/{id}', 'App\Http\Controllers\PagesResultController@edit')->middleware(['auth']);
Route::post('/result/update/{id}', 'App\Http\Controllers\PagesResultController@update')->middleware(['auth']);
Route::get('/result/delete/{id}', 'App\Http\Controllers\PagesResultController@delete')->middleware(['auth']);
Route::post('/result/destroy/{id}', 'App\Http\Controllers\PagesResultController@destroy')->middleware(['auth']);


//form
Route::get('/joinus', [\App\Http\Controllers\FormController::class, 'index']);
Route::post('/form/store', 'App\Http\Controllers\FormController@store');

//web
Route::get('/', [\App\Http\Controllers\WebController::class, 'index']);
Route::post('/web/store', 'App\Http\Controllers\WebController@store');

Route::get('/contactus', [\App\Http\Controllers\contactus::class, 'index'])->middleware(['auth']);
Route::get('/form', [\App\Http\Controllers\formcms::class, 'index'])->middleware(['auth']);
Route::post('/storecontact', [\App\Http\Controllers\contactus::class, 'mailContactForm']);


Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'index']);


require __DIR__ . '/auth.php';
//language
Route::get('language-change', [LanguageController::class, 'changeLanguage'])->name('changeLanguage');
