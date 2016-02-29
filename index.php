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
		<div class="container h_vh_100 bg_c_green">
			<header class="h_vh_10 bg_c_gray clearfix">
				<h1 class="v_hidden f_left w_20">line-sample</h1>
				<nav class="f_right w_40 clearfix">
					<ul>
						<li class="f_left w_c_4">home</li>
						<li class="f_left w_c_4">talk</li>
						<li class="f_left w_c_4">config</li>
						<li class="f_left w_c_4">logout</li>
					</ul>
                </nav>
			</header>
            <div class="h_vh_50">
                <p>ここにログイントップ画像が入ります。</p>
            </div>
			<main class="clearfix">
				<form class="f_left w_c_2" action="new_login.php" method="post">
					<p>
						<label for="new">アカウント新規作成</label>
						<input type="submit" value="作成">
					</p>
					<p>
						<label for="login">ログイン</label>
						<input type="submit" value="ログイン">
					</p>
				</form>
                <form class="f_right w_c_2" action="login.php" method="post">
					<p>
						<label for="login">ログイン</label>
						<input type="submit" value="ログイン">
					</p>
				</form>
			</main>
			<footer>
                <form action="logout.php" method="post">
                    <p>
                    <label>ログアウトボタン</label>
                    <input type="submit">
                    </p>
                </form>
			</footer>
		</div>
		
		<script src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
		<script src="./js/functions.js">
	</body>
</html>

