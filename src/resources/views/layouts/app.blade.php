<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Inika&display=swap" rel="stylesheet">
  <title>@yield('title')</title>
  <!-- 共通のCSSファイル -->
  <link rel="stylesheet" href="{{ url('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ url('css/common.css') }}" />
  @yield('css')
</head>

<body class="@yield('bodyClass')">
  <div class="container">
    @yield('content')
  </div>
</body>
</html>
