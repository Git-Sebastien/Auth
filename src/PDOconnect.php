<?php 

namespace App;

use PDO;

class PDOconnect{

    public static function PDOconnect()
    {
        return new PDO('sqlite:../data.sqlite',null,null,[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
}