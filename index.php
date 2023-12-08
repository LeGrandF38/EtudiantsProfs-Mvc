<?php

include_once("./models/Etudiant.php");

// Création d'un nouvel étudiant
$etudiant = new Etudiant();
$etudiant->nom = "Doe";
$etudiant->prenom = "John";
$etudiant->specialite = "Informatique";
$etudiant->save(); // Enregistrez l'étudiant dans la base de données

// Récupération de l'étudiant par ID
$idEtudiant = 3; // Remplacez 1 par l'ID de l'étudiant que vous voulez récupérer
$etudiantRecupere = Etudiant::find($idEtudiant);

// Affichage des informations de l'étudiant récupéré
echo "Étudiant récupéré : <br>";
echo "ID: " . $etudiantRecupere->id . "<br>";
echo "Nom: " . $etudiantRecupere->nom . "<br>";
echo "Prénom: " . $etudiantRecupere->prenom . "<br>";
echo "Spécialité: " . $etudiantRecupere->specialite . "<br>";

// Mise à jour de l'étudiant
$etudiantRecupere->specialite = "Mathématiques";
$etudiantRecupere->save(); // Enregistrez les modifications dans la base de données

// Suppression de l'étudiant
$etudiantRecupere->delete(); // Supprimez l'étudiant de la base de données

?>
