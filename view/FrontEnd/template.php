<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta property="og:title" content="Billet simplet pour l'Alaska - Jean Forteroche" />
    <meta property="og:type" content="Website" />
    <meta property="og:url" content="http://www.thibaut-minard.fr/blog/" />
    <meta property="og:image" content="http://www.thibaut-minard.fr/blog/public/img/og_pic.jpg" />
    <meta property="og:description" content="Le nouveau roman de Jean Forteroche">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">   
    <link href="public/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" media="screen and (max-width: 767px)" href="public/css/style_mobile.css" />
    <script src="https://kit.fontawesome.com/5fbf6a0223.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>    
        <div id="header_menu">
            <nav id="menu"> 
                <div id="menu-story"><a href="index.php"><i class="fas fa-book"></i>&nbsp;&nbsp;L'Histoire</a></div>
                <div id="menu-author"><a href="index.php?action=author"><i class="fas fa-user-edit"></i>&nbsp;&nbsp;L'Auteur</a></div>
            </nav>
        </div>
        <div id="banner">
            <img src="public/img/header.jpg" id="lake" alt="Paysage d'un lac devant une montagne arborée">
            <div id="bars_button"><i class="fas fa-bars"></i></div>
            <div id="banner_title">Billet simple pour l'Alaska</div>
        </div>
    </header>
    <div id="main">
        <div id="container">
            <?= $content ?>
        </div>
    </div>
    
  

    <footer>
    <div id="bars_button_footer"><i class="fas fa-bars"></i></div>
        <div id="footer_link">
            <div id="footer_link-title" class="footer-title">Liens</div>
            <nav id="footer_link-nav">
                <a href="index.php">L'Histoire</a>
                <a href="index.php?action=author">L'Auteur</a>
            </nav>
        </div>
        <div id="footer_reservation" class="footer-title">
            <div id="footer_reservation-title">Réservez dès maintenant</div>
            <ul id="footer_reservation-link">
                <li><a href="#">amazon.fr</a></li>
                <li><a href="#">cultura.fr</a></li>
                <li><a href="#">fnac.com</a></li>
            </ul>
        </div>
        <div id="footer_author" class="footer-title">
            <div id="footer_author-title">Suivez Jean Forteroche</div>
            <div id="footer_author-button">
                <a href="#"><i class="fab fa-facebook-square"></i></a>
                <a href="#"><i class="fab fa-twitter-square"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-youtube-square"></i></a>
            </div>    
        </div>
    </footer>
    <script src="public/js/script.js"></script>
<script src="public/js/NoticeManagement.js"></script>
<?= $script ?>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>    
</body>
</html>