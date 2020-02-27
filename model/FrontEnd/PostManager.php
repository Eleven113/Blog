<?php
class PostManager
{
    protected $db;

    public function __construct($db)
    {
      $this->db = $db;
    }

    public function getPosts()
    {

        $posts = $this->db->query('SELECT id, title, post, DATE_FORMAT(creation_date, \'%d/%m/%Y\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 50');

        return $posts;
    }

    public function getPost($postId)
    {
        
        $req = $this->db->prepare('SELECT id, title, post FROM posts WHERE id = ? ');
        $req->execute(array($postId));
        $post = $req->fetch();
        
        return $post;
    }

}