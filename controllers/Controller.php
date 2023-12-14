<?php
abstract class Controller {
    public function __construct(string $model){
      
    }

    public function view(string $fichier, $data=null){
     
    }

    public function redirect($chimi){
        // ....
    }

    abstract public function index();
    abstract public function show($id);
    abstract public function create();
    abstract public function store();
    abstract public function edit($id);
    abstract public function update($id);
    abstract public function destroy($id);
}
?>