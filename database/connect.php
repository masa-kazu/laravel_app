<?php
$user = "sail";
$pass = "password";

try {
    // ホスト名は注意(Dockerの方に向ける)
    $pdo = new PDO('mysql:host=mysql:3306;dbname=laravel', $user, $pass);
    echo "DB接続成功";
} catch (PDOException $error) {
    echo $error -> getMessage();
}
