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
            <h1>ログイン画面</h1>
        </header>
        <main>
            <form action="./home.php" method="post">
                <p>
                    <label for="email">アカウント名(メールアドレスを記入してください)</label>
                    
                    <input type="email" name="email" required>
                </p>
                <p>
                    <label for="pass">パスワード</label>
                    <input type="password" name="pass" required>
                    <?php
                    if(count($_SESSION) !== 0):
				        foreach($_SESSION["error"] as $val):
		            ?>
			        <p><?php echo $val;?></p>
		            <?php
				        endforeach; 
			        endif;
                    ?>
                </p>
                <p>
                    <input type="submit" value="ログイン">
                </p>
            </form>
        </main>
        <footer>
            
        </footer>
    </body>
</html>