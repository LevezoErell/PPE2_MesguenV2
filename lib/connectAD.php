<?php
/**
 * Fichier permettant de se connecter à la base de donnée easyPhp
 * 
 */
include "AccesDonnees.php";

$ip=explode(".",$_SERVER['SERVER_NAME']);

switch ($ip[0]) {
    case 127 :
        $host = "127.0.0.1";
        $user = "root";
        $password = "";
        $dbname = "mlr1";
        $port='3306';
        break;
    default :
        exit ("Serveur non reconnu...");
        break;
}

	$connexion=connexion($host,$port,$dbname,$user,$password);

	if ($connexion) {
		echo "Connexion reussie $host:$port<br />";
		echo "Base $dbname selectionnee... <br />";
		echo "Mode acces : $modeacces<br />";
	}

	//deconnexion();
?>