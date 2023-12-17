<h1>La liste des étudiants</h1>
<table border="1">
<tr>
    <th>ID</th>
    <th>Nom</th>
    <th>Prénom</th>
    <th>Spécialité</th>
    <th colspan="3"><a href="Etudiants/create">Ajouter</a></th>
</tr>

<?php
foreach ($data as $etudiant)
{
?>

<tr>
    <td><?= $etudiant->id ?></td>
    <td><?= $etudiant->nom ?></td>
    <td><?= $etudiant->prenom ?></td>
    <td><?= $etudiant->specialite ?></td>
    <td><a href="Etudiants/destroy/<?= $etudiant->id ?>">Supprimer</a></td>
    <td><a href="Etudiants/edit/<?= $etudiant->id ?>">Modifier</a></td>
    <td><a href="Etudiants/show/<?= $etudiant->id ?>">Afficher</a></td>
</tr>
<?php
}
?>
</table>
