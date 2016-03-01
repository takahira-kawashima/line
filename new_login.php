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
        <link rel="stylesheet" href="./css/structer.css" type="text/css">
		<title>line(サンプル)</title>
	</head>
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
        </main>
        <footer>
            
        </footer>
    </body>
</html>