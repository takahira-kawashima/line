<?php
session_start();

require_once('./php/lib/functions.php');
require_once('./php/lib/info.php');
require_once('./php/lib/db_init.php');

//var_dump($_POST['comment']);
//var_dump($_SESSION['email']);
$email = h($_SESSION['email']);
$comment = h($_POST['comment']);

$stmt = $db->query("UPDATE user SET comment='$comment' WHERE email='$email'");

header("Location: ./home.php");
