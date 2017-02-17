<?php

session_start();
if( !isset($_SESSION["chk_ssid"]) || $_SESSION["chk_ssid"]!=session_id()){
    header("Location: user/login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>本のブックマーク</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                   <div class="navbar-header">
                        <a class="navbar-brand" href="index.php">BOOK一覧</a>
                    </div>
                    <div class="navbar-header">
                        <a class="navbar-brand" href="book_reg.php">BOOK登録</a>
                    </div>
                    <div class="navbar-header">
                        <a class="navbar-brand" href="user/select.php">ユーザー管理</a>
                    </div>
                </div>
            </nav>
        </header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>本のブックマーク</legend>
     <label>書籍名：<input type="text" name="bookname"></label><br>
     <label>書籍URL：<input type="text" name="bookurl"></label><br>
     <label>書籍コメント<textArea name="bookcoment" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
