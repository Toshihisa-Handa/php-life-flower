<?php 
session_start();
include('funcs.php');//別の階層にfuncs.phpがある場合は「betukaisou/funcs.php」などパスを変えてincludesする
// loginCheck();
$shopname = $_SESSION['shopname'];




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>shopトップページ</h1>
<h3>こんにちは<?php echo $shopname ?>さん</h3>
<?php include('header.php') ?>
<a href="shop-detail.php">登録情報はこちら</a>
<a href="myflower-list.php">花の一覧</a>


</body>
</html>