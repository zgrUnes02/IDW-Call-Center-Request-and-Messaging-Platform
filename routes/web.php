<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VisitorController;
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

require __DIR__.'/auth.php';
 
Route::get('/' , [NavigationController::class , 'home']) -> name('home') ; 
Route::get('/recrutement' , [NavigationController::class , 'recrutement']) -> name('recrutement') ; 
Route::post('/send' , [NavigationController::class , 'getData']) -> name('send') ; 
Route::get('/contact' , [NavigationController::class , 'contact']) -> name('contact') ;
Route::get('/service' , [NavigationController::class , 'services']) -> name('service') ;
Route::get('/apropos' , [NavigationController::class , 'aPropos']) -> name('apropos') ;

//* send message :
Route::post('/send/message' , [MessageController::class , 'store']) -> name('send.message') ; 

//! route for gonna dshboard :
    Route::get('/dashboard' , [NavigationController::class , 'dashboard']) ->middleware(['auth', 'verified']) -> name('dashboard') ;

Route::get('/register' , function(){
    return view('404') ;
}) ;


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//! route for visting links in the dashboard :
Route::middleware('auth')->group(function () {

    Route::get('dashboard/visitors' , [VisitorController::class , 'showVisitor']) -> middleware(['auth', 'verified']) -> name('showVisitor') ;
    Route::get('dashboard/messages' , [MessageController::class , 'index']) -> middleware(['auth', 'verified']) -> name('showMessages') ;
    Route::get('dashboard/rejoindres' , [VisitorController::class , 'showRejoindres']) -> middleware(['auth', 'verified']) -> name('showRejoindres') ;
    Route::get('dashboard/soft/delete' , [VisitorController::class , 'showSoftdelete']) -> middleware(['auth', 'verified']) -> name('showSoftdelete') ;
    
//* -------------------------------------------- admin and visitors --------------------------------------------------
    //? delete visitor --------------------------------------------------------------------------:
    Route::get('/delete/{id}' , [VisitorController::class , 'delete']) -> name('delete.visitor') ;
    //? ------------------------------------------------------------------------------------------:

    //? force delete visitor --------------------------------------------------------------------------:
    Route::get('visitor/force/delete/{id}' , [VisitorController::class , 'forceDeleteVisitor']) -> name('forceDeleteVisitor.visitor') ;
    //? ------------------------------------------------------------------------------------------:

    //? restore visitor --------------------------------------------------------------------------:
    Route::get('/restore/{id}' , [VisitorController::class , 'restore']) -> name('restore.visitor') ;
    //? ------------------------------------------------------------------------------------------:

    //? show visitor info ---------------------------------------------------------------------------------------- :
    Route::get('/show/info/{id}' , [VisitorController::class , 'showVisitorInfo']) -> name('show.visitor') ;
    //? -----------------------------------------------------------------------------------------------------------:

    //? download cv ---------------------------------------------------------------------------------------- :
    Route::get('/download/{visitorName}/{cvName}' , [VisitorController::class , 'downloadCv']) -> name('downloadCv.visitor') ;
    //? -----------------------------------------------------------------------------------------------------------:

    //? show cv ---------------------------------------------------------------------------------------- :
    Route::get('/show/{visitorName}/{cvName}' , [VisitorController::class , 'showCv']) -> name('showCV.visitor') ;
    //? -----------------------------------------------------------------------------------------------------------:

//* -------------------------------------------- admin and messages --------------------------------------------------

    //? show message ---------------------------------------------------------------------------------------- :
    Route::get('message/{id}' , [MessageController::class , 'showMessage']) -> name('show.message') ;
    //? ----------------------------------------------------------------------------------------------------- :

    //? show soft delete message ---------------------------------------------------------------------------- :
    Route::get('/soft/delete/message' , [MessageController::class , 'showForceDeleteMessages']) -> name('showForceDeleteMessages') ;
    //? ----------------------------------------------------------------------------------------------------- :

    //? show message ------------------------------------------------------------------------------------------- :
    Route::get('message/delete/{id}' , [MessageController::class , 'deleteMessage']) -> name('delete.message') ;
    //? -------------------------------------------------------------------------------------------------------- :

    //? restore message ---------------------------------------------------------------------------------------- :
    Route::get('message/restore/{id}' , [MessageController::class , 'restore']) -> name('restore.message') ;
    //? -------------------------------------------------------------------------------------------------------- :

     //? force delete message ---------------------------------------------------------------------------------------- :
     Route::get('message/force/delete/{id}' , [MessageController::class , 'forceDelete']) -> name('forceDelete.message') ;
     //? -------------------------------------------------------------------------------------------------------- :


});


