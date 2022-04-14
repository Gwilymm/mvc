<?php

$titre = "Bienvenue sur la page d'accès aux contacts";
$titrePage = "ACCEUIL";

$action = 'accueil';

if (isset($_GET['action'])){
    $action = $_GET['action'];
} 

//récupère l'emplacement de la liste de contact issue du param.ini
$cheminListeContact = parse_ini_file("param/param.ini");

$listeContact = $cheminListeContact['chemin'] . $cheminListeContact['fichierContacts'];

switch($action){
    case 'accueil':
        /* Définition du titre de la page. */
        $titre = "Bienvenue sur la page d'accès aux contacts";
        $titrePage = "ACCEUIL";
        require("vues/view_header.php");
        require("vues/view_accueil.php");
        break;
    case 'liste':
        $titre = "Liste des contacts";
        $titrePage = "LISTE";
        require("vues/view_header.php");
        require("vues/view_listeContacts.php");
        require("vues/view_footer.html");
        break;
}

