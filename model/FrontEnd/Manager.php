<?php
class Manager
{
    public function dbConnect()
    {
        $db = new PDO('mysql:host=db5000288257.hosting-data.io;dbname=dbs281510;charset=utf8', 'dbu97120', 'Oh7811bm!=');
        return $db;
    }
}
