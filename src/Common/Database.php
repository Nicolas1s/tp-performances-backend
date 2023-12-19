<?php

namespace App\Common;

use PDO;

class Database{
    private PDO $db;
    static private $instance;    
    protected function __construct(){
        $this->db = new PDO( "mysql:host=db;dbname=tp;charset=utf8mb4", "root", "root" );
    }

    public static function getinstance() : static {
        if ( ! isset( self::$instance)){
            self::$instance = new Database();
            return self::$instance;
        }
        else{
            return self::$instance;
        }
    }

    public function getPDO() : PDO {
        return $this->db;
    }
}