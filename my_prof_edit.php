<?php

require_once('./php/lib/functions.php');
require_once('./php/lib/info.php');
require_once('./php/lib/db_init.php');

$id = h($_GET['id']);

$stmt = $db->query("SELECT * FROM user WHERE id='$id'");

?>

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
        <link rel="stylesheet" href="./css/structure_line.css" type="text/css">
	</head>
	<body>
        <div class="container">
            <form action="./my_prof_edit_exit.php" method="post">
                <?php foreach($stmt as $key):?>
                <p>ここにサムネ画像が入ります</p>
                <p><?php echo $key['name'] ;?></p>
                <textarea name="comment"><?php echo $key['comment'];?></textarea><br>
                <p><input type="submit" value="更新する"></p>
                <?php $_SESSION['email'] = $key['email'];?>
                <?php endforeach;?>
            </form>
        </div>
    </body>
</html>
