<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOME</title>
</head>
<body>
  <h1>
    こんにちは
    @if(Auth::check())
      {{ \Auth::user()->name }}さん</h1>
       <p><a href="/logout">ログイアウト</a></p>
    @else
     ゲストさん</h1>
     <p><a href="/login">ログイン</a><br><a href="/register">会員登録</a></p>
    @endif
</body>
</html>