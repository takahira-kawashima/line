<?php
session_start();

require_once('./php/lib/functions.php');
require_once('./php/lib/info.php');
require_once('./php/lib/db_init.php');

//var_dump($_POST['comment']);
//var_dump($_SESSION['email']);
$email = h($_SESSION['email']);
$comment = h($_POST['comment']);
$thumb = $_FILES['myfile']['name'];
$explode = explode(".",$thumb);

$extension = $explode[1];

if($extension === 'jpg' || $extension === 'jpeg' || $extension === 'gif' || $extension === 'png') {
    move_uploaded_file($_FILES['myfile']['tmp_name'],"./img/".$_FILES['myfile']['name']);
}

/*
echo '<pre>';
var_dump($thumb);
echo '</pre>';
*/

$stmt = $db->query("UPDATE user SET comment='$comment',thumb='$thumb' WHERE email='$email'");

header("Location: ./home.php");
