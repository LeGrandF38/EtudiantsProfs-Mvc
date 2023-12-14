<!-- index.php -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
    include_once 'Views/public/Header.php';

    // $adresse = $_GET['adresse'];
    // $adresse = isset($_GET['url'])? $_GET['url']: '';
    // 
    $chemin = substr($_SERVER['SCRIPT_FILENAME'],0,-9);
    define("ROOT", $chemin);

    // 
    $infos_adresse = explode('/', $_GET['url']);

    if ($infos_adresse[0] != '') {
        $controleur = $infos_adresse[0];

        switch($controleur) {
            //etudiant
            case 'etudiant':
                include_once 'controllers/Etudiants.php';
                $etudiantController = new Etudiants();
                
                $action = isset($infos_adresse[1]) ? $infos_adresse[1] : 'index';

                switch($action) {
                    case 'create':
                        $etudiantController->create();
                        break;
                    case 'store':
                        $etudiantController->store();
                        break;
                    case 'edit':
                        $etudiantController->edit($infos_adresse[2]);
                        break;
                    case 'update':
                        $etudiantController->update($infos_adresse[2]);
                        break;
                    case 'destroy':
                        $etudiantController->destroy($infos_adresse[2]);
                        break;
                    case 'show':
                        $etudiantController->show($infos_adresse[2]);
                        break;
                    default:
                        $etudiantController->index();
                        break;
                }
                break;

            //pROF
            case 'prof':
                include_once 'controllers/profs.php';
                $profController = new Profs();
                
                $action = isset($infos_adresse[1]) ? $infos_adresse[1] : 'index';

                switch($action) {
                    case 'create':
                        $profController->create();
                        break;
                    case 'store':
                        $profController->store();
                        break;
                    case 'edit':
                        $profController->edit($infos_adresse[2]);
                        break;
                    case 'update':
                        $profController->update($infos_adresse[2]);
                        break;
                    case 'destroy':
                        $profController->destroy($infos_adresse[2]);
                        break;
                    case 'show':
                        $profController->show($infos_adresse[2]);
                        break;
                    default:
                        $profController->index();
                        break;
                }
                break;

            default:
                echo "Erreu";
                break;
        }
    } else {
    ?>
        <center>
            <a href="etudiant">
                <h1>Gestion des étudiants</h1>
            </a>
            <a href="prof">
                <h1>Gestion des Profs</h1>
            </a>
            
        </center>
    <?php
    }
    

    include_once 'Views/public/footer.php';
    ?>
</body>
</html>
