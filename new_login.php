<?php
session_start();
?>

<!doctype html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="line(ライン)サンプル掲示板です。授業のログなどの保持に最適です。">
		<meta name="keywords" content="alwida,アルビダ">
		<link rel="stylesheet" href="./css/normalize.css" type="text/css">
		<link rel="stylesheet" href="./css/common.css" type="text/css">
		<link rel="stylesheet" href="./css/structure.css" type="text/css">
		<link rel="stylesheet" href="./css/skin.css" type="text/css">
        <link rel="stylesheet" href="./css/skin_line.css" type="text/css">
        <link rel="stylesheet" href="./css/structere_line.css" type="text/css">
        <link rel="stylesheet" href="./css/0229.css" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
		<title>line(サンプル)</title>
	</head>
<<<<<<< HEAD
	<body>
        <header>
            <h1>アカウント作成画面</h1>
            <p>新規アカウントを作成するため、下記情報を記載してください。</p>
        </header>
        <main>
            <form action="./new_log_check.php" method="post">
                <p>
                    <label for="name">お名前</label>
                    <input type="text" name="name" required>
                </p>
                <p>
                    <label for="email">アカウント名(メールアドレス)</label>
                    
                    <input type="email" name="email" required>
                </p>
                <p>
                    <label for="pass">パスワード</label>
                    <input type="password" name="pass" required>
                </p>
                <p>
                    <input type="submit" value="アカウント作成">
                </p>
            </form>
            <div>
            <?php
                if(count($_SESSION) !== 0) {
                    foreach($_SESSION['error'] as $val) { ?>
                <p><?php echo $val;?></p>
                <?php
                    }
                }
                session_destroy();
            ?>
            </div>
        </main>
=======
	<body  class="bg_c_body  h_vh_80">
        <div class="container">
            <header>
                <div class="logo">
                    <div class="logo_shape">
                        <img class="logo_shape_img" src="http://placehold.jp/60x60.png" width="100%">
                    </div>
                </div>
            </header>
            <main class="login_area">
                <form action="./new_log_check.php" method="post">
                    <p class="login_posi">お名前<br><input type="text" name="name" class="login_word" required></p>
                    <p class="login_posi">e-mail<br><input type="email" name="email" class="login_word" required></p>
                    <p class="login_posi">PASS<br><input type="password" name="pass" class="login_word" required></p>
                    <p class="login_button"><input type="submit" value="アカウント作成"></p>
                </form>
            </main>
        </div>
>>>>>>> 92c1cc396bc2e4ec9cd025766a5a94ac62261daa
        <footer>
            
        </footer>
    </body>
</html>