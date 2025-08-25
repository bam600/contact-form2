<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
Route::get('/', [ContactController::class, 'questionform']);

Route::get('/logtest', function () {
    Log::info('ログテスト成功！');
    return 'ログ書き込み完了';
});

//問い合わせ入力確認画面表示
Route::get('/confirm', [ContactController::class, 'confirm']);

//ログイン入力画面表示
Route::get('/login', [ContactController::class, 'login']);

//新規登録画面表示
Route::get('/register', [ContactController::class, 'register']);

//問い合わせ入力画面表示
Route::get('/questionform', [ContactController::class, 'questionform']);

//登録完了画面表示
Route::get('/thanks', [ContactController::class, 'thanks']);