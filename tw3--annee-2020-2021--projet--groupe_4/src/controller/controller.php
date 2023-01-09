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

    public function showDinosaur($id){
        $this->view->makeDinosaurPage($this->db->read($id));
    }

    public function showInscription(){
        $this->view->makePageInscription();
    }

    public function showConnexion(){
        $this->view->makePageDeConnexion();
    }

    public function showEspaceMembre(){
        $this->view->makePageEspaceMembre(); 
    }


}