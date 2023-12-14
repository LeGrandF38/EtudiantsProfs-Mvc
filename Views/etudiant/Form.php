<!-- views/etudiant/form.php -->

<?php
$url = "../store";
if ($action == "edit")
    $url = "../../update/" . $infos_adresse[2];
?>

<center>
    <form action="etudiant/<?=$url?>" method="post">
        <table>
            <tr>   
                <td>Nom</td>
                <td><input type="text" name="nom" value="<?=$etudiant->nom ?? ''?>"></td>
            </tr>
            <tr>
                <td>Prénom</td>
                <td><input type="text" name="prenom" value="<?=$etudiant->prenom ?? ''?>"></td>
            </tr>
            <tr>
                <td>Spécialité</td>
                <td><input type="text" name="specialite" value="<?=$etudiant->specialite ?? ''?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Envoyer"></td>
                <td><input type="reset" value="Annuler"></td>
            </tr>
        </table> 
    </form>
</center>
