<?php

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function () {
    $users = User::all();
    return view('userspdf' ,[
        'title' => 'All User',
         'date' => Carbon::now(),
           'users' => $users]);
});


Route::get('download-pdf', [UserController::class, 'downloadPDF']);
