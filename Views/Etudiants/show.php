<center>
    <h1>Informations</h1>
 
    <table>
        <tr>
            <th>Nom</th>
            <td><span><?= $data != null ? $data->nom : "" ?></span></td>
        </tr>
        <tr>
            <th>Prénom</th>
            <td><span><?= $data != null ? $data->prenom : "" ?></span></td>
        </tr>
        <tr>
            <th>Spécialité</th>
            <td><span><?= $data != null ? $data->specialite : "" ?></span></td>
        </tr>
    </table>
</center>

<?php
var_dump($data);
?>
