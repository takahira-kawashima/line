<?php
//外部ファイル読み込み
require_once('info.php');

//sql接続設定
$dsn = "mysql:host=$SERV;dbname=$DBNM;charset=utf8";

$db = new PDO($dsn,$USER,$PASS);

?>