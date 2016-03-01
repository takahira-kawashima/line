<?php
session_start();

require_once('./php/lib/functions.php');
require_once('./php/lib/info.php');
require_once('./php/lib/db_init.php');

$email = h($_POST['email']);
$user_pass = h($_POST['pass']);

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
            <h1>チェック画面(仮)</h1>
        </header>
        <main>
        <?php
            $ps = $db->query("SELECT email,pass FROM user WHERE email='$email'");
            $r = $ps->fetch();
            if($r['email'] === $email && $r['pass'] === $user_pass) {
                $_SESSION['email'] = $email;
                $_SESSION['pass'] = $user_pass;
                header("Location: ./home.php");
            } elseif($r['email'] !== $email) {
                $message = 'メールアドレスが間違っています。';
                $_SESSION['error'] = $message;
                header("Location: ./login.php");
            } else {
                $message = 'パスワードが間違っています。';
                $_SESSION['error'] = $message;
                header("Location: ./login.php");
            }
        ?>
        </main>
        <footer>
        </footer>
    </body>
</html>

