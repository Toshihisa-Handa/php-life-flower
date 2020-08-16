<?php  ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include('header.php') ?>
    <h1>新規登録画面</h1>
<a href="login.php">ログイン画面へ</a>

<form method="post" action="insert_act.php">
<label>店舗名：<input type="text" name="shopname"></label><br>
     <label>代表者名<input type="text" name="name"></label><br>
     <label>メールアドレス<input type="text" name="email"></label><br>
     <label>電話番号<input type="text" name="tell"></label><br>
     <label>店舗住所<input type="text" name="location"></label><br>
     <label>パスワード<input type="text" name="pass"></label><br>
     <input type="submit" value="送信">
</form>





</body>
</html>