<?php
session_start();

require_once('./php/lib/functions.php');
require_once('./php/lib/info.php');
require_once('./php/lib/db_init.php');

$email = h($_POST['email']);
$pass = h($_POST['pass']);

$message = NULL;

$ps = $db->query("SELECT email,pass FROM user WHERE email='$email'");
            $r = $ps->fetch();

        var_dump($r);

/*
            if($r['email'] === $email && $r['pass'] === $pass) {
                $email = $email;
                $pass = $pass;
            } elseif($r['email'] !== $email) {
                $message[] = 'メールアドレスが間違っています。';
            } else {
                $message[] = 'パスワードが間違っています。';
            }

/*
if($message !== NULL) {
    $_SESSION['error'] = $message;
    header("Location: ./login.php");
} else {
    $_SESSION['email'] = $email;
    $_SESSION['pass'] = $pass;
    header("Location: ./home.php");
}
*/