# PPE Mesguen - Client Léger

Application chauffeur client léger pour la société de transport **MESGUEN**, développé en **PHP Orienté Objet**.
L'application chauffeur est destinée à enregistrer les tournées des chauffeurs et à diffuser personnellement l'organisation de sa tournée à un chauffeur, étape par étape.
Cette application rentre dans le cadre d'un service de qualité à rendre au client final (comme la grande distribution) de plus en plus demandeur d'informations en temps réel.
Cette application web est destinée à tous les intervenants : 
- Exploitant (utilisateurs du service logistique)
- Chauffeurs

## Documentation
[Documentation technique](https://estran.sharepoint.com/:w:/s/18-19-SIO1/EfE7APRVTCdGvY7nc4MWWhgByrhbzvgOQiH8uMCZ5ONsTg?e=o6Z56j)

## Prérequis

- Une base de données **MySql** par **EasyPhp**
- Un environnement de développement **Visual Studio Code**
- Les scripts pour mettre en place la base de données

## Démarrage
Démarrage de la base de données **MySql**

## Droits et accessibilité
Les exploitants peuvent visualiser l'application Web depuis un écran standard
Les chauffeurs peuvent visualiser l'application sur leur téléphone portable professionnel

## Explication des pages par rapport au cahier des charges
* afficher_touree correspond à la page AC11
    * Permet d'afficher la liste des tournées par ordre de numéros croissants.

* insertion_etape correspond à la page AC13
    * Permet de modifier une étape ou d'en créer une nouvelle.

* insertion_tournée correspond à la page AC12
    * Permet de créer un nouvelle tournée ou de modifier un tournée déjà existante.
