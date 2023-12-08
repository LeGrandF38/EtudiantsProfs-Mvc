<?php
abstract class Controller{
    public function __construct(string $model){
        //charger le ficher corrspondant au modele souhaité
    }
    public function view(string $fichier, $data=null){
        //chargement de la vue concernée
    }
    public function Redirect($chimi){
        //....
        
    }
        abstract public function index();
        abstract public function show($id);
        abstract public function create();
        abstract public function store();
        abstract public function edit($id);
        abstract public function updated($id);
        abstract public function destroy($id);
}
