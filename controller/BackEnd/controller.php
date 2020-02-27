<?php

class ControllerBack {

    public function __construct($commentManager, $postManager)
    {
        $this->commentManager = $commentManager;
        $this->postManager = $postManager;
    }

    public function listPost()
    {
        $posts = $this->postManager->getPosts(); 

        require('../view/BackEnd/ListPostsView.php');
    }

    public function listComments()
    {

        $comments = $this->commentManager->listComments();

        require('../view/BackEnd/ListCommentsView.php');
    }

    public function createPost()
    {
        require('../view/BackEnd/CreatePostView.php');
    }

    public function addPost($post)
    {
        if (empty($post)){
            $_SESSION['notice'] = "Votre article n'a pas été ajouté. Contenu vide."; 
        }
        else {
            $post = $this->postManager->addPost($post);
            $_SESSION['notice'] = "Votre article a bien été ajouté.";
        }

        header('Location: index.php');

    }

    public function deletePost($postId)
    {
        $this->postManager->deletePost($postId);
        $_SESSION['notice'] = "Votre article a bien été supprimé.";

        header('Location: index.php');
    }

    public function deleteComment($commentId)
    {
        $this->commentManager->deleteComment($commentId);
        $_SESSION['notice'] = "Le commentaire a bien été supprimé.";

        header('Location: index.php?action=listcomments');
    }

    public function showPost($postId)
    {
        $post = $this->postManager->getPost($postId);

        require('../view/BackEnd/PostView.php');

    }

    public function updatePost($postId,$article)
    {
        if (empty($article)){
            $_SESSION['notice'] = "Votre article n'a pas été modifié. Contenu vide.";
        }
        else {
            $this->postManager->updatePost($postId,$article);
            $_SESSION['notice'] = "Votre article a bien été modifié.";
        }

        header('Location: index.php');
    }

    public function showComment($commentId)
    {
        $comment = $this->commentManager->getComment($commentId);

        require('../view/BackEnd/CommentView.php');

    }

    public function updateComment($commentId,$comment)
    {

        if (empty($comment)){
            $_SESSION['notice'] = "Le commentaire n'a pas été modifié. Contenu vide.";
        }
        else {
            $this->commentManager->updateComment($commentId,$comment);
            $_SESSION['notice'] = "Le commentaire a bien été modifié.";
        }

        header('Location: index.php?action=listcomments');
    }

}