<?php
 include_once 'controller.php';
class Etudiants extends Controller {
    public function __construct(){
        parent::__construct('Etudiant');
    }

    public function index(){
       
        $etudiants = Model::all();
        $this->view('Etudiants/index', ['etudiants' => $etudiants]);
    }

    public function show($id){
       
        $etudiant = Model::find($id);
        $this->view('etudiant/show', ['etudiant' => $etudiant]);
    }

    public function create(){
        $this->view('etudiant/form');
    }

    public function store(){
       
        $etudiant = new Etudiant();
        $etudiant->nom = $_POST['nom'];
        $etudiant->prenom = $_POST['prenom'];
        $etudiant->specialite = $_POST['specialite'];
        $etudiant->save();

        $this->redirect('etudiant/index');
    }

    public function edit($id){
        $etudiant = Model::find($id);
        $this->view('etudiant/form', ['etudiant' => $etudiant, 'action' => 'edit']);
    }

    public function update($id){
        $etudiant = Model::find($id);
        $etudiant->nom = $_POST['nom'];
        $etudiant->prenom = $_POST['prenom'];
        $etudiant->specialite = $_POST['specialite'];
        $etudiant->save();

        $this->redirect('etudiant/index');
    }

    public function destroy($id){
        $etudiant = Model::find($id);
        $etudiant->delete();

        $this->redirect('etudiant/index');
    }
}

?>
