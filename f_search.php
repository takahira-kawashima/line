<?php
session_start();

require_once('./php/lib/functions.php');
require_once('./php/lib/info.php');
require_once('./php/lib/db_init.php');

//ログインしている本人のセッション変数
$email= $_SESSION['email'];
//再度セッション変数に格納
$_SESSION['email'] = $email;

//検索相手のname
$name = h($_POST['name']);
$stmt = $db->query("SELECT * FROM user WHERE name='$name'");

?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./css/normalize.css" type="text/css">
		<link rel="stylesheet" href="./css/common.css" type="text/css">
		<link rel="stylesheet" href="./css/structure.css" type="text/css">
		<link rel="stylesheet" href="./css/skin.css" type="text/css">
        <link rel="stylesheet" href="./css/skin_line.css" type="text/css">
        <link rel="stylesheet" href="./css/structer_line.css" type="text/css">
    </head>
    <body>
        <div class="f_search_photo w_px_500">
            <form method="post" action="./f_search_exit.php">
                <p>
                    <input type="submit" value="友達になる">
                </p>
                
                <?php foreach($stmt as $key):?>
                <p class="f_s_p_img w_px_300 mh_300"><img class="w_100" src="./img/<?php echo $key['thumb'];?>"></p>
                <p><?php echo $key['name'] ;?></p>
                <p><?php echo $key['comment'];?></p>
                <textarea class="v_hidden" name="id"><?php echo $key['id'];?></textarea>
                <?php endforeach;?>
            </form>
        </div>
    </body>
</html>





