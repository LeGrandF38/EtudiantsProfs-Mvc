<?php

 class Profs extends Controller{

	public function __construct(){
		parent::__construct("Prof");
	}


	public function index() {
        // echo "j execute intex";
        $data= Prof::all();
        // var_dump($r_all);
        // $this->view("index" ,Prof::all());
        include_once ROOT."Views/".get_class($this)."/index.php";
    }

    public function show($id) {
        $data= Prof::find($id);

        include_once ROOT."Views/".get_class($this)."/show.php";
    }

    public function create() {
         // echo "j execute crate";
         $data= null;
        //  $data= Prof::all();
         // var_dump($r_all);
         // $this->view("index" ,Prof::all());
         include_once ROOT."Views/".get_class($this)."/form.php";
   
    }

    public function store($request) {
        $nom = $request->nom;
        $prenom = $request->prenom;
        $specialite = $request->specialite;
    
        $newProf = new Prof();
        $newProf->nom = $nom;
        $newProf->prenom = $prenom;
        $newProf->specialite = $specialite;
        $newProf->save();
    
        
    }

    public function edit($id) {
         // echo "j execute crate";
       
         $data= Prof::find($id);
         // var_dump($r_all);
         // $this->view("index" ,Prof::all());
         include_once ROOT."Views/".get_class($this)."/form.php";
   
    }

    public function update($id, $request) {
        $prof = new Prof();
            $nom = $request->input('nom');
            $prenom = $request->input('prenom');
            $specialite = $request->input('specialite');
    
            $prof->nom = $nom;
            $prof->prenom = $prenom;
            $prof->specialite = $specialite;
            $prof->update();
    
            $this->redirect('/profs');
       
    }
    

    public function destroy($id) {
        echo 'je suis destroy';
        $P= Prof::find($id);
        var_dump($P);
        $P->delete();
        $this->Redirect("../../Profs");
    }
}

