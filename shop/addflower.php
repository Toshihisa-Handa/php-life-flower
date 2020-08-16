<?php  
session_start();
include('funcs.php');
$shopname = $_SESSION['shopname'];
$location = $_SESSION['location']; 
$shopid = $_SESSION['id'] ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規花登録</title>
</head>
<body>
    



<form method="POST" action="addflower_act.php" enctype="multipart/form-data">
<label>花の名前<input type="text" name="fname"></label><br>
     <label>花の月<input type="text" name="fmonth"></label><br>
     <label>価格<input type="text" name="fprice"></label><br>
     <label>花の画像<input type="file" name="upfile"></label><br>
     <input type="hidden" name='shopid' value="<?php echo $shopid?>"></><br>
     <input type="hidden" name='shopname' value="<?php echo $shopname?>"></><br>
     <input type="hidden" name='location' value="<?php echo $location?>"></><br>
     <input type="submit" value="送信">
</form>



</body>
</html>