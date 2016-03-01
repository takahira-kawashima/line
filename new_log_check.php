<?php
require_once('./php/lib/functions.php');
require_once('./php/lib/info.php');
require_once('./php/lib/db_init.php');

$name = h($_POST['name']);
$email = h($_POST['email']);
$pass = h($_POST['pass']);

/*
var_dump($name);
var_dump($email);
var_dump($pass);
*/

$stmt = $db->prepare("INSERT INTO user(name,email,pass) VALUES (:name,:email,:pass)");
$stmt->execute(array(
            ':name'=>$name,
            ':email'=>$email,
            ':pass'=>$pass
              ));
header("Location: ./home.php");

?>
<!doctype html>
<html>
    <head>
    </head>
    <body>
    </body>
</html>