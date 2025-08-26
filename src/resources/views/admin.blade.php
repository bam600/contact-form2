@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('title', '管理画面')
@section('bodyClass', 'admin')

@section('content')
<main>
  <header> 
    <h1>FashionablyLate</h1>
    <h2>Admin</h2>
  </header>
  
    <form class="form">
      <button type="submit" class="heder_btn">logout</button>
      <div class="form__actions">
          <input class="form__specific form__box" type="text" name="search" placeholder="名前やメールアドレスを入力してください" required />

            <select class="dropdown__select" name="category">
              <option value="">性別</option>
              <option value="product">男性</option>
              <option value="delivery">女性</option>
              <option value="payment">その他</option>
            </select>

            <select class="dropdown__select" name="category">
              <option value="">選択してください</option>
              <option value="product">商品について</option>
              <option value="delivery">配送について</option>
              <option value="payment">お支払いについて</option>
            </select>

            <input type="date" id="date" name="date" class="form__input">
            
          <button type="submit" class="adminbutton__search">検索</button>
          <button type="submit" class = "adminbutton__reset">リセット</button>
  </div>
          <button type="submit" class="adminbutton__export">エクスポート</button>
          <button type="submit" class = "confirmbutton__edit">リセット</button>
      <!-- 検索結果テーブル -->
      <table class="table">
        <tr colspan="5">
          <th><label for="name" class="form__label--screen"">お名前</label></th>
          <th><label for="gender" class="form__label--screen"">性別</label></th>
          <th><label for="email" class="form__label--screen"">メールアドレス</label></th>
          <th><label for="category" class="form__label--screen"">お問い合わせの種類</label></th>
          <th><label class="form__label--screen"></label></th>
        </tr>

        <div class="search__results">
            <!-- 名前 -->
            <td>
              佐藤太郎
            </td>
            <!-- 性別 -->
            <td>
              男性
            </td>
            <!-- メールアドレス -->
            <td>
              1234@icloud.com
            </td>
            <!-- お問い合わせの種類 -->
            <td>
              商品について
            </td>
            <!--詳細ボタン -->
            <td>
             <button type="submit" class="adminbutton__details">詳細</button>
            </td>
        </div>
      </table>
    </form>
  </main>
@endsection
