<?php
require_once("model/Manager.php");

class CommentManager extends Manager
{
    public function getComments($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(date_creation, \'%d/%m/%Y à %H H %i\') AS date_comment_fr FROM comments WHERE id_post = ? ORDER BY date_creation DESC');
        $comments->execute(array($postId));

        return $comments;
    }

    public function postComment($postId, $author, $comment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(id_post, author, comment, date_creation) VALUES(?, ?, ?, CURRENT_TIME)');
        $affectedLines = $comments->execute(array($postId, $author, $comment));

        return $affectedLines;
    }

    public function flagComment ($commentId)
    {

        $db = $this->dbConnect();
        $commentReq = $db->prepare('SELECT id_post FROM comments WHERE id = ?');
        $commentReq->execute(array($commentId));
        
        $comment = $commentReq->fetch();

        $alertReq = $db->prepare('UPDATE comments SET alert = alert+1 WHERE id = ?');
        $alertReq->execute(array($commentId));
        
        return $comment['id_post'];
    }

    public function listComments()
    {
        $db = $this->dbConnect();
        $comments = $db->query('SELECT id, author, comment, DATE_FORMAT(date_creation, \'%d/%m/%Y\') AS creation_date_fr, alert FROM comments ORDER BY alert DESC,date_creation DESC');

        return $comments;
    }

    public function deleteComment($commentId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE FROM comments WHERE id =?');
        $req->execute(array($commentId));
    }    
}
