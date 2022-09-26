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

    public function registerContainer($name, $number, $status, $category)
    {
        $this->db->execute("INSERT INTO cliente (id, name, number, status, category) VALUES ($name, $number , $status , $category");
    }

    public function Delete($id)
    {
        $this->db->execute("DELETE FROM cliente WHERE id = $id");
    }

    public function Updade($id, $name, $number, $status, $category)
    {
        $this->db->execute("UPDATE cliente SET name = $name ,number= $number , status = $status , category = $category WHERE id = $id");
    }

    public function SelectByID($id)
    {
        $this->db->execute("SELECT * FROM cliente WHERE id = $id");
    }
}
