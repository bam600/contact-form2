<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
      // 問い合わせ入力フォーム
      public function questionform()
  {
    return view('questionform');
    }
      //確認画面
     public function confirm()
  {
    return view('confirm');
    }  

      //ログイン画面
     public function login()
  {
    return view('login');
    }  
  
      //新規登録画面
     public function register()
  {
    return view('register');
    } 

      //登録完了画面
     public function thanks()
  {
    return view('thanks');
    } 
}