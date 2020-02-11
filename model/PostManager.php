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

        $posts = $db->query('SELECT id, title, post, DATE_FORMAT(creation_date, \'%d/%m/%Y\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 50');

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
        echo $postId;
        $req = $db->prepare('SELECT id, title, post FROM posts WHERE id = ? ');
        $req->execute(array($postId));
        $post = $req->fetch();
        
        return $post;
    }

    public function addPost($article)
    { 
        try
        {
            $db = $this->dbConnect();
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }

        $dom = new DOMDocument;
        $dom->loadHTML($article);
        $nodes_h3 = $dom->getElementsByTagName('h3');
        foreach ($nodes_h3 as $node_h3) {
            $title = $node_h3->nodeValue;          
        }

        $nodes_p = $dom->getElementsByTagName('p');
        foreach ($nodes_p as $node_p) {
            $p .= $node_p->nodeValue."\n";

        }

        $req = $db->prepare('INSERT INTO posts(title,post,creation_date) VALUES ( ?,?, CURRENT_TIME)');
        $req->execute(array($title,$p));
        if (!$req) {
            echo "\nPDO::errorInfo():\n";
            print_r($db->errorInfo());
         }
        else {
            $exec = true;
        }

        return $exec;
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

    public function deletePost($postId)
    { 
        try
        {
            $db = $this->dbConnect();
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }

        $req = $db->prepare('DELETE FROM posts WHERE id = ?');
        $req->execute(array($postId));


        // if (!$vardemerde) {
        //     echo "\nPDO::errorInfo():\n";
        //     print_r($db->errorInfo());
        // }
        // else{
        //     echo 'c good';
        // }

    }
}