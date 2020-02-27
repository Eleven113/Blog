<?php
class ManagerFront
{
    public static function dbConnect()
    {
        $db = new PDO('mysql:host=db5000288257.hosting-data.io;dbname=dbs281510;charset=utf8', 'dbu97120', 'Oh7811bm!=');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $db;
    }
}
