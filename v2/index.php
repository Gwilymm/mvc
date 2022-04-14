<?php
require_once("vues/view_header.php");

//récupération des paramètres
echo "$_GET : ";
print_r($_GET);
$tParam = parse_ini_file("param/param.ini");


//Initialisation des variables
$fichier = $tParam['chemin'] . $tParam['fichierContact'];
$action = 'accueil';

if (isset($_GET['action'])) {
    $action = $_GET['action'];
}

//Etapes et traitements
switch ($action) {
    case 'accueil':
        $sTitre = 'ACCUEIL';
        $sTitrePAge = 'Annuaire MVC';
        require('vues/view_header.php');
        require_once("vues/view_accueil.php");
        require('vues/view_footer.php');
        break;
    case 'listeContacts':
        $sTitre = "LISTE";
        $sTitrePAge = "La liste des contacts";
        require('vues/view_header.php');
        require_once("vues/view_accueil.php");
        require('vues/view_footer.php');
        break;
}


require_once("modele.inc.php");


require_once("vues/view_footer.php");
