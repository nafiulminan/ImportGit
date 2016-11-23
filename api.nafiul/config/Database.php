<?php

/**
 * Description of Database
 *
 * @author Nafiul
 * @date 4:10:15 PM, Nov 1, 2016
 */
class Database {
    
    private $server;
    private $username;
    private $password;
    private $db;
    
    public function setServer($server){
        $this->server= $server;
    }
    
    public function setUsername($user){
        $this->username = $user;
    }
    
    public function setPassword($pass){
        $this->password = $pass;
    }
    
    public function setDatabase($db){
        $this->db = $db;
    }
    
    
    private function getServer(){
        return $this->server;
    }
    
    private function getUsername(){
        return $this->username;
    }
    
    private function getPassword(){
        return $this->password;
    }
    
    private function getDatabse(){
        return $this->db;
    }
    
    function koneksi(){
        try {
            $con = new PDO("mysql=host:".$this->getServer().";dbname:".$this->getDatabase().";", $this->getUsername(), $this->getPassword());
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
}
