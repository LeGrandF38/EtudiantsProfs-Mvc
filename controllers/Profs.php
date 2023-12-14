<?php
 include_once 'controller.php';
class Profs extends Controller {
    public function __construct(){
        parent::__construct('Prof');
    }

    public function index(){
       
        $prof = Model::all();
        $this->view('prof/index', ['prof' => $prof]);
    }

    public function show($id){
       
        $prof = Model::find($id);
        $this->view('prof/show', ['etudiant' => $prof]);
    }

    public function create(){
        $this->view('prof/form');
    }

    public function store(){
       
        $prof = new Prof();
        $prof->nom = $_POST['nom'];
        $prof->prenom = $_POST['prenom'];
        $prof->specialite = $_POST['specialite'];
        $prof->save();

        $this->redirect('prof/index');
    }

    public function edit($id){
        $etudiant = Model::find($id);
        $this->view('prof/form', ['prof' => $prof, 'action' => 'edit']);
    }

    public function update($id){
        $prof = Model::find($id);
        $prof->nom = $_POST['nom'];
        $prof->prenom = $_POST['prenom'];
        $prof->specialite = $_POST['specialite'];
        $prof->save();

        $this->redirect('prof/index');
    }

    public function destroy($id){
        $prof = Model::find($id);
        $prof->delete();

        $this->redirect('prof/index');
    }
}

?>
