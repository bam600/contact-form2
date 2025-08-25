@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/contactform.css') }}">
@endsection

@section('title', 'お問い合わせ入力')
@section('bodyClass', 'questionform')

@section('content')
<main>
  <header>
    <h1>FashionablyLate</h1>
    <h2>Contact</h2>
  </header>
  
    <form class="form">
      <table class="contact-table">

        <!-- 名前 -->
        <tr>
          <th><label for="name" class="item__name">お名前<span class="required__field">※</span></label></th>
          <td>
            <div class="form-group">
              <input type="text" name="last_name" placeholder="テスト" />
              <input type="text" name="first_name" placeholder="太郎" />
            </div>
          </td>
        </tr>

        <!-- 性別 -->
        <tr>
          <th><label for="gender" class="item__name">性別<span class="required__field">※</span></label></th>
          <td>
            <div class="item__name">
              <label><input type="radio" name="gender" value="male" />男性</label>
              <label><input type="radio" name="gender" value="female" />女性</label>
              <label><input type="radio" name="gender" value="other" />その他</label>
            </div>
          </td>
        </tr>

        <!-- メールアドレス -->
        <tr>
          <th><label for="email" class="item__name">メールアドレス<span class="required__field">※</span></label></th>
          <td>
            <input type="email" class="form-control" name="email" placeholder="test@example.com" />
          </td>
        </tr>

        <!-- 電話番号 -->
        <tr>
          <th><label for="tel" class="item__name">電話番号<span class="required__field">※</span></label></th>
          <td>
            <div class="form-group">
              <input type="tel" class="form-control" name="first_tel" placeholder="090" />
              <span class="hyphen">-</span>
              <input type="tel" class="form-control" name="middle_tel" placeholder="1111" />
              <span class="hyphen">-</span>
              <input type="tel" class="form-control" name="last_tel" placeholder="1234" />
            </div>
          </td>
        </tr>

        <!-- 住所 -->
        <tr>
          <th><label for="address" class="item__name">住所<span class="required__field">※</span></label></th>
          <td>
            <input type="text" name="address" placeholder="東京都大田区" />
          </td>
        </tr>

        <!-- 建物名 -->
        <tr>
          <th><label for="building" class="item__name">建物名</label></th>
          <td>
            <input type="text" name="building" placeholder="201" />
          </td>
        </tr>

        <!-- お問い合わせの種類 -->
        <tr>
          <th><label for="category" class="item__name">お問い合わせの種類<span class="required__field">※</span></label></th>
          <td>
            <input type="text" class="form-control" name="category" placeholder="例：資料請求" />
          </td>
        </tr>

        <!-- お問い合わせ内容 -->
        <tr>
          <th><label for="content" class="item__name">お問い合わせの内容<span class="required__field">※</span></label></th>
          <td>
            <textarea name="content" placeholder="資料をいただきたいです"></textarea>
          </td>
        </tr>

        <!-- 送信ボタン -->
        <tr>
          <td colspan="2"> 
            <div class="form__submit--flex">
            <button type="submit" class="confirmbutton__submit">確認画面</button>
          </td>
        </tr>
      </table>
    </form>
  </main>
@endsection

