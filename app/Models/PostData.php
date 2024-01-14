<?php

namespace App\Models;
use database;

class PostData
{
    private static $db;
    public function __contruct(){
        self::$db = new Database;
    }    

    public function findAllData($query){
        $this->db->query($query);
        return $this->db->resultSet();

    }

    public static function allPostData(){
        
        $cari = "select * from posts";
        self::$db->query($cari);
        return self::$db->resultSet();
    }
}
