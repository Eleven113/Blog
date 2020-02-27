<?php
require_once("model/FrontEnd/Manager.php");

class CommentManager extends Manager
{

    protected $db;

    public function __construct($db)
    {
      $this->db = $db;
    }

    public function getComments($postId)
    {

        $comments = $this->db->prepare('SELECT id, author, comment, DATE_FORMAT(creation_date, \'%d/%m/%Y à %H H %i\') AS date_comment_fr FROM comments WHERE post_id = ? ORDER BY creation_date DESC');
        $comments->execute(array($postId));

        return $comments;
    }

    public function postComment($postId, $author, $comment)
    {

        $comments = $this->db->prepare('INSERT INTO comments(post_id, author, comment, creation_date) VALUES(?, ?, ?, CURRENT_TIME)');
        $affectedLines = $comments->execute(array($postId, $author, $comment));

        return $affectedLines;
    }

    public function flagComment ($commentId)
    {

        $commentReq = $this->db->prepare('SELECT post_id FROM comments WHERE id = ?');
        $commentReq->execute(array($commentId));
        
        $comment = $commentReq->fetch();

        $alertReq = $this->db->prepare('UPDATE comments SET alert = alert+1 WHERE id = ?');
        $alertReq->execute(array($commentId));
        
        return $comment['post_id'];
    }

    // public function listComments()
    // {

    //     $comments = $this->db->query('SELECT id, author, comment, DATE_FORMAT(creation_date, \'%d/%m/%Y\') AS creation_date_fr, alert FROM comments ORDER BY alert DESC,creation_date DESC');

    //     return $comments;
    // }

    // public function deleteComment($commentId)
    // {

    //     $req = $this->db->prepare('DELETE FROM comments WHERE id =?');
    //     $req->execute(array($commentId));      
    // }    

    // public function getComment($commentId)
    // {


    //     $req = $db->prepare('SELECT id , comment FROM comments WHERE id = ?');
    //     $req->execute(array($commentId));
    //     $comment = $req->fetch();

    //     return $comment;
    // }

}
