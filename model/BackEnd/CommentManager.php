<?php
require_once("../model/BackEnd/Manager.php");

class CommentManager extends Manager
{
    public function getComments($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(creation_date, \'%d/%m/%Y à %H H %i\') AS date_comment_fr FROM comments WHERE post_id = ? ORDER BY creation_date DESC');
        $comments->execute(array($postId));

        return $comments;
    }

    public function listComments()
    {
        $db = $this->dbConnect();
        $comments = $db->query('SELECT id, author, comment, DATE_FORMAT(creation_date, \'%d/%m/%Y\') AS creation_date_fr, alert FROM comments ORDER BY alert DESC,creation_date DESC');

        return $comments;
    }

    public function deleteComment($commentId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE FROM comments WHERE id =?');
        $req->execute(array($commentId));      
    }    

    public function getComment($commentId)
    {
        try
        {
            $db = $this->dbConnect();
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }

        $req = $db->prepare('SELECT id , comment FROM comments WHERE id = ?');
        $req->execute(array($commentId));
        $comment = $req->fetch();

        return $comment;
    }


    public function updateComment($commentId,$comment) 
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
        $dom->loadHTML($comment);
        $nodes_p = $dom->getElementsByTagName('p');
        foreach ($nodes_p as $node_p) {
            $p .= $node_p->nodeValue."\n";
        }
        
        $req = $db->prepare('UPDATE comments SET comment = ?, creation_date = CURRENT_TIME WHERE id = ?');
        $req->execute(array($p,$commentId));
        if (!$req) {
            echo "\nPDO::errorInfo():\n";
            print_r($db->errorInfo());
         }
 
    }    
}
