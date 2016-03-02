<?php
    session_start();
?>

<!doctype html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="line(繝ｩ繧､繝ｳ)繧ｵ繝ｳ繝励Ν謗ｲ遉ｺ譚ｿ縺ｧ縺吶よ肢讌ｭ縺ｮ繝ｭ繧ｰ縺ｪ縺ｩ縺ｮ菫晄戟縺ｫ譛驕ｩ縺ｧ縺吶・>
		<meta name="keywords" content="alwida,繧｢繝ｫ繝薙ム">
		<link rel="stylesheet" href="./css/normalize.css" type="text/css">
		<link rel="stylesheet" href="./css/common.css" type="text/css">
		<link rel="stylesheet" href="./css/structure.css" type="text/css">
		<link rel="stylesheet" href="./css/skin.css" type="text/css">
        <link rel="stylesheet" href="./css/skin_line.css" type="text/css">
        <link rel="stylesheet" href="./css/structer.css" type="text/css">
		<title>line(繧ｵ繝ｳ繝励Ν)</title>
	</head>
	<body>
        <header>
            <h1>繝ｭ繧ｰ繧､繝ｳ逕ｻ髱｢</h1>
        </header>
        <main>
            <form action="./check.php" method="post">
                <p>
                    <label for="email">繧｢繧ｫ繧ｦ繝ｳ繝亥錐(繝｡繝ｼ繝ｫ繧｢繝峨Ξ繧ｹ繧定ｨ伜・縺励※縺上□縺輔＞)</label>
                    
                    <input type="email" name="email" required>
                </p>
                <p>
                    <label for="pass">繝代せ繝ｯ繝ｼ繝・/label>
                    <input type="password" name="pass" required>
                </p>
                <p>
                    <input type="submit" value="繝ｭ繧ｰ繧､繝ｳ">
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
        <footer>
            
        </footer>
    </body>
</html>

