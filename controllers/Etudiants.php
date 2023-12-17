<?php

class Etudiants extends Controller {

    public function __construct() {
        parent::__construct("Etudiant");
    }

    public function index() {
        $data = Etudiant::all();
        include_once ROOT . "Views/" . get_class($this) . "/index.php";
    }

    public function show($id) {
        $data = Etudiant::find($id);
        include_once ROOT . "Views/" . get_class($this) . "/show.php";
    }

    public function create() {
        $data = null;
        include_once ROOT . "Views/" . get_class($this) . "/form.php";
    }

    public function store($request) {
        $nom = $request->nom;
        $prenom = $request->prenom;
        $specialite = $request->specialite;

        $newEtudiant = new Etudiant();
        $newEtudiant->nom = $nom;
        $newEtudiant->prenom = $prenom;
        $newEtudiant->specialite = $specialite;
        $newEtudiant->save();
    }

    public function edit($id) {
        $data = Etudiant::find($id);
        include_once ROOT . "Views/" . get_class($this) . "/form.php";
    }

    public function update($id, $request) {
        $etudiant = new Etudiant();
        $nom = $request->input('nom');
        $prenom = $request->input('prenom');
        $specialite = $request->input('specialite');

        $etudiant->nom = $nom;
        $etudiant->prenom = $prenom;
        $etudiant->specialite = $specialite;
        $etudiant->update();

        $this->redirect('/etudiants');
    }

    public function destroy($id) {
        $E = Etudiant::find($id);
        $E->delete();
        $this->redirect("/etudiants");
    }
}

?>
