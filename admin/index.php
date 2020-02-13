<?php
session_start();

require('../controller/BackEnd/controller.php');

if (isset($_GET['action'])) {
     if ($_GET['action'] == 'listcomments') {
         listComments();
     }
 
     elseif ($_GET['action'] == 'createpost') {
         createPost();
     }
 
     elseif ($_GET['action'] == 'addpost') {
         addPost($_POST['post']);
     }
 
     elseif ($_GET['action'] == 'deletepost') {
         if (isset($_GET['id']) && $_GET['id'] > 0) {
             deletePost($_GET['id']);
         }
         else {
             echo 'Erreur : aucun identifiant de billet envoyé';
         }  
     }   
 
     elseif ($_GET['action'] == 'deletecomment') {
         if (isset($_GET['id']) && $_GET['id'] > 0) {
             deleteComment($_GET['id']);
         }
         else {
             echo 'Erreur : aucun identifiant de commentaire envoyé';
         }  
     } 
 
     elseif ($_GET['action'] == 'showpost') {
         if (isset($_GET['id']) && $_GET['id'] > 0) {
             showPost($_GET['id']);
         }
         else {
             echo 'Erreur : aucun identifiant de billet envoyé';
         }  
     } 
 
     elseif ($_GET['action'] == 'updatepost') {
         if (isset($_GET['id']) && $_GET['id'] > 0) {
             updatePost($_GET['id'],$_POST['post']);
         }
         else {
             echo 'Erreur : aucun identifiant de billet envoyé';
         }  
     } 
 
     elseif ($_GET['action'] == 'showcomment') {
         if (isset($_GET['id']) && $_GET['id'] > 0) {
             showComment($_GET['id']);
         }
         else {
             echo 'Erreur : aucun identifiant de commentaire envoyé';
         }  
     } 
 
     elseif ($_GET['action'] == 'updatecomment') {
         if (isset($_GET['id']) && $_GET['id'] > 0) {
             updateComment($_GET['id'],$_POST['comment']);
         }
         else {
             echo 'Erreur : aucun identifiant de commentaire envoyé';
         }  
     } 
 }
 
 else {
     listPost();
 }
?>