@extends('layouts.app')

@section('title', '問い合わせ完了')
@section('bodyClass', 'thanks')

@section('content')
<main>
  <header>
    <h1>FashionablyLate</h1>
    <h2>Contact</h2>
  </header>
  
    <form class="form">
      <table class="contact-table">

        <!-- 性別 -->
        <tr>
          <th><label for="gender" class="item__name">お問い合わせありがとうございました。<span class="required__field">※</span></label></th>
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

