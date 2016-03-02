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
        <link rel="stylesheet" href="./css/structure_line.css" type="text/css">
		<title>line(サンプル)</title>
	</head>
	<body>
        <div class="w_100 clearfix">
            <main class="w_100 f_right">
                <div class="home_content">
                    <div class="f_search">
                        <form action="./f_search.php" method="post">
                            <p class="mar_b_20">友達グループ</p>
                            <input type="text" name="email" placeholder="友達をIDで検索">
                        </form>
                    </div>
                    
                    <div class="home_my_profile mh_200 pad_20">
                        <div class="home_my_profile_inner w_60 mar_0_auto h_px_150">
                        </div>
                    </div>
                    
                    <div class="home_f_profile mh_200 clearfix">
                        <div class="f_left w_50 pad_10">
                            <p>ここに追加画面</p>
                        </div>
                        <div class="f_right w_50 pad_10">
                            <p>ここに友達の一覧</p>
                        </div>
                    </div>
                    
                    <div class="home_g_profile clearfix">
                        <div class="f_left w_c_3 pad_10">
                            <p>グループサムネ１</p>
                        </div>
                        <div class="f_left w_c_3 pad_10">
                            <p>グループサムネ2</p>
                        </div>
                        <div class="f_left w_c_3 pad_10">
                            <p>グループサムネ3</p>
                        </div>
                    </div>
                    
                </div>
            </main>
            <nav class="nav f_left">
                <div class="p_fixed h_vh_100 nav_inner">
                    <ul>
                    <li>home</li>
                    <li>talk</li>
                    <li>member</li>
                    <li>option</li>
                </ul>
                </div>
            </nav>
        </div>
    </body>
</html>