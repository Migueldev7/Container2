<?php
require("DataBase/DataBase.php");
require("Model/Model.php");


class Service
{

    private $db;

    public function __construct()
    {
        $this->db = new DataBase();
    }

    public function registerContainer($id , $name , $number , $status , $category){
        $this->db->execute("INSERT INTO cliente (id, name, number, status, category) VALUES ($id , $name, $number , $status , $category");
    }
}
