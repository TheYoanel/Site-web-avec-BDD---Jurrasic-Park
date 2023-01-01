<?php
require_once("src/view/View.php");

class Controller{
    private $view;
    private $db;

    public function __construct(View $view, DinosaureStorageMySQL $db){
        $this->view = $view;
        $this->db = $db;
    }

    public function showHome(){
        $this->view->makeAccueilPage();
    }

    public function showAPropos(){
        $this->view->makeAProposPage();
    }

    public function showCollections(){
        $this->view->makeListPage($this->db->readAll());
    }

}