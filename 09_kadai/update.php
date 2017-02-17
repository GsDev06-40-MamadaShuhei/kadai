<?php
//1.POSTでParamを取得
//1. POSTデータ取得
$id   = $_POST["id"];
$bookname   = $_POST["bookname"];
$bookurl  = $_POST["bookurl"];
$bookcoment = $_POST["bookcoment"];

//2. DB接続します(エラー処理追加)
try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','shu19860102');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}

//３．データ登録SQL作成
$stmt = $pdo->prepare("UPDATE gs_bm_table SET bookname=:bookname,bookurl=:bookurl,bookcoment=:bookcoment WHERE id=:id");
$stmt->bindValue(':bookname', $bookname);
$stmt->bindValue(':bookurl', $bookurl);
$stmt->bindValue(':bookcoment', $bookcoment);
$stmt->bindValue(':id', $id);
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}else{
  //５．index.phpへリダイレクト
  header("Location: index.php");
  exit;
}


?>
