
@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/confirmscreen.css') }}">
@endsection

@section('title')
確認画面
@endsection

@section('bodyClass')
confirm
@endsection

@section('content')

<main>
  <header>
    <h1>FashionablyLate</h1>
    <h2>Confirm</h2>
  </header>

    <form class="form" action="{{ route('contact.store') }}" method="post">
      @csrf
      <table class="table">

        <!-- 名前 -->
      <tr>
        <th><label for="name" class="form__label--screen">お名前</label></th>
        <td>
          <span class="confirm__label">{{ $contact['last_name'] }} {{ $contact['first_name'] }}</span>
          <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}">
          <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}">
        </td>
      </tr>


          <!-- 性別 -->
          <!-- 受け取った性別の値が数値の為値によって表示内容を変える -->
        <tr>
          <th><label for="gender" class="form__label--screen">性別</label></th>
          <td>
            <span class="confirm__label">{{ $gender_label }}</span>
            <input type="hidden" name="gender" value="{{ $contact['gender'] }}">
          </td>
        </tr>

        <!-- メールアドレス -->
        <tr>
          <th><label for="email" class="form__label--screen">メールアドレス</label></th>
         <td> 
          <span class="confirm__label">{{ $contact['email'] }}</span>
            <input type="hidden" name="email" value="{{ $contact['email'] }}">
          </td>
        </tr>

        <!-- 電話番号 -->
        <tr>
          <th><label for="tel" class="form__label--screen">電話番号</label></th>
          <td>
            <span class="confirm__label">{{ $contact['tel'] }}</span>
            <input type="hidden" name="tel" value="{{ $contact['tel'] }}">
          </td>
        </tr>

        <!-- 住所 -->
        <tr>
          <th><label for="address" class="form__label--screen">住所</label></th>
            <td>
            <span class="confirm__label">{{ $contact['address'] }}</span>
            <input type="hidden" name="address" value="{{ $contact['address'] }}">
            </td>
        </tr>

        <!-- 建物名 -->
        <tr>
          <th><label for="building" class="form__label--screen">建物名</label></th>
          <td>
            <span class="confirm__label">{{ $contact['building'] }}</span>
            <input type="hidden" name="building" value="{{ $contact['building'] }}">
          </td>
        </tr>

        <!-- お問い合わせの種類 -->
        <tr>
          <th><label for="category" class="form__label--screen">お問い合わせの種類</label></th>
        <td>
          <span class="confirm__label">{{ $category_name }}</span>
            <input type="hidden" name="category_id" value="{{ $contact['category_id'] }}">
        </td>
        </tr>

        <!-- お問い合わせ内容 -->
        <tr>
          <th><label for="content" class="form__label--screen">お問い合わせの内容</label></th>
          <td>
            <span class="confirm__label">{{ $contact['detail'] }}</span>
            <input type="hidden" name="detail" value="{{ $contact['detail'] }}">
          </td>
        </tr>

       <!-- 送信ボタン -->
      </table>
        <div class="form__actions">
          <button type="submit" class="confirmbutton__submit">送信</button>
          <a href="{{ route('contact.form') }}" class="confirmbutton__edit">修正</a>
        </div>
    </form>
  </main>
@endsection
