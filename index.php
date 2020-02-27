<?php
session_start();

require ('controller/FrontEnd/controller.php');
require ('model/FrontEnd/Manager.php');
require ('model/FrontEnd/PostManager.php');
require ('model/FrontEnd/CommentManager.php');

$manager = new Manager();
$db = $manager->dbConnect();

$commentManager = new CommentManager($db);
$postManager = new PostManager($db);


$controllerFront = new ControllerFront($commentManager, $postManager);



if (isset($_GET['action'])) {

    if ($_GET['action'] == 'listPosts') {
        $controllerFront->listPosts();
    }

    elseif ($_GET['action'] == 'getpost') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            $controllerFront->getPost();
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }

    elseif ($_GET['action'] == 'addcomment') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            $controllerFront->addComment($_GET['id'], $_POST['name'], $_POST['text']);
        }
        else {
            echo 'Erreur : aucun identifiant de commentaire envoyé';
        }  
    } 

    elseif ($_GET['action'] == 'alertcomment') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            $controllerFront->alertComment($_GET['id']);
        }
        else {
            echo 'Erreur : aucun identifiant de commentaire envoyé';
        }  
    }
    
    elseif ($_GET['action'] == 'author') {
        $controllerFront->author();
    }
}

else {
    $controllerFront->listPosts();
}