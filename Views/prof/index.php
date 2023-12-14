

<center>
    <a href="./"> >>Menu principal  </a>
    <h1>Liste des étudiants</h1>
    <table border="1" width="480">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Spécialité</th>
            <th colspan="2"><a href="prof/create">>> Ajouter</a></th>
        </tr>
        <?php foreach($etudiants as $etudiant): ?>
            <tr>
                <td><?=$etudiant->id?></td>
                <td><?=$etudiant->nom?></td>
                <td><?=$etudiant->prenom?></td>
                <td><?=$etudiant->specialite?></td>
                <td><a href="prof/edit/<?=$etudiant->id?>">Edit</a></td>
                <td><a href="prof/destroy/<?=$etudiant->id?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</center>
