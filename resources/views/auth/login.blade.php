<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  @isset($errors)
    <p　style="color:red;">{{ $errors->first('message') }}</p>
  @endisset

  <form action="/login" name="loginform" method="POST">
      <dl>
        <dt>メールアドレス:</dt>
        <dd>
          <input type="text" name="email" size="30" value="{{ old('email') }}">
        </dd>
        <dt>パスワード:</dt>
        <dd>
          <input type="password" name="password" id="" size="30">
        </dd>
      </dl>
      <button type="submit" name="action" value="send">ログイン</button>
  </form>
  
</body>
</html>