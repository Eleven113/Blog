<?php
function adminListPost()
{
    $postManager = new PostManager();
    $posts = $postManager->getPosts(); 

    require('view/BackEnd/ListPostsView.php');
}

function listComments()
{
    $commentManager = new CommentManager();
    $comments = $commentManager->listComments();

    require('view/BackEnd/ListCommentsView.php');
}

function createPost()
{
    require('view/BackEnd/CreatePostView.php');
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

    require('view/BackEnd/ShowPostView.php');

}

function updatePost($postId,$article)
{
    $postManager = new PostManager();
    $postManager->updatePost($postId,$article);

    header('Location: admin/index.php?action=admin');
}

function showComment($commentId)
{
    $commentManager = new CommentManager();
    $comment = $commentManager->getComment($commentId);

    require('view/BackEnd/ShowCommentView.php');

}

function updateComment($commentId,$comment)
{
    $commentManager = new CommentManager();
    $commentManager->updateComment($commentId,$comment);

    header('Location: index.php?action=listcomments');
}