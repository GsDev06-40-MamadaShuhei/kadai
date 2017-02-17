<?php
$id = $_GET["id"];

//DB接続します(エラー処理追加)
try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','shu19860102');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}

//データ登録SQL作成
$stmt = $pdo->prepare("DELETE FROM gs_bm_table WHERE id=:id");
$stmt->bindValue(':id', $id);
$status = $stmt->execute();

//データ表示
$view="";
if($status==false){
    $erro = $stmt->erroInfo();
    exit("ErroQuery:".$erro[2]);    
}else{
    header("Location: index.php");
  exit;
}
?>