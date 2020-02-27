<?php
session_start();

require ('../controller/BackEnd/controller.php');
require ('../model/BackEnd/Manager.php');
require ('../model/BackEnd/PostManager.php');
require ('../model/BackEnd/CommentManager.php');

$managerBack = new ManagerBack();
$db = $managerBack->dbConnect();

$commentManager = new CommentManager($db);
$postManager = new PostManager($db);

$controllerBack = new ControllerBack($commentManager, $postManager);

if (isset($_GET['action'])) {
     if ($_GET['action'] == 'listcomments') {
         $controllerBack->listComments();
     }
 
     elseif ($_GET['action'] == 'createpost') {
        $controllerBack->createPost();
     }
 
     elseif ($_GET['action'] == 'addpost') {
        $controllerBack->addPost($_POST['post']);
     }
     
     elseif ($_GET['action'] == 'deletepost') {
         if (isset($_GET['id']) && $_GET['id'] > 0) {
            $controllerBack->deletePost($_GET['id']);
         }
         else {
             echo 'Erreur : aucun identifiant de billet envoyé';
         }  
     }   
 
     elseif ($_GET['action'] == 'deletecomment') {
         if (isset($_GET['id']) && $_GET['id'] > 0) {
            $controllerBack->deleteComment($_GET['id']);
         }
         else {
             echo 'Erreur : aucun identifiant de commentaire envoyé';
         }  
     } 
 
     elseif ($_GET['action'] == 'showpost') {
         if (isset($_GET['id']) && $_GET['id'] > 0) {
            $controllerBack->showPost($_GET['id']);
         }
         else {
             echo 'Erreur : aucun identifiant de billet envoyé';
         }  
     } 
 
     elseif ($_GET['action'] == 'updatepost') {
         if (isset($_GET['id']) && $_GET['id'] > 0) {
            $controllerBack->updatePost($_GET['id'],$_POST['post']);
         }
         else {
             echo 'Erreur : aucun identifiant de billet envoyé';
         }  
     } 
 
     elseif ($_GET['action'] == 'showcomment') {
         if (isset($_GET['id']) && $_GET['id'] > 0) {
            $controllerBack->showComment($_GET['id']);
         }
         else {
             echo 'Erreur : aucun identifiant de commentaire envoyé';
         }  
     } 
 
     elseif ($_GET['action'] == 'updatecomment') {
         if (isset($_GET['id']) && $_GET['id'] > 0) {
            $controllerBack->updateComment($_GET['id'],$_POST['comment']);
         }
         else {
             echo 'Erreur : aucun identifiant de commentaire envoyé';
         }  
     } 
 }
 
 else {
    $controllerBack->listPost();
 }
?>