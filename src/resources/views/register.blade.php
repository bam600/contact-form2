@extends('layouts.app')

@section('title', '新規登録画面')
@section('bodyClass', 'register')

@section('content')
<main>
  <header>
    <h1>FashionablyLate</h1>
    <h2>Register</h2>
  </header>

  <form class="form">
    <div class="form__container">
      <div class="form__inner">

      <!-- 氏名 -->
       <div class="form__row">
         <div class="form__cell">
            <label for="email" class="item__name">お名前</label><br>
            <input class="form__specific form__box" type="text" id="name" placeholder="山田 太郎" required />
          </div>
      </div>

      <!-- メールアドレス -->
      <div class="form__row">
         <div class="form__cell">
            <label for="email" class="item__name">メールアドレス</label><br>
            <input class="form__specific form__box" type="email" id="email" placeholder="123abc@gmail.com" required />
          </div>
      </div>

      <!-- パスワード（すぐ下に配置） -->
      <div class="form__row">
          <div class="form__cell">
            <label for="password" class="item__name">パスワード</label><br>
            <input class="form__specific form__box" type="password" name="password" placeholder="abcd@icloud.com" required />
          </div>
      </div>

      <!-- ログインボタン -->
      <div class="form__row form__row--center">
          <button type="submit" class="form__button">登録</button>
      </div>
    </div>
    </div>
  </form>
</main>
@endsection