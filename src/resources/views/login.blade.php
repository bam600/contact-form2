@extends('layouts.app')

@section('title', 'ログイン画面')
@section('bodyClass', 'login')

@section('content')
<main>
  <header>
    <h1>FashionablyLate</h1>
    <h2>Login</h2>
  </header>

  <form class="form">
    <div class="form__container">
      <div class="form__inner">

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
          <button type="submit" class="form__button">ログイン</button>
      </div>
    </div>
    </div>
  </form>
</main>
@endsection