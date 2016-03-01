<?php
session_start();

require_once('./php/lib/functions.php');
require_once('./php/lib/info.php');
require_once('./php/lib/db_init.php');

$name = h($_POST['name']);
$email = h($_POST['email']);
$pass = h($_POST['pass']);

$stmt = $db->prepare("INSERT INTO user('name','email','pass') VALUES (':name',':email',':pass')");
    $stmt->execute(array(
                    ':name'=>$name,
                    ':email'=>$email,
                    ':pass'=>$pass
                  ));

if($name !== '' && $email !== '' && $pass !== ''):
    $_SESSION['name'] = 
    header('Location: ./home.php');
else:
    header('Location: ./login.php');
endif;

?>