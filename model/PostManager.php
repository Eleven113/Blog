<?php
require_once("model/Manager.php");

class PostManager extends Manager
{
    public function getPosts()
    {
        try
        {
            $db = $this->dbConnect();
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }

        $posts = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 10');

        return $posts;
    }

    public function getPost($postId)
    {
        try
        {
            $db = $this->dbConnect();
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }

        // $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }

    public function createPost()
    { 
        try
        {
            $db = $this->dbConnect();
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }

        // $req = $bdd->prepare('INSERT INTO posts(id, posts) VALUES('', :post)');
        $req->execute(array('post' => $post));
    }

    public function updatePost() // A faire
    { 
        try
        {
            $db = $this->dbConnect();
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }

        // $req = $bdd->prepare('UPDATE INTO posts(id, posts) VALUES('', :post)');
        $req->execute(array('post' => $post));
    }

    public function deletePost() // A faire
    { 
        try
        {
            $db = $this->dbConnect();
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }

        // $req = $bdd->prepare('DELETE INTO posts(id, posts) VALUES('', :post)');
        $req->execute(array('post' => $post));
    }
}