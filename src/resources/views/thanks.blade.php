@extends('layouts.app')

@section('title', '送信完了')

@section('bodyClass')
thanks
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
<main>
  <header>
    <h1>FashionablyLate</h1>
    <h2>お問い合わせありがとうございました。</h2>
  </header>
  <p>内容を受け付けました。担当者よりご連絡いたします。</p>
</main>
@endsection