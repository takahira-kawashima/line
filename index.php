<!doctype html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="line(ライン)サンプル掲示板です。授業のログなどの保持に最適です。">
		<meta name="keywords" content="alwida,アルビダ">
		<link rel="stylesheet" href="normalize.css" type="text/css">
		<link rel="stylesheet" href="common.css" type="text/css">
		<link rel="stylesheet" href="structure.css" type="text/css">
		<link rel="stylesheet" href="skin.css" type="text/css">
		<title>line(サンプル)</title>
	</head>
	<body>
		<div class="container">
			<header>
				<h1 class="invisible">line-sample</h1>
				<nav>
					<ul>
						<li>home</li>
						<li>talk</li>
						<li>config</li>
						<li>logout</li>
					</ul>
				</nav>
				<div>
					<p>ここにログイントップ画像が入ります。</p>
				</div>
			</header>
			<main>
				<form action="" method="post">
					<p>
						<label for="new">アカウント新規作成</label>
						<input type="submit" value="作成">
					</p>
					<p>
						<label for="login">ログイン</label>
						<input type="submit" value="ログイン">
					</p>
				</form>
			</main>
			<footer>
				<p>ログアウトボタン</p>
			</footer>
		</div>
		
		<script src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
		<script src="./js/functions.js">
	</body>
</html>
