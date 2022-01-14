<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WORKS | Tast</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
    <script src="js/font.js"></script>
</head>
<body>
    <div class="flexer">
        <div class="left">
            <p class="title">CONTACT</p>
            <?php
                $join = 0;
                if(isset($_GET['join'])){ 
                    $join = $_GET['join'];
                }
                if($join === "true"){
                    echo "<style>.title, .form{display:none;}</style><p>nswkpubアットgmail.com に参加希望とメールを送ってください。</p>";
                }
            ?>
            <p class="form">Coming soon...</p>
            <p id="copyright">© 2021 Tast</p>
        </div>
        <?php include('static/right.html'); ?>
    </div>
</body>
</html>