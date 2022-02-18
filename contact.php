<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT | Tast</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
    <script src="js/font.js"></script>
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@TeamTast" />
    <meta property="og:url" content="https://tast.jp/contact.php" />
    <meta property="og:title" content="Tast | Contact" /> 
    <meta property="og:description" content="身内で結成されたチームです。" /> 
    <meta property="og:image" content="https://tast.jp/imgs/logo_ta.png" />
</head>
<body>
    <div class="flexer">
        <div class="left">
            <p class="title">CONTACT</p>
            <?php
                session_start();
                $join = 0;
                if(isset($_GET['join'])){ 
                    $join = $_GET['join'];
                }
                if($join === "true"){
                    echo "<style>.title, .form{display: none;}</style><p>隠れ身の術...</p><p style=\"display: none\">甘いぜ</p>";
                    $_SESSION["jointrue"] = "pass";
                }else if($join === "false"){
                    echo "<style>.title, .form{display: none;}</style><p>falseじゃないよ。</p>";
                }else if($join === "kkrm"){
                    echo "<style>.title, .form{display: none;}</style><p>頑張ったね！何もないよ！</p> <!-- 会長とか会計長に「Tast入りたい」って言ってみよう！ -->";
                    unset($_SESSION["jointrue"] );
                }
            ?>
            <p class="form">Coming soon...</p>
            <p id="copyright">© 2022 Tast</p>
        </div>
        <?php include('static/right.html'); ?>
    </div>
</body>
</html>