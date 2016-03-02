<?php

require_once('./php/lib/functions.php');
require_once('./php/lib/info.php');
require_once('./php/lib/db_init.php');

$name = h($_POST['name']);
/*
$ps = $db->prepare("SELECT * FROM user WHERE name=':name'");
$ps->execute(array(
            ':name'=>$name
));
*/
$stmt = $db->query("SELECT * FROM user WHERE name='$name'");

//$stmt = $ps->fetch(PDO::FETCH_ASSOC);
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
            <form method="post" action="./f_search_edit.php">
                <p>
                    <input type="submit" value="友達になる">
                </p>
                
                <?php foreach($stmt as $key):?>
                <p class="f_s_p_img w_px_300 mh_300">ここに画像が入ります。</p>
                <p><?php echo $key['name'] ;?></p>
                <textarea name="comment"><?php echo $key['comment'];?></textarea>
                <?php endforeach;?>
                
            </form>
        </div>
    </body>
</html>





