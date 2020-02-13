<?php

require_once('../model/BackEnd/PostManager.php');
require_once('../model/BackEnd/CommentManager.php');

function listPost()
{
    $postManager = new PostManager();
    $posts = $postManager->getPosts(); 

    require('../view/BackEnd/ListPostsView.php');
}

function listComments()
{
    $commentManager = new CommentManager();
    $comments = $commentManager->listComments();

    require('../view/BackEnd/ListCommentsView.php');
}

function createPost()
{
    require('../view/BackEnd/CreatePostView.php');
}

function addPost($post)
{
    $postManager = new PostManager();
    $post = $postManager->addPost($post);
    $_SESSION['notice'] = "Votre article a bien été ajouté.";
    header('Location: index.php');

}

function deletePost($postId)
{
    $postManager = new PostManager();
    $postManager->deletePost($postId);
    $_SESSION['notice'] = "Votre article a bien été supprimé.";

    header('Location: index.php');
}

function deleteComment($commentId)
{
    $commentManager = new CommentManager();
    $commentManager->deleteComment($commentId);
    $_SESSION['notice'] = "Le commentaire a bien été supprimé.";

    header('Location: index.php?action=listcomments');
}

function showPost($postId)
{
    $postManager = new PostManager();
    $post = $postManager->getPost($postId);

    require('../view/BackEnd/PostView.php');

}

function updatePost($postId,$article)
{
    $postManager = new PostManager();
    $postManager->updatePost($postId,$article);
    $_SESSION['notice'] = "Votre article a bien été modifié.";

    header('Location: index.php');
}

function showComment($commentId)
{
    $commentManager = new CommentManager();
    $comment = $commentManager->getComment($commentId);

    require('../view/BackEnd/CommentView.php');

}

function updateComment($commentId,$comment)
{
    $commentManager = new CommentManager();
    $commentManager->updateComment($commentId,$comment);
    $_SESSION['notice'] = "Le commentaire a bien été modifié.";

    header('Location: index.php?action=listcomments');
}