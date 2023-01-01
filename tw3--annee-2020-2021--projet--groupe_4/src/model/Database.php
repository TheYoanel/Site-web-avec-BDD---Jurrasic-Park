<?php 



class Database
{

    protected $db;

    public function __construct()
    {
        try
        {
            $this->bdd = new PDO("mysql:host=".HOST."; dbname=".BASENAME."",  LOGIN, PASSWORD);
        }
        catch (Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        } 
    }


}










?>