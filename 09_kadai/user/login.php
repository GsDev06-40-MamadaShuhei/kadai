<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ログイン</title>
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="login.php">ログイン</a>
                    </div>
                    <div class="navbar-header">
                        <a class="navbar-brand" href="signup.php">新規登録</a>
                    </div>
                </div>
            </nav>
        </header>
<!-- Head[End] -->

<!-- lLOGINogin_act.php は認証処理用のPHPです。 -->
<form name="form1" action="login_act.php" method="post">
<p>ID:<input type="text" name="lid" /></p>
<p>PW:<input type="password" name="lpw" /></p>
<input type="submit" value="LOGIN" />
</form>


</body>
</html>
