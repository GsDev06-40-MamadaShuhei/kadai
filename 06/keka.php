<html>

<head>
    <meta charset="UTF-8">
    <title>実行結果</title>
</head>

<body>
    <?php
$fp = fopen("data/donut.csv", "r");
while ($data = fgetcsv($fp, 10000)) {
  foreach ($data as $d) {
    print $d . "<br>\n";
  }
}
?>
</body>

</html>