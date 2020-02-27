<?php

// Chargement des classes


Class ControllerFront {

    public $commentManager;
    public $postManager;
    

    public function __construct($commentManager, $postManager)
    {
      $this->commentManager = $commentManager;
      $this->postManager = $postManager;
    }


    public function listPosts()
    {

        $posts = $this->postManager->getPosts(); // Appel d'une fonction de cet objet

        require('view/FrontEnd/ListPostsView.php');
    }

    public function getPost()
    {

        $post = $this->postManager->getPost($_GET['id']);
        $comments = $this->commentManager->getComments($_GET['id']);

        require('view/FrontEnd/PostView.php');
    }

    public function addComment($postId, $author, $comment)
    {

        if ( empty($author) || empty($comment) ){
            $_SESSION['notice'] = "Votre commentaire n'a pas été ajouté. Nom ou message vide";
            header('Location: index.php?action=getpost&id='. $postId);
        }
        else {

            $affectedLines = $this->commentManager->postComment($postId, $author, $comment);
            $_SESSION['notice'] = "Votre commentaire a bien été ajouté.";

            if ($affectedLines === false) {
                unset($_SESSION['notice']);
                throw new Exception("Impossible d'ajouter le commentaire !");
            }
            else {
                header('Location: index.php?action=getpost&id='. $postId);
            }
        }
    }

    public function alertComment($commentId)
    {

        $commentId = $this->commentManager->flagComment($commentId);
        $_SESSION['notice'] = "Le commentaire a bien été signalé.";

        header('Location: index.php?action=getpost&id='. $commentId);

    }

    public function author(){
        require('view/FrontEnd/AuthorView.php');
    }

}