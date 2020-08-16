<?php
//1. POSTデータ取得
$fname   = $_POST["fname"];
$fmonth  = $_POST["fmonth"];
$fprice = $_POST["fprice"];
$shopname = $_POST["shopname"];
$location = $_POST["location"];
$shopid = $_POST["shopid"];


//2. DB接続します
include("funcs.php");
$pdo = db_conn();
$file_fname = fileUpload("upfile", "upload/");//input=fname="fimg"から受け取った画像をuplodフォルダにいれるという記述

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO flower_table(fname,fmonth,fprice,fimg,shopid,shopname,location,indate)VALUES(:fname,:fmonth,:fprice,:fimg,:shopid,:shopname,:location,sysdate())");
$stmt->bindValue(':fname', $fname, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':fmonth', $fmonth, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':fprice', $fprice, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':fimg', $file_fname, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':shopid', $shopid, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':shopname', $shopname, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':location', $location, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行

//４．データ登録処理後
if($status==false){
  sql_error();
}else{
  redirect("myflower-list.php");
}
?>
