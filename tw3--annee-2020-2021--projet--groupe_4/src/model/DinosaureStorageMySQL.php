<?php
require_once("DinosaureStorage.php");

class DinosaureStorageMySQL implements DinosaureStorage{

    protected $db;


    public function __construct($db){
        $this->db = $db;
    }


    function create(Dinosaure $a){
        return null;
    }

    
	public function read($id) {
        $stmt = $this->db->prepare("SELECT * FROM dinosaures WHERE id = ?");
        if ($stmt->execute(array($id))) {
            $row = $stmt->fetch();
            return $row;
        }
        else{
            return false;
        }
	}

    public function readAll()
    {   
        $stmt = $this->db->prepare("SELECT * FROM dinosaures");
        return $stmt;
    }

}