<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Models\Contact;
use Laravel\Fortify\Contracts\RegisterViewResponse;
use App\Http\Responses\CustomRegisterViewResponse;
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

//問い合わせ入力フォーム表示
Route::get('/', [ContactController::class,'questionform']);

// 問い合わせ入力フォームの入力内容を確認画面に渡して表示
Route::post('/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');

// 保存処理（POST）
Route::post('/store', [ContactController::class, 'store'])->name('contact.store');

Route::get('/thanks', [ContactController::class, 'thanks'])->name('thanks');


Route::get('/logtest', function () {
    Log::info('ログテスト成功！');
    return 'ログ書き込み完了';
});

//ログイン入力画面表示
Route::get('/login', [ContactController::class, 'login']);

//新規登録画面表示
Route::get('/register', [ContactController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [ContactController::class, 'register'])->name('register');

//管理画面表示
Route::get('/admin', [ContactController::class, 'admin']);


