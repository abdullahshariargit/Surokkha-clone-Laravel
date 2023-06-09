<?php

use App\Http\Controllers\Admin\{
    VaccineController,
    DashboardController,
    CrudController,
    DistrictController,
    DivisionController,
    DoctorController,
    HospitalController,
    UserController
};
use Illuminate\Support\Facades\Route;



Route::prefix('admin')->as('admin.')->middleware(['auth:admin'])->group(function () {

    # Dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::controller(CrudController::class)->name('crud.')->prefix('crud')->group(function () {

        Route::get('get-all-data', 'getAllData')->name('get-all-data');
        Route::get('/', 'index')->name('index');
        Route::post('store', 'store')->name('store');
        Route::delete('{crud}', 'destroy')->name('destroy');
        Route::get('{crud}', 'show')->name('view');

        Route::post('{crud}', 'update')->name('update');
    });


    # Vaccine
    Route::prefix('vaccine')->name('vaccine.')->controller(VaccineController::class)->group(function () {
        Route::get('get-all-data', 'getAllData')->name('get-all-data');
        Route::get('/', 'index')->name('index');
        Route::post('store', 'store')->name('store');
        Route::delete('{vaccine}', 'destroy')->name('destroy');
        Route::get('{vaccine}', 'show')->name('view');
        Route::post('{vaccine}', 'update')->name('update');
    });

    # Division
    Route::prefix('division')->name('division.')->controller(DivisionController::class)->group(function () {
        Route::get('get-all-data', 'getAllData')->name('get-all-data');
        Route::get('/', 'index')->name('index');
        Route::post('store', 'store')->name('store');
        Route::delete('{division}', 'destroy')->name('destroy');
        Route::get('{division}', 'show')->name('view');
        Route::post('{division}', 'update')->name('update');
    });

    # district
    Route::prefix('district')->name('district.')->controller(DistrictController::class)->group(function () {
        Route::get('get-all-data', 'getAllData')->name('get-all-data');
        Route::get('/', 'index')->name('index');
        Route::post('store', 'store')->name('store');
        Route::delete('{district}', 'destroy')->name('destroy');
        Route::get('{district}', 'show')->name('view');
        Route::post('{district}', 'update')->name('update');
    });

    # hospital
    Route::prefix('hospital')->name('hospital.')->controller(HospitalController::class)->group(function () {
        Route::get('get-all-data', 'getAllData')->name('get-all-data');
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::post('delete/{hospital}', 'destroy')->name('destroy');
        Route::get('{hospital}', 'show')->name('view');
        Route::post('{hospital}', 'update')->name('update');
    });

    # User
    Route::prefix('user')->name('user.')->controller(UserController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('{user}', 'show')->name('view');
        Route::get('first-dose-request/{user}', 'sendMailForFirstDose')->name('first-dose-request');
        Route::get('first-dose/users', 'firstDoseUsers')->name('first-dose-users');

        Route::get('second-dose-request/{user}', 'sendMailForSecondDose')->name('second-dose-request');
        Route::get('second-dose/users', 'secondDoseUsers')->name('second-dose-users');

        Route::delete('{hospital}', 'destroy')->name('destroy');
        Route::post('{hospital}', 'update')->name('update');
    });


    # Doctor
    Route::prefix('doctor')->name('doctor.')->controller(DoctorController::class)->group(function () {
        Route::get('get-all-data', 'getAllData')->name('get-all-data');
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::post('delete/{doctor}', 'destroy')->name('destroy');
        Route::get('view/{doctor}', 'show')->name('view');
        Route::post('{doctor}', 'update')->name('update');
    });
});
