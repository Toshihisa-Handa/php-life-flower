<?php
session_start();
include('funcs.php');//別の階層にfuncs.phpがある場合は「betukaisou/funcs.php」などパスを変えてincludesする
// loginCheck();


//1.GETでidを取得
$id =$_GET['id'];



//2. DB接続します(ここコピペでOK。select2.phpの時と記載同じ)
$pdo = db_conn();


//3．データ登録SQL作成(今回はselect2.phpの一覧表示から1行だけ取り出す記述をする)
//prepare("")の中にはmysqlのSQLで入力したINSERT文を入れて修正すれば良いイメージ
$sql = "SELECT * FROM shops_table WHERE id=:id";//この1行select2.phpから修正
$stmt = $pdo->prepare($sql);//select2.phpで元々あった()内の記述を修正し、変数sqlへ格納したものを（）内に記述
$stmt->bindValue('id', $id, PDO::PARAM_INT);//ここの記述はselect2.phpにない部分！
$status = $stmt->execute();


//4．データ登録処理後（elseより手前はselect2.phpと同じ）
$view='';
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("SQLError:".$error[2]);//エラーが起きたらエラーの2番目の配列から取ります。ここは考えず、これを使えばOK
                             // SQLEErrorの部分はエラー時出てくる文なのでなんでもOK
}else{//ここより下は修正している↓
 //1データのみ抽出の為,select2.phpであったwhile文を削除。ここで$rowを定義
$row = $stmt->fetch();
}

//以下のhtmlタグ内の記述は見た目のレイアウトを合わせると良いため、基本index2.phpをコピペする。
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>店舗詳細</title>

</head>
<body>



<a class="navbar-brand" href="shop-detail.php">登録内容画面</a>
<a href="logout.php">ログアウト</a>

<!-- Main[Start] -->
<form method="post" action="addshop-detail_act.php">
   <fieldset>
     <label>店舗名<input type="text" name="shopname" value="<?=$row["shopname"]?>"></label><br>
     <label>名前<input type="text" name="name" value="<?=$row["name"]?>"></label><br>
     <label>メール<input type="text" name="email" value="<?=$row["email"]?>"></label><br>
     <label>電話番号<input type="text" name="tell" value="<?=$row["tell"]?>"></label><br>
     <label>店舗所在地<input type="text" name="location" value="<?=$row["location"]?>"></label><br>
     <label>パスワード<input type="text" name="pass" value="<?=$row["pass"]?>"></label><br>
     <input type="hidden" name='id' value="<?=$row["id"]?>">
     <input type="submit" value="送信">
    </fieldset>
</form>
<!-- Main[End] -->


</body>
</html>

