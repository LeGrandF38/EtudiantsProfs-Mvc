<?php
class Profs extends Controller{
    public function __Construct(){
        parent::__construct('Prof');

    }
    public function index(){
        $this->view("index",Prof::All());
    }
    public function show($id){
        //....
    }

public function create(){}
    public function store(){}
public function edit($id){}
public function updated($id){}
public function destroy($id){}
}