<?php
include_once("./DAO/Model.php");

class Etudiant extends Model {
    public $nom, $prenom, $specialite;
    public function __construct($nom = '', $prenom = '', $specialite = ''){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->specialite = $specialite;
    }
    
}

?>