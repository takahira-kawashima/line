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
        <footer>
            
        </footer>
    </body>
</html>