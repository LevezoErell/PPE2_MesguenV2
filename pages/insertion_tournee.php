<?php
spl_autoload_register(function ($class_name) {
    require '../lib/classes/'.$class_name.'.php';
});
require '../lib/connect.php';

$tabTournee = [
    'trndte' => $_POST['date'],
    'chfid' => $_POST['chauffeur'],
    'vehimmat' => $_POST['vehicule'],
    'trnpecchauffeur' => $_POST['pencl'],
    'trncommentaire' => $_POST['comm']
];

$tournee = new Tournee();
$tournee->hydrate($tabTournee);

$result = $tournee->insert($connexion);

if ($result) {
    header ("Location: ../index.php?message=<font color=green>Insertion effectuée</font>");
}

else {
    header ("Location: ajouter_tournee.html.php?message=<font color=red>Erreur d'insertion</font>");
}