<h1>La liste des profs</h1>
<table border="1">
<tr>
    <th>ID</th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Speciate</th>
    <th colspan="3"><a href="Profs/create">ajouter</a></th>
</tr>

<?php
foreach ($data as $E)
{
?>

<tr>
    <td><?=$E->id ?></td>
    <td><?=$E->nom ?></td>
    <td><?=$E->prenom ?></td>
    <td><?=$E->specialite ?></td>
    <td><a href="Profs/destroy/<?=$E->id ?>">delete</a></td>
    <td><a href="Profs/edit/<?=$E->id ?>">edit</a></td>
    <td><a href="Profs/show/<?=$E->id ?>">show</a></td>
</tr>
<?php
}
?>
</table>