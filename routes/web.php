<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContributorsController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\SaCodesWeekendsController;
use App\Http\Controllers\CoursesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Listing;

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

// common resource routes:
// index - show all data
// show - show single data
// create - show form to create new data
// store - store new data
// edit - show form to edit data
// update - update data
// destroy - delete data

/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/

// redirect to admin
Route::get('/', function() {
    return redirect('/admin/dashboard');
});

// group admin
Route::group(['prefix' => 'admin'], function() {

    // default urls
    Route::get('/', [AdminController::class, 'index']);
    Route::get('/dashboard', [AdminController::class, 'index'])->middleware('auth');

    /*
    |--------------------------------------------------------------------------
    | CONTRIBUTOR
    |--------------------------------------------------------------------------
    */

    // show all data
    Route::get('/contributors', [ContributorsController::class, 'index'])->middleware('auth');

    // show create form
    Route::get('/contributors/create', [ContributorsController::class, 'create'])->middleware('auth');

    // store new data
    Route::post('/contributors', [ContributorsController::class, 'store'])->middleware('auth');

    // show edit form
    Route::get('/contributors/{contributor}/edit', [ContributorsController::class, 'edit'])->middleware('auth');

    // update data
    Route::put('/contributors/{contributor}', [ContributorsController::class, 'update'])->middleware('auth');

    // destroy data
    Route::delete('/contributors/{contributor}', [ContributorsController::class, 'destroy'])->middleware('auth');

    // show single data
    Route::get('/contributors/{contributor}', [ContributorsController::class, 'show'])->middleware('auth');

    /*
    |--------------------------------------------------------------------------
    | SACODE'S WEEKEND
    |--------------------------------------------------------------------------
    */
    Route::get('/sacodesweekends', function() {
        return redirect('/admin/sacodesweekends/active');
    });
    // show all data
    // Route::get('/sacodesweekends', [SaCodesWeekendsController::class, 'indexActive']);

    // crate
    Route::get('/sacodesweekends/create', [SaCodesWeekendsController::class, 'create']);

    // show edit form
    Route::get('/sacodesweekends/{sacodesweekend}/edit', [SaCodesWeekendsController::class, 'edit']);

    // show active only
    Route::get('/sacodesweekends/active', [SaCodesWeekendsController::class, 'indexActive']);

     // store new data
    Route::post('/sacodesweekends', [SaCodesWeekendsController::class, 'store']);

    // show draft only
    Route::get('/sacodesweekends/draft', [SaCodesWeekendsController::class, 'indexDraft']);

    // show trash only
    Route::get('/sacodesweekends/trash', [SaCodesWeekendsController::class, 'indexTrash']);

    // update status only
    Route::put('/sacodesweekends/{sacodesweekend}', [SaCodesWeekendsController::class, 'updateStatus']);

    // destroy data
    Route::delete('/sacodesweekends/{sacodesweekend}', [SaCodesWeekendsController::class, 'destroy']);

    // show single data
    Route::get('/sacodesweekends/{sacodesweekend}', [SaCodesWeekendsController::class, 'show']);


    /*
    |--------------------------------------------------------------------------
    | COURSES
    |--------------------------------------------------------------------------
    */

    // show all data
    Route::get('/courses', [CoursesController::class, 'index']);


    /*
    | Authenticate user
    |--------------------------------------------------------------------------
    */

    // show login form

    // log user in

    // log user out


     /*
    |--------------------------------------------------------------------------
    | Blog
    |--------------------------------------------------------------------------
    */

    // show all data
    Route::get('/blogs', [BlogsController::class, 'index']);

    // show create form
    Route::get('/blogs/create', [BlogsController::class, 'create']);

    // store new data
    Route::post('/blogs', [BlogsController::class, 'store']);

    // show edit form
    Route::get('/blogs/{id}/edit', [BlogsController::class, 'edit']);

    // update data
    Route::put('/blogs/{id}', [BlogsController::class, 'update']);

    // destroy data
    Route::delete('/blogs/{id}', [BlogsController::class, 'destroy']);

    // show single data
    Route::get('/blogs/{id}', [BlogsController::class, 'show']);







    /*
    | Authenticate user
    |--------------------------------------------------------------------------
    */

    // show login form

    // log user in

    // log user out


     /*
    | Blog
    |--------------------------------------------------------------------------
    */

});



Route::get('/listings', [ListingController::class, 'index']);

// show create form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// store listing data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

// show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// update listing
Route::put('/listings/{listing}/', [ListingController::class, 'update'])->middleware('auth');

// delete listing
Route::delete('/listings/{listing}/', [ListingController::class, 'destroy'])->middleware('auth');

// manage listing
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

// single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// show register/create form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// create new user
Route::post('/users', [UserController::class, 'store']);

// log user out
Route::post('/logout', [UserController::class, 'logout']);

// show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// log in user
Route::post('users/authenticate', [UserController::class, 'authenticate']);


// Route::get('/hello', function() {
//     return response('<h1>Hello world</h1>')
//     ->header('Content-Type', 'text/plain')
//     ->header('foo', 'bar');
// });

// Route::get('/posts/{id}', function($id){
//     // dd($id);
//     ddd($id);
//     return response('Post ' . $id);
// })->where('id', '[0-9]+');

// Route::get('/search', function(Request $request){
//     dd($request);
//     return $request->name . '  ' . $request->city;
// });
