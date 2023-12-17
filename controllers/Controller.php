<?php 

abstract class Controller {

	
	 public function __construct($model)
	{
		include_once ROOT.'./Models/'.$model.".php";
	}

	public function view(string $fichier,$data=null){
		echo "j execute view";
		include_once ROOT."Views/".get_class($this)."/$fichier.php";
	}


	public function Redirect($chemin)
	{
		header("Location:".$chemin);
	}
}