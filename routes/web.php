<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;
use App\Http\Middleware\check;
use App\Http\Middleware\checkMailSending;
use App\Models\News;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

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

    return view('welcome')->with('data');
});



Route::get('/adminAuth', function () {
    return view('admin.login');
});
Route::get('all_news_for_user', [NewsController::class , 'getArticlesForUser']);

Route::post('adminAuth' , [AuthController::class , 'login']);

Route::get('logout' , [AuthController::class , 'logout']);


Route::get('/forget_password' , function(){
    return view('admin.forgetPassword');
});



Route::get('/send_email_forget_password' , [AuthController::class , 'sendEmailForgetPassword']);

Route::patch('actually_reset_password', [AuthController::class , 'resetPassword']) ;

Route::middleware([checkMailSending::class])->group(function () {
    Route::get('/set_new_password' , function(){
        return view('admin.setNewPassword');
    });

});


Route::middleware([check::class])->group(function () {

    Route::get('/adminView', function () {
        return view('admin.adminAuth');
    });


    Route::resource('news', NewsController::class);



});
