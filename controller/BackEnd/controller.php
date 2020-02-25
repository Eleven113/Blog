<?php

require_once('../model/BackEnd/PostManager.php');
require_once('../model/BackEnd/CommentManager.php');

class ControllerBack {

    public function listPost()
    {
        $postManager = new PostManager();
        $posts = $postManager->getPosts(); 

        require('../view/BackEnd/ListPostsView.php');
    }

    public function listComments()
    {
        $commentManager = new CommentManager();
        $comments = $commentManager->listComments();

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
            $postManager = new PostManager();
            $post = $postManager->addPost($post);
            $_SESSION['notice'] = "Votre article a bien été ajouté.";
        }

        header('Location: index.php');

    }

    public function deletePost($postId)
    {
        $postManager = new PostManager();
        $postManager->deletePost($postId);
        $_SESSION['notice'] = "Votre article a bien été supprimé.";

        header('Location: index.php');
    }

    public function deleteComment($commentId)
    {
        $commentManager = new CommentManager();
        $commentManager->deleteComment($commentId);
        $_SESSION['notice'] = "Le commentaire a bien été supprimé.";

        header('Location: index.php?action=listcomments');
    }

    public function showPost($postId)
    {
        $postManager = new PostManager();
        $post = $postManager->getPost($postId);

        require('../view/BackEnd/PostView.php');

    }

    public function updatePost($postId,$article)
    {
        if (empty($article)){
            $_SESSION['notice'] = "Votre article n'a pas été modifié. Contenu vide.";
        }
        else {
            $postManager = new PostManager();
            $postManager->updatePost($postId,$article);
            $_SESSION['notice'] = "Votre article a bien été modifié.";
        }

        header('Location: index.php');
    }

    public function showComment($commentId)
    {
        $commentManager = new CommentManager();
        $comment = $commentManager->getComment($commentId);

        require('../view/BackEnd/CommentView.php');

    }

    public function updateComment($commentId,$comment)
    {

        if (empty($comment)){
            $_SESSION['notice'] = "Le commentaire n'a pas été modifié. Contenu vide.";
        }
        else {
            $commentManager = new CommentManager();
            $commentManager->updateComment($commentId,$comment);
            $_SESSION['notice'] = "Le commentaire a bien été modifié.";
        }

        header('Location: index.php?action=listcomments');
    }

}