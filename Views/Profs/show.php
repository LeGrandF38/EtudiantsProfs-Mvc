<center>
    <h1>Informations</h1>
 
    <table>
        <tr>
            <th>Nom</th>
            <td><span><?= $data != null ? $data->nom : "" ?></span></td>
        </tr>
        <tr>
            <th>Prenom</th>
            <td><span><?= $data != null ? $data->prenom : "" ?></span></td>
        </tr>
        <tr>
            <th>Specialite</th>
            <td><span><?= $data != null ? $data->specialite : "" ?></span></td>
        </tr>
    </table>
</center>

<?php
var_dump($data);
?>
