<?php
session_start();

require_once('./php/lib/functions.php');
require_once('./php/lib/info.php');
require_once('./php/lib/db_init.php');

$name = h($_POST['name']);
$email = h($_POST['email']);
$pass = h($_POST['pass']);

$message = NULL;

//emailアドレス判定
if(preg_match('|^[0-9a-z_./?-]+@([0-9a-z-]+\.)+[0-9a-z-]+$|', $email)) {
    $email = $email;
} else {
    $message[] = "メールアドレスを正しく入力してください。";
}

//日本語文字数判定
if(mb_strlen($name) > 30) {
    $message[] = '30文字以内で入力してください';
}

//パスワード設定(半角英数のみ許可)
if(preg_match("/^[a-zA-Z0-9]+$/", $pass) || mb_strlen($pass) < 30) {
    $pass = $pass;
} else {
    $message[] = "半角英数,30文字以内で入力してください。";
}

//エラーメッセージがある場合
if( $message !== NULL) {
    $_SESSION['error'] = $message;
    header("Location: ./new_login.php");
}

$stmt = $db->prepare("INSERT INTO user(name,email,pass) VALUES (:name,:email,:pass)");
$stmt->execute(array(
            ':name'=>$name,
            ':email'=>$email,
            ':pass'=>$pass
              ));

$_SESSION['email'] = $email;
header("Location: ./home.php");
