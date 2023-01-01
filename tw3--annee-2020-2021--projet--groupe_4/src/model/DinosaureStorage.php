<?php

interface DinosaureStorage{
	
	public function create(Dinosaure $d);
	
	public function read($id);

	public function readAll();

}

?>