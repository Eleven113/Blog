<?php

// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');

function listPosts()
{
    $postManager = new PostManager(); // Création d'un objet
    $posts = $postManager->getPosts(); // Appel d'une fonction de cet objet

    require('view/listpostsView.php');
}

function getPost()
{
    $postManager = new PostManager();
    $commentManager = new CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require('view/postView.php');
}

function addComment($postId, $author, $comment)
{
    $commentManager = new CommentManager();
    $affectedLines = $commentManager->postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id='. $postId);
    }
}

function alertComment($commentId)
{
    $commentManager = new CommentManager();
    $postId = $commentManager->flagComment($commentId);

    header('Location: index.php?action=post&id='. $postId);

}

function adminListPost()
{
    $postManager = new PostManager();
    $posts = $postManager->getPosts(); 

    require('view/adminlistpostsView.php');
}

function listComments()
{
    $commentManager = new CommentManager();
    $comments = $commentManager->listComments();

    require('view/adminlistcomments.php');
}

function createPost()
{
    require('view/admincreatepost.php');
}

function addPost($post)
{
    $postManager = new PostManager();
    $post = $postManager->addPost($post);

    header('Location: index.php?action=admin');

}

function deletePost($postId)
{
    $postManager = new PostManager();
    $postManager->deletePost($postId);

    header('Location: index.php?action=admin');
}

function deleteComment($commentId)
{
    $commentManager = new CommentManager();
    $commentManager->deleteComment($commentId);

    header('Location: index.php?action=listcomments');
}

function showPost($postId)
{
    $postManager = new PostManager();
    $post = $postManager->getPost($postId);

    // require('view/adminshowpost.php');

}