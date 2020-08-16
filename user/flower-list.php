<?php
session_start();
include("../shop/funcs.php");
// sschk();

$id= $_SESSION['id'] ;


$pdo = db_conn();
//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM flower_table");
$stmt->bindValue(':shopid',$id, PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false) {
  sql_error();
}else{
  while( $r = $stmt->fetch(PDO::FETCH_ASSOC)){ 
    $view .= '<p>';
    $view .= '<a href="detail.php?id='.$r["id"].'">';
    $view .= $r["id"]."|".$r["fname"]."|".$r["fmonth"]."|".$r["fprice"].'<br>';
    $view .= '<img src="../shop/upload/'.$r["fimg"].'">';
    // $view .= '<img src="upload/20200725125023d41d8cd98f00b204e9800998ecf8427e.jpg">';
    $view .= '</a>';
    $view .= "　";
    if($_SESSION["kanri_flg"]=="1"){
      $view .= '<a class="btn btn-danger" href="delete.php?id='.$r["id"].'">';
      $view .= '[<i class="glyphicon glyphicon-remove"></i>削除]';
      $view .= '</a>';
    }
    $view .= '</p>';
  }
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>花一覧</title>
<link rel="stylesheet" href="css/range.css">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<a href="../top.html">トップページへ</a>
<h1>店舗登録の花一覧</h1>
<?php echo $shopid; ?>

<div>
    <div><?=$view?></div>
</div>
<script>





</script>
</body>
</html>
