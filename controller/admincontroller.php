<?php

// Chargement des classes
require_once('../model/PostManager.php');
require_once('../model/CommentManager.php');

function adminListPost()
{
    $postManager = new PostManager();
    $posts = $postManager->getPosts(); 

    require('view/adminlistpostsView.php');
}