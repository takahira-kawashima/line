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
        <link rel="stylesheet" href="./css/0229.css" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
		<title>line(サンプル)</title>
	</head>
	
	<body class="bg_c_body  h_vh_80">
        
		<div class="container">
            <div class="logo">
                <div class="logo_shape">
                    <img class="logo_shape_img" src="http://placehold.jp/60x60.png" width="100%">
                </div>
            </div>
            
            <div class="login_area">
                <form class="clearfix" action="./home.php" method="post">
                    <p class="login_posi space-bottom">ID<br><input name="email"  class="login_word" type="email" required></p>
                    <p class="login_posi">PASS<br><input name="pass" class="login_word" type="password" required></p>
                    <p class="login_button"><input type="submit" value="ログイン"></p>
                </form>
                <form action="new_login.php" method="post">
                    <div class="new_account">
                        <p class="new_account_button"><input class="new_account_go" type="submit" value="新規アカウント作成はこちら"></p>
                    </div>
                </form>
            </div>
		</div>
        
        
		
		<script src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
        <script src="./js/functions.js"></script>
		<script src="./js/functions.js"></script>

	</body>
</html>

