<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME | Tast</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
    <script src="js/font.js"></script>
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@TeamTast" />
    <meta property="og:url" content="https://tast.jp" />
    <meta property="og:title" content="Tast | タスト" /> 
    <meta property="og:description" content="身内で結成されたチームです。" /> 
    <meta property="og:image" content="https://tast.jp/imgs/logo_ta.png" />
</head>
<body>
    <div class="flexer">
        <div class="left">
            <img src="imgs/logo.webp" />
            <p id="copyright">© 2022 Tast</p>
        </div>
        <?php include('static/right.html'); ?>
    </div>
</body>
</html>

<!-- 

    一緒に開発しよう。 
    参加するには、contact.phpのURLパラメーター「join」にtrueを指定します。

-->

<?php
    session_start();
    $jointrue = @$_SESSION["jointrue"];
    if($jointrue === "pass"){
        echo "<!-- じゃじゃーん、「join」にkkrmを指定してね -->";
    }
?>