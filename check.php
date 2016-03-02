<?php
session_start();

require_once('./php/lib/functions.php');
require_once('./php/lib/info.php');
require_once('./php/lib/db_init.php');

$email = h($_POST['email']);
$pass = h($_POST['pass']);

$message = NULL;

$ps = $db->query("SELECT email,pass FROM user WHERE email='$email'");

$stmt = $ps->fetch(PDO::FETCH_ASSOC);

/*
while($stmt = $ps->fetch(PDO::FETCH_ASSOC)) {
    foreach($stmt as $key => $val) {
        echo $val;
        echo '<br>';
    }
}
*/

//print_r($stmt['email']);

if($stmt['email'] === $email && $stmt['pass'] === $pass) {
    $email = $email;
    $pass = $pass;
    } elseif($stmt['email'] !== $email) {
        $message[] = 'メールアドレスが間違っています。';
    } elseif($stmt['pass'] !== $pass) {
        $message[] = 'パスワードが間違っています。';
    }

if($message !== NULL) {
    $_SESSION['error'] = $message;
    header("Location: ./index.php");
} else {
    $_SESSION['email'] = $email;
    header("Location: ./home.php");
}