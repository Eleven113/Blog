<?php
session_start();

require('controller/FrontEnd/controller.php');

$manager = new Manager();
$db = $manager->dbConnect();
$commentManager = new CommentManager($db);
$publicManager = new PostManager($db);


if (isset($_GET['action'])) {

    if ($_GET['action'] == 'listPosts') {
        $controllerFront = new ControllerFront();
        $controllerFront->listPosts();
    }

    elseif ($_GET['action'] == 'getpost') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            $controllerFront = new ControllerFront();
            $controllerFront->getPost();
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }

    elseif ($_GET['action'] == 'addcomment') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            $controllerFront = new ControllerFront();
            $controllerFront->addComment($_GET['id'], $_POST['name'], $_POST['text']);
        }
        else {
            echo 'Erreur : aucun identifiant de commentaire envoyé';
        }  
    } 

    elseif ($_GET['action'] == 'alertcomment') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            $controllerFront = new ControllerFront();
            $controllerFront->alertComment($_GET['id']);
        }
        else {
            echo 'Erreur : aucun identifiant de commentaire envoyé';
        }  
    }
    
    elseif ($_GET['action'] == 'author') {
        $controllerFront = new ControllerFront();
        $controllerFront->author();
    }
}

else {
    $controllerFront = new ControllerFront();
    $controllerFront->listPosts();
}