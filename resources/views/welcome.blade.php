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
            <form action="" class="formWrapper">
                <div>
                    <input type="submit" value="書き込む">
                    <label form="">名前：</label>
                    <input type="text">
                </div>
                <div>
                    <textarea class="commentTextArea"></textarea>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
