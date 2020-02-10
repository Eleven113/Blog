<?php
require('controller/controller.php');
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'listPosts') {
        listPosts();
    }
    elseif ($_GET['action'] == 'post') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            post();
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }

    elseif ($_GET['action'] == 'addcomment') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            addComment($_GET['id'],$_POST['name'],$_POST['text']);
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }  
    }
    elseif ($_GET['action'] == 'alertcomment') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            alertComment($_GET['id']);
        }
        else {
            echo 'Erreur : aucun identifiant de commentaire envoyé';
        }  
    }
    elseif ($_GET['action'] == 'admin') {
        adminListPost();
    }

    elseif ($_GET['action'] == 'listcomments') {
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
}
else {
    listPosts();
}