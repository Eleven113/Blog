<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">   
    <link href="css/style.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/5fbf6a0223.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div id="banner">
            <img src="img/emerald-lake-436200.jpg" id="lake">
            <span id="banner_span">Billet simple pour l'Alaska</span>
        </div>
    </header>
    <div id="main">
        <div id="container">
            <?= $content ?>
        </div>
    </div>
</body>
<script src="js/script.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>