<?php

// Chargement des classes
require_once('model/FrontEnd/PostManager.php');
require_once('model/FrontEnd/CommentManager.php');

Class ControllerFront {

    public function listPosts()
    {
        $postManager = new PostManager(); // Création d'un objet
        $posts = $postManager->getPosts(); // Appel d'une fonction de cet objet

        require('view/FrontEnd/ListPostsView.php');
    }

    public function getPost()
    {
        $postManager = new PostManager();
        $commentManager = new CommentManager();

        $post = $postManager->getPost($_GET['id']);
        $comments = $commentManager->getComments($_GET['id']);

        require('view/FrontEnd/PostView.php');
    }

    public function addComment($postId, $author, $comment)
    {
        $commentManager = new CommentManager();
        $affectedLines = $commentManager->postComment($postId, $author, $comment);
        $_SESSION['notice'] = "Votre commentaire a bien été ajouté.";

        if ($affectedLines === false) {
            unset($_SESSION['notice']);
            throw new Exception('Impossible d\'ajouter le commentaire !');
        }
        else {
            header('Location: index.php?action=getpost&id='. $postId);
        }
    }

    public function alertComment($commentId)
    {
        $commentManager = new CommentManager();
        $commentId = $commentManager->flagComment($commentId);
        $_SESSION['notice'] = "Le commentaire a bien été signalé.";

        header('Location: index.php?action=getpost&id='. $commentId);

    }

    public function author(){
        require('view/FrontEnd/AuthorView.php');
    }

}