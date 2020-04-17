<?php
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
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Tableau des tournées</title>
    <!-- On peut avoir d'autres méta-données ici -->
  </head>
  <body>
  <h1>Organiser les tournées - AC11</h1>
  <br>
  <tr height="30">
          <th>Tourn&eacute;e</th>
          <th>Date</th>
          <th>Chauffeur</th>
          <th>V&eacute;hicule</th>
          <th>D&eacute;part</th>
          <th>Arriv&eacute;e</th>
          <th>Supprimer</th>
          <th>Modifier</th>
        </tr>
              <!-- creation des ligne des tournée -->
        <tr>
          <td><?php echo $row['TRNNUM']; ?></td>
          <td><?php echo $row['TRNDTE']; ?></td>
          <td><?php echo $row['CHFNOM']; ?></td>
          <td><?php echo $row['VEHIMMAT']; ?></td>
        <td>
          <?php
              //ajout de l'info "depart"
              $TRNNUM = $row['TRNNUM'];

              $depart_sql =  "SELECT LIEUNOM
                      FROM lieu,etape
                      WHERE etape.LIEUID = lieu.LIEUID
                      AND etape.TRNNUM = ".$TRNNUM."
                      ORDER BY ETPHREDEBUT ASC;";

              $depart = mysqli_query($con,$depart_sql);
              $depart = mysqli_fetch_array($depart);

              echo $depart[0];
            ?>
        </td>
        <td>
            <?php
            //ajout de l'info "arrivee"
              $arrivee_sql =  "SELECT LIEUNOM
                      FROM lieu,etape
                      WHERE etape.LIEUID = lieu.LIEUID
                      AND etape.TRNNUM = ".$TRNNUM."
                      ORDER BY ETPHREDEBUT DESC;";

              $arrivee = mysqli_query($con,$arrivee_sql);
              $arrivee = mysqli_fetch_array($arrivee);

              echo $arrivee[0];
            ?>
          </td>
  </body>
</html>