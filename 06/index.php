<html>
<head>
<meta charset="utf-8">
<title>アンケート集計・表示課題</title>
</head>
<body>
<!--<form action="write.php" method="post">
	お名前: <input type="text" name="name">
	EMAIL: <input type="text" name="mail">
	<input type="submit" value="送信">
	
</form>-->
<form action="upload.php" method="post" enctype="multipart/form-data">
  ファイル：<br>
  <input type="file" name="upfile" size="30"><br>
  <br>
  <input type="submit" value="アップロード">
</form>
</body>
</html>