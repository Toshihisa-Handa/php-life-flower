<!-- データを登録するためのPHP -->

<?php
include("funcs.php");

//1. POSTデータ取得
$shopname   = $_POST["shopname"];
$name   = $_POST["name"];
$email  = $_POST["email"];
$tell    = $_POST["tell"];
$location    = $_POST["location"];
$pass    = $_POST["pass"];



echo test;
//2. DB接続します
$pdo = db_conn();

echo test;


  //３．データ登録SQL作成
//kanli_flg = 管理者：0、店舗登録者:1
//life_flg = 生きてる：0、退会済み:1
$stmt = $pdo->prepare("INSERT INTO shops_table(shopname,name,email,tell,location,pass,kanri_flg,life_flg,indate)VALUES(:shopname,:name,:email,:tell,:location,:pass,1,0,sysdate())");
$stmt->bindValue(':shopname', $shopname, PDO::PARAM_STR);      //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':name', $name, PDO::PARAM_STR);      //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':email', $email, PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':tell', $tell, PDO::PARAM_INT);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':location', $location, PDO::PARAM_STR);        //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':pass', $pass, PDO::PARAM_INT);        //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行




echo aka;

//４．データ登録処理後（基本コピペ使用でOK)
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("SQLError:".$error[2]);//エラーが起きたらエラーの2番目の配列から取ります。ここは考えず、これを使えばOK
                             // SQLEErrorの部分はエラー時出てくる文なのでなんでもOK

}else{

  redirect("login.php");



}

?>
