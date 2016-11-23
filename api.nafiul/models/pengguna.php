<?php

namespace models;

use lib\MVC\Model\BaseModel;

class Pengguna extends BaseModel{
    public $name;
    public $email;
    
    public function __construct($name,$email) {
        $this->name = $name;
        $this->email = $email;
    }
    
    public static function getPengguna(){
        $query = self::getDB()->prepare("SELECT * FROM nma_user");
        $query->execute();
        
        $result = array();
        while ($row = $query->fetch()){
            array_push($result, new Pengguna($row["name"], $row["email"]));
        }
        
        return $result;
    }
}