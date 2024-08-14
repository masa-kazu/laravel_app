<?php

include_once("../database/connect.php");

if (isset($_POST["submitButton"])) {
    $username = $_POST["username"];
    var_dump($username);
    $body = $_POST["body"];
    var_dump($body);
}

$comment_array = array();
// コメントデータをテーブルから取得してくる
$sql = "SELECT * FROM comment";
$statement = $pdo -> prepare($sql);
$statement -> execute();
$comment_array = $statement;
var_dump($comment_array -> fetchAll());

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>掲示板アプリß</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <header>
        <h1 class="title">掲示板</h1>
        <hr>
    </header>

    {{-- スレッドエリア --}}
    <div class="threadWrapper">
        <div class="childWrapper">
            <div class="threadTitle">
                <span>【タイトル】</span>
                <h1>掲示板アプリ作ってみました。</h1>
            </div>
            <section>
                <article>
                    <div class="wrapper">
                        <div class="nameArea">
                            <span>名前：</span>
                            <p class="username">masa</p>
                            <time>：2024/8/13 22:40</time>
                        </div>
                        <p class="comment">手書きのコメントです。</p>
                    </div>
                </article>
            </section>
            <form action="" class="formWrapper" method="POST">
                <div>
                    <input type="submit" value="書き込む" name="submitButton">
                    <label form="">名前：</label>
                    <input type="text" name="username">
                </div>
                <div>
                    <textarea class="commentTextArea" name="body"></textarea>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
