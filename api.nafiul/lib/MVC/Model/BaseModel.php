<?php

namespace lib\MVC\Model;

abstract class BaseModel{
    public static function getDB(){
        return new \PDO("mysql:host=localhost;dbname=nafiul_application","root","");
    }

}