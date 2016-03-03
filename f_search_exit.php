<?php
session_start();

require_once('./php/lib/functions.php');
require_once('./php/lib/info.php');
require_once('./php/lib/db_init.php');

//ログインしている本人のセッション変数
$email= $_SESSION['email'];
//var_dump($email);
//echo '<br>';

$id = h($_POST['id']);
//var_dump($id);

$stmt = $db->query("UPDATE user SET friend=concat(friend,'$id,') WHERE email='$email'");

header("Location: ./home.php");