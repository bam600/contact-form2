<!-- お問い合わせ入力フォーム画面 -->
@extends('layouts.app')
<!-- resources/views/layouts/app.blade.php を親テンプレートとして継承(⇒英語：extends)-->

@section('css')
<!-- 継承している layouts/app.blade.php にCSSファイルのURLを挿入する -->
  <link rel="stylesheet" href="{{ asset('css/contactform.css') }}">
  <!-- asset('css/contactform.css')は「public/css/contactform.css を読み込む」という意図。 -->
@endsection

@section('title')
  お問い合わせ入力
@endsection
<!-- 継承している layouts/app.blade.php にある 'title'に『お問い合わせ入力』の文字を渡している -->
@section('bodyClass')
  questionform
@endsection
<!-- 継承している layouts/app.blade.php にある bodyClassにquestionformの値を渡す構文-->

@section('content')
<!-- これは親テンプレートのlayouts/app.blade.phpの中でここに子テンプレートの content  の中身を挿入してね」
という指示を出している場所です。-->

<main>
  <!-- ヘッダー -->
  <header>
    <!-- h1⇒最上位の見出し -->
    <h1>FashionablyLate</h1>
    <!-- h2⇒第2階層の見出し -->
    <h2>Contact</h2>
  </header>
  
    <form method="POST" action="{{ route('contact.confirm') }}">
    <!-- <form>⇒　ユーザーが入力するデータを送信するためのHTML要素。 -->
    <!-- method="POST"⇒　データをサーバーに安全に送信するための方法。
     GETではなくPOSTを使うことでURLにデータが表示されずセキュリティ的にも適切。 -->

    <!-- action="{{ route('contact.confirm') }}"⇒　Laravelのroute()ヘルパーを使って名前付きルートに基づいたURLを生成。
    ⇒contact/confirmに変換してルーティング定義ファイル(web.php)でルートを参照することができる -->
      @csrf
      <!-- クロスサイトリクエストフォージェリ（CSRF）攻撃を防ぐためのセキュリティ対策です。 -->
      <table class="contact-table">
        <!-- 名前 -->
        <tr>
          <th><label for="name" class="item__name">お名前<span class="required__field">※</span></label></th>
            <td>
              <div class="form-group">
                <input type="text" name="last_name" value = "{{old('last_name')}}"/>
                <input type="text" name="first_name" value = "{{old('first_name')}}"/>
              </div>
              <div class="form__error">
                @error('last_name')
                   {{ $message }} 
                @enderror
                @error('first_name')
                   {{ $message }} 
                @enderror
              </div>
            </td>
        </tr>

        <!-- 性別 -->
        <tr>
          <th><label for="gender" class="item__name">性別<span class="required__field">※</span></label></th>
            <td>
              <div class="item__name">
                <label><input type="radio" name="gender" value="1" {{ old('gender') == '1' ? 'checked' : '' }}>男性</label>
                <label><input type="radio" name="gender" value="2" {{ old('gender') == '2' ? 'checked' : '' }}>女性</label>
                <label><input type="radio" name="gender" value="3" {{ old('gender') == '3' ? 'checked' : '' }}>その他</label>
              </div>
              <div class="form__error">
                @error('gender')
                   {{ $message }} 
                @enderror
              </div>
            </td>
        </tr>

        <!-- メールアドレス -->
        <tr>
          <th><label for="email" class="item__name">メールアドレス<span class="required__field">※</span></label></th>
            <td>
              <div>
                <input type="email" class="form-control" name="email" value = "{{old('email')}}"/>
              </div>
              <div class="form__error">
                @error('email')
                   {{ $message }} 
                @enderror
              </div>
            </td>
        </tr>

        <!-- 電話番号 -->
        <tr>
          <th><label for="tel" class="item__name">電話番号<span class="required__field">※</span></label></th>
            <td>
              <div class="form-group">
                <input type="tel" class="form-control" name="first_tel" value = "{{old('first_tel')}}"/>
                <span class="hyphen">-</span>
                <input type="tel" class="form-control" name="middle_tel" value = "{{old('middle_tel')}}"/>
                <span class="hyphen">-</span>
                <input type="tel" class="form-control" name="last_tel" value = "{{old('last_tel')}}"/>
              </div>
                <!-- どれか１つでも未入力だったらエラーメッセージ -->
              <div class="form__error">
                @error('first_tel')
                   {{ $message }} 
                @enderror
                  @error('middle_tel')
                   {{ $message }} 
                @enderror
                @error('last_tel')
                   {{ $message }} 
                @enderror
</div>
            </td>
        </tr>

        <!-- 住所 -->
        <tr>
          <th><label for="address" class="item__name">住所<span class="required__field">※</span></label></th>
            <td>
              <div>
                <input type="text" name="address" value = "{{old('address')}}"/>
              </div>
              <div class="form__error">
                @error('address')
                   {{ $message }} 
                @enderror
              </div>
            </td>
        </tr>

        <!-- 建物名 -->
        <tr>
          <th><label for="building" class="item__name">建物名</label></th>
          <td>
            <div>
              <input type="text" name="building" value = "{{old('building')}}"/>
            </div>
            <div class="form__error">
                @error('building')
                   {{ $message }} 
                @enderror
            </div>
          </td>
        </tr>

        <!-- お問い合わせの種類 -->
        <tr>
          <th><label for="category" class="item__name">お問い合わせの種類<span class="required__field">※</span></label></th>
          <td>
            <div>
              <select name="category" id="category" class="category_form">
                <option value="">選択してください</option>
                  @if(!empty($categories))
                    @foreach($categories as $category)
                      <option value="{{ $category->id }}">{{ $category->content }}</option>
                    @endforeach
                  @endif
              </select>
            </div>  
          <div class="form__error">
                @error('category')
                   {{ $message }} 
                @enderror
          </div>
          </td>
        </tr>

        <!-- お問い合わせ内容 -->
        <tr>
          
          <th><label for="content" class="item__name">お問い合わせの内容<span class="required__field">※</span></label></th>
          <td>
            <div>
              <textarea name="content">{{ old('content') }}</textarea>
            </div>
            <div class="form__error">
                @error('content')
                   {{ $message }} 
                @enderror
            </div>
          </td>
        </tr>

        <!-- 送信ボタン -->
        <tr>
          <td colspan="2"> 
            <div class="form__submit--flex">
              <button type="submit" class="confirmbutton__submit">確認画面</button>
            </div>
          </td>
        </tr>
      </table>
    </form>
  </main>
@endsection

