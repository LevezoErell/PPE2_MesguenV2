<?php
/**
 * Page AC13
 * Cette page permet d'insérer une nouvelle étape dans une tournée ou de modifier une  étape déjà existante
 * Elles sont numérotés automatiquement et chronologiquement dans une tournée
 * Une étape validée par le chauffeur ne peut plus être modifiée mais l'exploitant peut visualiser les données
 */
spl_autoload_register(function ($class_name) {
    require '../lib/classes/'.$class_name.'.php';
});
require '../lib/connectAD.php';

$tabEtape = [
    'trnNum' => $_POST['numTournee'],
    'etpId' => $_POST['idEtp'],
    'lieuId' => $_POST['idLieu'],
    'etpCommentaire' => $_POST['commentaire'],
    'etpHreDebut' => $_POST['hreDebut'],
    'etpHreFin' => $_POST['hreFin']
];

$etape = new etape();
$etape->hydrate($tabEtape);

$result = $etape->insert($connexion);

if ($result) {
    header ("Location: ../index.php?message=<font color=green>Insertion effectuée</font>");
}

else {
    header ("Location: insertion_etape.php?message=<font color=red>Erreur d'insertion</font>");
}