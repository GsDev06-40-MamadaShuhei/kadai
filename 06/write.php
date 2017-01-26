<?php
$name = $_POST["name"];
$mail = $_POST["mail"];

?>


<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>
書き込みました。<br>
<?php
$str = $name.",".$mail."\n";
$file = fopen("data/data.txt","a");	// ファイル読み込み
flock($file, LOCK_EX);			// ファイルロック
fwrite($file, $str."\n");
flock($file, LOCK_UN);			// ファイルロック解除
fclose($file);
?>
<ul>
<li><a href="index.php">戻る</a></li>
</ul>
</body>
</html>
