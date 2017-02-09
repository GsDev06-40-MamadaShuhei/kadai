<?php
$id = $_GET["id"];
echo $id;

//DB接続します(エラー処理追加)
try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','shu19860102');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}

//データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_user_table WHERE id=:id");
$stmt->bindValue(':id', $id,PDO::PARAM_INT);
$status = $stmt->execute();

//データ表示
$view="";
if($status==false){
    $erro = $stmt->erroInfo();
    exit("ErroQuery:".$erro[2]);    
}else{
    $res = $stmt->fetch();
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ユーザー情報更新</title>
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="update.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ユーザー登録</legend>
     <label>名前：<input type="text" name="name" value="<?=$res["name"]?>"></label><br>
     <label>ユーザーID：<input type="text" name="lid" value="<?=$res["lid"]?>"></label><br>
     <label>パスワード：<input type="text" name="lpw" value="<?=$res["lpw"]?>"></label><br>
     <inpt type="hidden" name="id" value="<?=$id?>"></inpt>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>