<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Views/Public/styles/style.css"> Inclusion du fichier style.css
    <title>Site de Gestion Etudiants et profs</title>
</head>
<body>


<?php
 include_once 'Views/public/header.php';
 $chemin = substr($_SERVER['SCRIPT_FILENAME'],0,-9);
  define("ROOT",$chemin);

//Chargement du modele et du controleur principal
include_once ROOT.'Models/Model.php';
include_once ROOT.'Controllers/Controller.php';
//include_once ROOT.'Views/public/header.php';

$url = $_GET["url"];
  $id=0;
  $infos_url=explode("/",$url);
  if($infos_url[0]!="")
        if(file_exists( ROOT.'Controllers/'.$infos_url[0].".php")){
          include_once ROOT.'Controllers/'.$infos_url[0].".php";
          $controleur = new $infos_url[0]();
          $action="index";
          if(isset($infos_url[1]))
            $action = $infos_url[1];
            if(method_exists($controleur,$action)){
              $request = null;
            if(isset($infos_url[2]))
              $id = $infos_url[2];
            if(!empty($_POST))
            {
              $request = new stdClass();
              foreach ($_POST as $key=>$value) {
                $request->$key = $value;
              }
            }
            if($request != null){
              if($id!=0)
                $controleur->$action($id,$request);              
              else 
                $controleur->$action($request);
            } else {
                if($id == 0)
                 $controleur->$action();
                else
                  $controleur->$action($id);
            }

          } else echo "Url introuvable";

        }
        else echo "url introuvable";

        else
        { ?>



<center>
            <a href="Etudiants">
                <h1>Gestion des etudiants</h1>
            </a>
            <a href="Profs">
                <h1>Gestion des Profs</h1>
            </a>
            
        </center>

<?php }


  include_once 'Views/public/footer.php';

?>
</body>
</html>
























