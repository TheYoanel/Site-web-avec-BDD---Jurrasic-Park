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
		if (array_key_exists($id, $this->db)) {
			return $this->db[$id];
		}
		return null;
	}

    public function readAll()
    {   
        $stmt = $this->db->prepare("SELECT * FROM dinosaures");
        return $stmt;
    }

}