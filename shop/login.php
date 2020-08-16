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
<h1>ログインページ</h1>
<a href="insert.php">新規会員登録の方はこちらから</a>
<form method='post' action="login_act.php">
    <label>店舗名: <input type="text" name='shopname'></label><br>
    <label>パスワード: <input type="text" name='pass'></label><br>
    <input type="submit" value='ログイン'>
</form>

</body>
</html>