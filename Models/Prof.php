<?php
include_once("DAO/Model.php");

class Prof extends Model {
    public $nom;
    public $prenom;
    public $specialite;

    public function __construct($nom = '', $prenom = '', $specialite = '') {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->specialite = $specialite;
    }
    
    
}
?>
