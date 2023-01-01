<?php

class Dinosaure{
    private $nom;
    private $nomLatin;
    private $regne;
    private $taille;
    private $description;
    private $danger;
    private $regime;

    public function __construct($nom, $nomLatin, $regne, $taille, $description, $danger, $regime){
        $this->nom = $nom;
        $this->nomLatin = $nomLatin;
        $this->regne = $regne;
        $this->taille = $taille;
        $this->description = $description;
        $this->danger = $danger;
        $this->regime = $regime;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getNomLatin(){
        return $this->nomLatin;
    }

    public function getRegne(){
        return $this->regne;
    }

    public function getTaille(){
        return $this->taille;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getDanger(){
        return $this->danger;
    }

    public function getRegime(){
        return $this->regime;
    }
}