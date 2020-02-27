<?php
class CommentManager
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

}
