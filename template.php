<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title><?= $title ?></title>
    <link href="css/style.css" rel="stylesheet" />
</head>

<body>
    <header>
        <div id="banner">
            <img src="img/emerald-lake-436200.jpg" id="lake">
            <span id="banner_span">Un billet pour l'Alaska</span>
        </div>
    </header>
    <div id="main">
        <div id="container">
            <?= $content ?>
        </div>
    </div>
</body>
<script src="js/script.js"></script>
</html>