@extends('layouts.app')

@section('title', 'ログイン画面')
@section('bodyClass', 'login')

@section('content')
<main>
<header class="page-header">
  <div class="page-header__top">
    <h1 class="page-header__title">FashionablyLate</h1>
    <button class="page-header__button">register</button>
  </div>
  <h2 class="page-header__subtitle">Login</h2>
</header>

  <form class="form" action="/login" method="post">
    <div class="form__container">
      <div class="form__inner">

      <!-- メールアドレス -->
      <div class="form__row">
         <div class="form__cell">
            <label for="email" class="item__name">メールアドレス</label><br>
              <input type="email" name="email" value="{{ old('email') }}" />
          </div>
      </div>

      <!-- パスワード（すぐ下に配置） -->
      <div class="form__row">
          <div class="form__cell">
            <label for="password" class="item__name">パスワード</label><br>
              <input type="password" name="password" />
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