@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/confirmscreen.css') }}">
@endsection

@section('title', '確認画面')
@section('bodyClass', 'confirm')

@section('content')
<main>
  <header>
    <h1>FashionablyLate</h1>
    <h2>Confirm</h2>

  </header>
    <form class="form">
      <table class="table">

        <!-- 名前 -->
        <tr>
          <th><label for="name" class="form__label--screen"">お名前</label></th>
          <td>
            <span class="confirm__label">斉藤たくみ</span>
          </td>
        </tr>
        <!-- 性別 -->
        <tr>
          <th><label for="gender" class="form__label--screen">性別</label></th>
          <td>
             <span class="confirm__label">男性</span>
          </td>
        </tr>

        <!-- メールアドレス -->
        <tr>
          <th><label for="email" class="form__label--screen">メールアドレス</label></th>
          <td>
            <span class="confirm__label">aaaa@icloud.com</span>
          </td>
        </tr>

        <!-- 電話番号 -->
        <tr>
          <th><label for="tel" class="form__label--screen">電話番号</label></th>
          <td>
              <span class="confirm__label">111-1111-2222</span>
          </td>
        </tr>

        <!-- 住所 -->
        <tr>
          <th><label for="address" class="form__label--screen">住所</label></th>
          <td>
            <span class="confirm__label">東京都大田区</span>
          </td>
        </tr>

        <!-- 建物名 -->
        <tr>
          <th><label for="building" class="form__label--screen">建物名</label></th>
          <td>
            <span class="confirm__label">201</span>
          </td>
        </tr>

        <!-- お問い合わせの種類 -->
        <tr>
          <th><label for="category" class="form__label--screen">お問い合わせの種類</label></th>
          <td>
            <span class="confirm__label">商品について</span>
          </td>
        </tr>

        <!-- お問い合わせ内容 -->
        <tr>
          <th><label for="content" class="form__label--screen">お問い合わせの内容</label></th>
          <td>
            <span class="confirm__label">あああああああああああああああああああああああああああああ
            </span>
          </td>
        </tr>
       <!-- 送信ボタン -->
      </table>
      <div class="form__actions">
                  <button type="submit" class="confirmbutton__submit">送信</button>
                  <button type="submit" class = "confirmbutton__edit">修正</button>
      </div>
    </form>
  </main>
@endsection
