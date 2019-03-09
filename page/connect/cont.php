<?php
class DB{
    protected $db;
    public function __construct($user,$pass,$dbname){
     $this->db=new PDO("mysql:host=localhost;dbname=".$dbname."",$user,$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }
}