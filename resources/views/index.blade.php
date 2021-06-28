<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>トップページ</title>
</head>

<body>
  <form action="contact/create" method="post">
    @csrf
    <label for="name">氏名</label><br>
    <input type="text" id="name" name="name"><br>
    <br>
    <label for="email">メールアドレス</label><br>
    <input type="email" id="email" name="email"><br>
    <button type="submit">送信する</button>
  </form>
</body>

</html>