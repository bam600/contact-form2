@extends('layouts.app')

@section('title', '新規登録画面')
@section('bodyClass', 'register')

@section('content')
<main>
  <header>
    <h1>FashionablyLate</h1>
    <h2>Register</h2>
  </header>

  <form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="form__container">
      <div class="form__inner">

      <!-- 氏名 -->
       <div class="form__row">
         <div class="form__cell">
            <label for="name" class="item__name">お名前</label><br>
            <input class="form__specific form__box" type="text" name="name" value = "{{old('name')}}"/>
          </div>
      </div>
      <div class="form__error">
        @error('name')
          {{ $message }} 
        @enderror
      </div>

      <!-- メールアドレス -->
      <div class="form__row">
         <div class="form__cell">
            <label for="email" class="item__name">メールアドレス</label><br>
             <input id="email" class="form__specific form__box" type="email" name="email" value="{{ old('email') }}" autocomplete="email"/>
          </div>
      </div>
      <div class="form__error">
        @error('email')
          {{ $message }} 
        @enderror
      </div>

      <!-- パスワード（すぐ下に配置） -->
      <div class="form__row">
          <div class="form__cell">
            <label for="password" class="item__name">パスワード</label><br>
            <input class="form__specific form__box" type="password" name="password" />
          </div>
      </div>
            <div class="form__error">
        @error('password')
          {{ $message }} 
        @enderror
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